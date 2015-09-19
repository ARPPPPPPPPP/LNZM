<?php

namespace Admin\Controller;

use Think\Controller;

class SystemSettingController extends Controller {
	public function organizationSystemSetting() {
		if (! isset ( $_SESSION ['userId'] )) {
			$this->error ( C ( 'LOGIN_FIRST' ) );
		}
		
		doLog($_SESSION ['userId'],15,'View_allOrganization');
		
		$this->assign ( 'APPLICATION_NAME', C ( 'APPLICATION_NAME' ) );
		$this->assign ( 'USER_ID', $_SESSION ['userId'] );
		$this->assign ( 'USER_LEVEL', $_SESSION ['userLevel'] );
		$this->assign ( 'CURRENT_MENU', 'ACADEMYBRANCHSETTING' );
		
		$academy = M ( 'academy' );
		$branch = M ( 'branch' );
		try {
			if (isset ( $_GET ['deleteAcademy'] )) {
				// 传入删除参数
				$academy->where ( 'academyid=' . $_GET ['deleteAcademy'] )->delete ();
			}
			if (isset ( $_GET ['deleteAcademyMulti'] )) {
				// 传入删除多项的参数
				$multi = explode ( ',', $_GET ['deleteAcademyMulti'] );
				for($index = 1; $index < count ( $multi ); $index ++) {
					// 从第二个开始删除，第一个的产生是由于U方法生成参数的时候无法不输入一个参数
					if ($multi [$index] != null) {
						$academy->where ( 'academyid=' . $multi [$index] )->delete ();
					}
				}
			}
			
			if (isset ( $_GET ['deleteBranch'] )) {
				// 传入删除参数
				$branch->where ( 'branchid=' . $_GET ['deleteBranch'] )->delete ();
			}
			if (isset ( $_GET ['deleteBranchMulti'] )) {
				// 传入删除多项的参数
				$multi = explode ( ',', $_GET ['deleteBranchMulti'] );
				for($index = 1; $index < count ( $multi ); $index ++) {
					// 从第二个开始删除，第一个的产生是由于U方法生成参数的时候无法不输入一个参数
					if ($multi [$index] != null) {
						$branch->where ( 'branchid=' . $multi [$index] )->delete ();
					}
				}
			}
		} catch ( Exception $e ) {
			// 删除错误
			$this->error ( C ( 'DELETE_FAIL' ) . $e->__toString () );
			return;
		}
		
		// 查询当前所有的学院并且分页
		$countAcademy = $academy->count ();
		$pageAcademy = new \Think\Page ( $countAcademy, C ( 'PAGE_COUNT' ), 'p1' );
		$pageAcademy->setP ( 'p1' );
		$orderbyAcademy ['academyrank'] = 'desc';
		$listAcademy = $academy->order ( $orderbyAcademy )->limit ( $pageAcademy->firstRow . ',' . $pageAcademy->listRows )->select ();
		$listAllAcademy = $academy->select ();
		$this->assign ( 'listAcademy', $listAcademy ); // 赋值数据集
		$this->assign ( 'pageAcademy', $pageAcademy->show () ); // 赋值分页输出
		                                                        
		// 查询当前所有的支部，并且分页显示
		$countBranch = $branch->count ();
		$pageBranch = new \Think\Page ( $countBranch, C ( 'PAGE_COUNT' ), 'p2' );
		$pageBranch->setP ( 'p2' );
		$listBranch = $branch->order ( 'branchacademy,branchid desc' )->limit ( $pageBranch->firstRow . ',' . $pageBranch->listRows )->select ();
		// 将学院id转化为学院名
		for($i = 0; $i < count ( $listBranch ); $i ++) {
			for($j = 0; $j < count ( $listAllAcademy ); $j ++) {
				if ($listBranch [$i] ['branchacademy'] == $listAllAcademy [$j] ['academyid']) {
					$listBranch [$i] ['branchacademy'] = $listAllAcademy [$j] ['academyname'];
					break;
				}
			}
		}
		// dump($listBranch);
		// return ;
		$this->assign ( 'listBranch', $listBranch ); // 赋值数据集
		$this->assign ( 'pageBranch', $pageBranch->show () ); // 赋值分页输出
		
		$this->display ();
	}
	public function addAcademy() {
		if (! isset ( $_SESSION ['userId'] )) {
			$this->error ( C ( 'LOGIN_FIRST' ) );
		}
		$this->assign ( 'APPLICATION_NAME', C ( 'APPLICATION_NAME' ) );
		$this->assign ( 'USER_ID', $_SESSION ['userId'] );
		$this->assign ( 'USER_LEVEL', $_SESSION ['userLevel'] );
		$this->assign ( 'CURRENT_MENU', 'ACADEMYBRANCHSETTING' );
		
		// echo $_POST['academyName'];
		// echo $_POST['academyDescription'];
		
		$academy = M ( 'academy' );
		
		$data ['academyName'] = $_POST ['academyName'];
		$data ['academyDescription'] = $_POST ['academyDescription'];
		$data ['academyRank'] = $_POST ['academyRank'];
		$academy->create ( $data );
		$addAcademyId = $academy->add ();
		if ($addAcademyId) {
			doLog($_SESSION ['userId'],16,'Add_Academy_Id_:_' . $addAcademyId);
			$this->success ( C ( 'ADD_SUCCESS' ), 'organizationSystemSetting' );
		} else {
			$this->error ( C ( 'ADD_FAIL' ), 'organizationSystemSetting' );
		}
	}
	public function editAcademy() {
		if (! isset ( $_SESSION ['userId'] )) {
			$this->error ( C ( 'LOGIN_FIRST' ) );
		}
		doLog($_SESSION ['userId'],17,'Edit_Academy_Id_:_' . $_GET ['academyid']);
		$this->assign ( 'APPLICATION_NAME', C ( 'APPLICATION_NAME' ) );
		$this->assign ( 'USER_ID', $_SESSION ['userId'] );
		
		$academy = M ( 'academy' );
		$editAcademy = $academy->where ( 'academyId=' . $_GET ['academyid'] )->find ();
		
		// dump($editAcademy);
		// return ;
		
		$this->assign ( 'academy', $editAcademy );
		$this->display ();
	}
	public function editAcademySubmit() {
		if (! isset ( $_SESSION ['userId'] )) {
			$this->error ( C ( 'LOGIN_FIRST' ) );
		}
		$this->assign ( 'APPLICATION_NAME', C ( 'APPLICATION_NAME' ) );
		$this->assign ( 'USER_ID', $_SESSION ['userId'] );
		$this->assign ( 'USER_LEVEL', $_SESSION ['userLevel'] );
		$this->assign ( 'CURRENT_MENU', 'SYSTEMSETTING' );
		
		$academy = M ( 'academy' );
		$data ['academyId'] = $_GET ['academyid'];
		$data ['academyName'] = $_POST ['academyname'];
		$data ['academyDescription'] = $_POST ['academydescription'];
		$data ['academyRank'] = $_POST ['academyrank'];
		// dump($data);
		// return;
		$result = $academy->save ( $data );
		if ($result !== false) {
			// echo U('WorkTendency/allPage');
			doLog($_SESSION ['userId'],18,'Edit_Academy_Submit_Id_:_' . $_GET ['academyid']);
			
			echo '
					<head>
						<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					</head>
					<h1 style="line-height:400px;text-align:center">成功，1秒后自动关闭</h1>
					<script language="javascript">
						function closeWindow(){
							window.opener=null;
							window.open("","_self")
							window.close();
						}
						setTimeout("closeWindow()",1000);
		
					</script>';
			// $this->success ( C ( 'EDIT_SUCCESS' ), '/WorkTendency/allPage' );
		} else {
			$this->error ( C ( 'EDIT_FAIL' ) );
		}
	}
	public function addBranch() {
		if (! isset ( $_SESSION ['userId'] )) {
			$this->error ( C ( 'LOGIN_FIRST' ) );
		}
		
		$this->assign ( 'APPLICATION_NAME', C ( 'APPLICATION_NAME' ) );
		$this->assign ( 'USER_ID', $_SESSION ['userId'] );
		$this->assign ( 'USER_LEVEL', $_SESSION ['userLevel'] );
		$this->assign ( 'CURRENT_MENU', 'SYSTEMSETTING' );
		
		$branch = M ( 'branch' );
		
		$data ['branchName'] = $_POST ['branchName'];
		$data ['branchDescription'] = $_POST ['branchDescription'];
		$data ['branchAcademy'] = $_POST ['branchAcademy'];
		
		// dump($data);
		// return;
		
		$branch->create ( $data );
		$addBranchId = $branch->add ();
		if ($addBranchId) {
			doLog($_SESSION ['userId'],19,'Add_Branch_Id_:_' . $addBranchId);
			$this->success ( C ( 'ADD_SUCCESS' ), 'organizationSystemSetting' );
		} else {
			$this->error ( C ( 'ADD_FAIL' ), 'organizationSystemSetting' );
		}
	}
	public function editBranch() {
		if (! isset ( $_SESSION ['userId'] )) {
			$this->error ( C ( 'LOGIN_FIRST' ) );
		}
		$this->assign ( 'APPLICATION_NAME', C ( 'APPLICATION_NAME' ) );
		$this->assign ( 'USER_ID', $_SESSION ['userId'] );
		$this->assign ( 'USER_LEVEL', $_SESSION ['userLevel'] );
		$this->assign ( 'CURRENT_MENU', 'SYSTEMSETTING' );
		
		doLog($_SESSION ['userId'],20,'Edit_Branch_Id_:_' . $_GET ['branchid']);
		
		$branch = M ( 'branch' );
		$academy = M ( 'academy' );
		$editBranch = $branch->where ( 'branchid=' . $_GET ['branchid'] )->find ();
		
		// dump ( $editBranch );
		// return;
		$orderbyAcademy ['academyid'] = 'desc';
		$listAcademy = $academy->order ( $orderbyAcademy )->select ();
		$this->assign ( 'listAcademy', $listAcademy ); // 赋值数据集
		$this->assign ( 'branch', $editBranch );
		$this->display ();
	}
	public function editBranchSubmit() {
		if (! isset ( $_SESSION ['userId'] )) {
			$this->error ( C ( 'LOGIN_FIRST' ) );
		}
		$this->assign ( 'APPLICATION_NAME', C ( 'APPLICATION_NAME' ) );
		$this->assign ( 'USER_ID', $_SESSION ['userId'] );
		$this->assign ( 'USER_LEVEL', $_SESSION ['userLevel'] );
		$this->assign ( 'CURRENT_MENU', 'SYSTEMSETTING' );
		
		$branch = M ( 'branch' );
		$data ['branchId'] = $_GET ['branchid'];
		$data ['branchName'] = $_POST ['branchname'];
		$data ['branchDescription'] = $_POST ['branchdescription'];
		$data ['branchAcademy'] = $_POST ['branchacademy'];
		
		// dump($data);
		// return;
		$result = $branch->save ( $data );
		if ($result !== false) {
			// echo U('WorkTendency/allPage');
			doLog($_SESSION ['userId'],21,'Edit_Branch_Submit_Id_:_' . $_GET ['branchid']);
			echo '
					<head>
						<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					</head>
					<h1 style="line-height:400px;text-align:center">成功，1秒后自动关闭</h1>
					<script language="javascript">
						function closeWindow(){
							window.opener=null;
							window.open("","_self")
							window.close();
						}
						setTimeout("closeWindow()",1000);
	
					</script>';
			// $this->success ( C ( 'EDIT_SUCCESS' ), '/WorkTendency/allPage' );
		} else {
			$this->error ( C ( 'EDIT_FAIL' ) );
		}
	}
	public function accountSetting() {
		if (! isset ( $_SESSION ['userId'] )) {
			$this->error ( C ( 'LOGIN_FIRST' ) );
		}
		
		doLog($_SESSION ['userId'],22,'View_AccountSetting');
		$this->assign ( 'APPLICATION_NAME', C ( 'APPLICATION_NAME' ) );
		$this->assign ( 'USER_ID', $_SESSION ['userId'] );
		$this->assign ( 'USER_LEVEL', $_SESSION ['userLevel'] );
		$this->assign ( 'CURRENT_MENU', 'ACCOUNTSETTING' );
		
		$user = M ( 'user' );
		try {
			if (isset ( $_GET ['deleteUser'] )) {
				// 传入删除参数
				$user->where ( 'userid=' . $_GET ['deleteUser'] )->delete ();
			}
			if (isset ( $_GET ['deleteUserMulti'] )) {
				// 传入删除多项的参数
				$multi = explode ( ',', $_GET ['deleteUserMulti'] );
				for($index = 1; $index < count ( $multi ); $index ++) {
					// 从第二个开始删除，第一个的产生是由于U方法生成参数的时候无法不输入一个参数
					if ($multi [$index] != null) {
						$user->where ( 'userid=' . $multi [$index] )->delete ();
					}
				}
			}
		} catch ( Exception $e ) {
			// 删除错误
			$this->error ( C ( 'DELETE_FAIL' ) . $e->__toString () );
			return;
		}
		
		// 查询当前所有的学院并且分页
		$countUser = $user->count ();
		$pageUser = new \Think\Page ( $countUser, C ( 'PAGE_COUNT' ), 'p1' );
		$pageUser->setP ( 'p1' );
		$orderbyUser ['userid'] = 'desc';
		$listUser = $user->order ( $orderbyUser )->limit ( $pageUser->firstRow . ',' . $pageUser->listRows )->select ();
		
		// 获得所有的学院和支部
		$branch = M ( 'branch' );
		$academy = M ( 'academy' );
		$listAllAcademy = $academy->select ();
		$listAllBranch = $branch->select ();
		
		for($i = 0; $i < count ( $listUser ); $i ++) {
			for($j = 0; $j < count ( $listAllAcademy ); $j ++) {
				if ($listUser [$i] ['useracademy'] == $listAllAcademy [$j] ['academyid']) {
					$listUser [$i] ['useracademy'] = $listAllAcademy [$j] ['academyname'];
					break;
				}
				if ($j == (count ( $listAllAcademy ) - 1)) {
					$listUser [$i] ['useracademy'] = '无支部信息';
				}
			}
			for($j = 0; $j < count ( $listAllBranch ); $j ++) {
				if ($listUser [$i] ['userbranch'] == $listAllBranch [$j] ['branchid']) {
					$listUser [$i] ['userbranch'] = $listAllBranch [$j] ['branchname'];
					break;
				}
				if ($j == (count ( $listAllBranch ) - 1)) {
					$listUser [$i] ['userbranch'] = '无支部信息';
				}
			}
		}
		
		$this->assign ( 'listUserLevel', array (
				1,
				11,
				21 
		) );
		$this->assign ( 'listAllAcademy', $listAllAcademy );
		$this->assign ( 'listAllBranch', $listAllBranch );
		$this->assign ( 'listUser', $listUser ); // 赋值数据集
		$this->assign ( 'pageUser', $pageUser->show () ); // 赋值分页输出
		
		$this->show ();
	}
	public function addAccount() {
		if (! isset ( $_SESSION ['userId'] )) {
			$this->error ( C ( 'LOGIN_FIRST' ) );
		}
		$this->assign ( 'APPLICATION_NAME', C ( 'APPLICATION_NAME' ) );
		$this->assign ( 'USER_ID', $_SESSION ['userId'] );
		$this->assign ( 'USER_LEVEL', $_SESSION ['userLevel'] );
		$this->assign ( 'CURRENT_MENU', 'SYSTEMSETTING' );
		
		$user = M ( 'user' );
		
		$data ['userNickname'] = $_POST ['userNickname'];
		$data ['userAccount'] = $_POST ['userAccount'];
		$data ['userPassword'] = $_POST ['userPassword'];
		$data ['userAddress'] = $_POST ['userAddress'];
		$data ['userTelnumber'] = $_POST ['userTelnumber'];
		$data ['userMail'] = $_POST ['userMail'];
		$data ['userDescription'] = $_POST ['userDescription'];
		$data ['userLevel'] = $_POST ['userLevel'];
		$data ['userAcademy'] = $_POST ['userAcademy'];
		$data ['userBranch'] = $_POST ['userBranch'];
		
// 		dump($data);
// 		return;
		
		$user->create ( $data );
		$addUserId = $user->add ();
		if ($addUserId) {
			doLog($_SESSION ['userId'],23,'Add_User_id_:_' . $addUserId);
			$this->success ( C ( 'ADD_SUCCESS' ), 'accountSetting' );
		} else {
			doLog($_SESSION ['userId'],24,'Add_User_Fail');
			$this->error ( C ( 'ADD_FAIL' ), 'accountSetting' );
		}
	}
	public function editUser() {
		if (! isset ( $_SESSION ['userId'] )) {
			$this->error ( C ( 'LOGIN_FIRST' ) );
		}
		$this->assign ( 'APPLICATION_NAME', C ( 'APPLICATION_NAME' ) );
		$this->assign ( 'USER_ID', $_SESSION ['userId'] );
		$this->assign ( 'USER_LEVEL', $_SESSION ['userLevel'] );
		$this->assign ( 'CURRENT_MENU', 'SYSTEMSETTING' );
	
		doLog($_SESSION ['userId'],25,'Edit_User_id_:_' . $_GET ['userid']);
		
		$user = M ( 'user' );
		$editUser = $user->where ( 'userId=' . $_GET ['userid'] )->find ();
		
// 		dump ($editUser);
// 		return;
	
	
		// 		dump($data);
		// 		return;
		$academy = M ( 'academy' );
		$orderbyAcademy ['academyid'] = 'desc';
		$listAcademy = $academy->order ( $orderbyAcademy )->select ();
		$this->assign ( 'listAcademy', $listAcademy );
		$branch = M ( 'branch' );
		$orderbyBranch ['branchid'] = 'desc';
		$listBranch = $branch->order ( $orderbyBranch )->select ();
		$this->assign ( 'listBranch', $listBranch );
		$this->assign ( 'user', $editUser );
		$this->display ();
	}
	public function editUserSubmit() {
		if (! isset ( $_SESSION ['userId'] )) {
			$this->error ( C ( 'LOGIN_FIRST' ) );
		}
		$this->assign ( 'APPLICATION_NAME', C ( 'APPLICATION_NAME' ) );
		$this->assign ( 'USER_ID', $_SESSION ['userId'] );
		$this->assign ( 'USER_LEVEL', $_SESSION ['userLevel'] );
		$this->assign ( 'CURRENT_MENU', 'SYSTEMSETTING' );
	
		$user = M ( 'user' );
		$data ['userId'] = $_GET ['userid'];
		$data ['userNickname'] = $_POST ['usernickname'];
		$data ['userPassword'] = $_POST ['userpassword'];
		$data ['userAddress'] = $_POST ['useraddress'];
		$data ['userTelnumber'] = $_POST ['usertelnumber'];
		$data ['userDescription'] = $_POST ['userdescription'];
		$data ['userAcademy'] = $_POST ['useracademy'];
		$data ['userMail'] = $_POST ['usermail'];
		$data ['userAcademy'] = $_POST ['useracademy'];
		$data ['userBranch'] = $_POST ['userbranch'];
		
	
		// dump($data);
		// return;
		$result = $user->save ( $data );
		if ($result !== false) {
			// echo U('WorkTendency/allPage');	
			doLog($_SESSION ['userId'],26,'Edit_User_Submit_id_:_' . $_GET ['userid']);
			
			echo '
					<head>
						<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					</head>
					<h1 style="line-height:400px;text-align:center">成功，1秒后自动关闭</h1>
					<script language="javascript">
						function closeWindow(){
							window.opener=null;
							window.open("","_self")
							window.close();
						}
						setTimeout("closeWindow()",1000);
	
					</script>';
			// $this->success ( C ( 'EDIT_SUCCESS' ), '/WorkTendency/allPage' );
		} else {
			$this->error ( C ( 'EDIT_FAIL' ) );
		}
	}
}
<?php

namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller {
	
	// public function _initialize(){
	// if(isset($_SESSION['name'])){
	// $this->error('请先登录 ! ');
	// }
	// }
	public function login() {
		$this->assign ( 'APPLICATION_NAME', C ( 'APPLICATION_NAME' ) );
		$this->display ();
	}
	public function loginSubmit() {
		$account = $_POST['account'];
		$user = M ("user");
// 		$user = $userModel->where ( 'useraccount=' . $_POST['account'] )->limit(1)->select();
		$tempUser = $user->where ( 'useraccount=' . '"' . $account . '"' )->limit(1)->select();
// 		dump($_POST['account']);
// 		dump($_POST['password']);
// 		dump ($tempUser[0]['useraccount']);
// 		return;
		if (strcmp ( $_POST ['password'], $tempUser[0]['userpassword'] ) == 0) {
			// 登录成功
			// echo "success";
			session ( 'userAccount', $tempUser[0]['useraccount'] );
			session ( 'userId', $tempUser[0]['userid'] );
			session ( 'userLevel', $tempUser[0]['userlevel'] );
			session ( 'userNickname', $tempUser[0]['usernickname'] );
			
			
			doLog(0,9,'Login_success_account_:_' . $_POST['account']);
			
			$this->success ( C ( 'LOGIN_SUCCESS' ), 'home' );
		} else {
			// 登录失败
			// echo "false";
			
			doLog(0,10,'Login_fail_account_:_' . $_POST['account']);
			
			$this->error ( C ( 'LOGIN_FAIL' ) );
		}
	}
	public function home() {
		if (! isset ( $_SESSION ['userId'] )) {
			$this->error ( C ( 'LOGIN_FIRST' ) );
		}
		$this->assign('APPLICATION_NAME',C('APPLICATION_NAME'));
		$this->assign('USER_ID',$_SESSION ['userId']);
		$this->assign('USER_LEVEL',$_SESSION ['userLevel']);
		$this->assign('CURRENT_MENU','HOME');
		$this->display ();
	}
	public function logout() {
		doLog(0,10,'Logout_account_:_' . $_SESSION['userAccount']);
		session ( 'userAccount', null );
		
		$this->success ( '退出成功', 'login' );
	}
}

<?php

namespace Admin\Controller;

use Think\Controller;

class SystemSettingController extends Controller {
	public function organizationSystemSetting() {
		if (! isset ( $_SESSION ['userId'] )) {
			$this->error ( C ( 'LOGIN_FIRST' ) );
		}
		
		
		
		$this->assign ( 'APPLICATION_NAME', C ( 'APPLICATION_NAME' ) );
		
		$academy = M ( 'academy' );
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
		} catch ( Exception $e ) {
			// 删除错误
			$this->error ( C ( 'DELETE_FAIL' ) . $e->__toString () );
			return;
		}
		
		
		// 查询当前所有的学院并且分页
		$countAcademy = $academy->count ();
		$pageAcademy = new \Think\Page ( $countAcademy, C ( 'PAGE_COUNT' ) );
		$orderbyAcademy ['academyid'] = 'desc';
		$listAcademy = $academy->order ( $orderbyAcademy )->limit ( $pageAcademy->firstRow . ',' . $pageAcademy->listRows )->select ();
		$this->assign ( 'listAcademy', $listAcademy ); // 赋值数据集
		$this->assign ( 'pageAcademy', $pageAcademy->show () ); // 赋值分页输出
		
		$this->display ();
	}
	public function addAcademy() {
		if (! isset ( $_SESSION ['userId'] )) {
			$this->error ( C ( 'LOGIN_FIRST' ) );
		}
		
		// echo $_POST['academyName'];
		// echo $_POST['academyDescription'];
		
		$academy = M ( 'academy' );
		
		$data ['academyName'] = $_POST ['academyName'];
		$data ['academyDescription'] = $_POST ['academyDescription'];
		
		$academy->create ( $data );
		if ($academy->add ()) {
			$this->success ( C ( 'ADD_SUCCESS' ), 'organizationSystemSetting' );
		} else {
			$this->error ( C ( 'ADD_FAIL' ), 'organizationSystemSetting' );
		}
	}
}
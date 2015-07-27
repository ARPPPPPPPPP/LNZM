<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
	
// 	public function _initialize(){
// 		if(!isset($_SESSION['userAccount'])){
// 			$this->error('请先登录 ! ','/Login/login');
// 		}
// 	}
	
    public function userSetting(){
    	if(!isset($_SESSION['userAccount'])){
//     		echo U('Login/login');
    		$this->error('请先登录 ! ',U('Login/login'));
    		return;
    	}
    	//进入个人设置
    	
    	echo 'userSetting';
    	
    }
}

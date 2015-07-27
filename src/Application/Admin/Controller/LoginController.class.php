<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	
// 	public function _initialize(){
// 		if(isset($_SESSION['name'])){
// 			$this->error('请先登录 ! ');
// 		}
// 	}
	
    public function login(){
    	$this->assign('APPLICATION_NAME',C('APPLICATION_NAME'));
        $this->display();
    }
    
    public function loginSubmit(){
    	$userModel = M("user");
    	$user = $userModel->where('userAccount=' + $_POST['account']);
    	if(strcmp($_POST['password'],$user->getField('userPassword')) == 0){
    		//登录成功
//     		echo "success";
    		session('userAccount',$user->getField('userAccount'));
    		session('userId',$user->getField('userId'));
    		
    		$this->success(C('LOGIN_SUCCESS'), 'home');

    	}else{
    		//登录失败
//     		echo "false";
    		$this->error(C('LOGIN_FAIL'));
    	}
    	
    }
    
    public function home(){
    	if(session('?userAccount')){
    		
    	}else{
    		$this->error('请先登录 ! ','login');
    		return ;
    	}
    	$this->assign('APPLICATION_NAME',C('APPLICATION_NAME'));
    	$this->display();
    }
    
    public function logout(){
    	session('userAccount',null);
    	$this->success('退出成功', 'login');
    }
}

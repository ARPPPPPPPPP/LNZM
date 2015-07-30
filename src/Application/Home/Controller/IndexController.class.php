<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$workTendency = M ( 'worktendency' );
    	$listWorkTendency = $workTendency->limit (6)->select ();
    	
    	$this->assign('listWorkTendency',$listWorkTendency);
        $this->show();
    }
    
    public function queryWorkTendency(){
//     	dump($_GET['worktendencyid']);
//     	return ;
		
    	
    }


}
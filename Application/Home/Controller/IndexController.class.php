<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //工作动态
    	$workTendency = M ( 'worktendency' );
        $worktendencyorderby ['worktendencyid'] = 'desc';
    	$listWorkTendency = $workTendency->order($worktendencyorderby)->limit (6)->select ();

        //通知公告
        $notice = M ( 'notice' );
        $noticeorderby['noticeid'] = 'desc';
        $listNotice=$notice->order($noticeorderby)->limit(6)->select();



    	$this->assign('listWorkTendency',$listWorkTendency);
        $this->assign('listNotice',$listNotice);
        $this->display();
    }
    
    public function queryWorkTendency(){
//     	dump($_GET['worktendencyid']);
//     	return ;
		
    	
    }
}
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
        $listNotice=$notice->where('noticeAuditId=1')->order($noticeorderby)->limit(6)->select();

//        //活动实践
//        $activitypractice=M('activitypractice');
//        $activitypracticeorderby['activitypracticeid']='desc';
//        $listActivity=$activitypractice->where('activitypracticeauditstatus=1')->order ( $activitypracticeorderby )->limit (6)->select ();
//
//        //支部通知
//        $apperance=M('branchapperance');
//        $apperanceorderby['branchapperanceid']='desc';
//        $listApperance=$apperance->where('branchapperanceacademyauditstatus=1')->order($apperanceorderby)->limit(6)->select();

        //下载专区
        $download=M('download');
        $downloadorderby['downloadid']='desc';
        $listDownload=$download->order($downloadorderby)->limit(6)->select();

    	$this->assign('listWorkTendency',$listWorkTendency);
        $this->assign('listNotice',$listNotice);
//        $this->assign("listActivity",$listActivity);
//        $this->assign("listApperance",$listApperance);
        $this->assign('listDownload',$listDownload);
        $this->display();
    }
    
    public function queryWorkTendency(){
//     	dump($_GET['worktendencyid']);
//     	return ;
		
    	
    }
}
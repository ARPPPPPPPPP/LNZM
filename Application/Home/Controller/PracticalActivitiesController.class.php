<?php
namespace Home\Controller;
use Think\Controller;
class PracticalActivitiesController extends Controller {
    //默认是跳转到社会实践
    public function socialPractice(){
        $model=M('activitypractice');

        //需要做分页，页面显示10条
        $count=$model->where('activitypracticetype=0 and activitypracticeauditstatus=1')->count();
        $page=new \Think\Page($count,10,'p1');
        $page->setP('p1');
        $orderby ['activitypracticeid'] = 'desc';
        $list = $model->where('activitypracticetype=0 and activitypracticeauditstatus=1')->order ( $orderby )->limit ( $page->firstRow . ',' . $page->listRows )->select ();

        $this->assign("list",$list);
        $this->assign ( 'page', $page->show () ); // 赋值分页输出
        $this->display();
    }
    //志愿服务
    public function voluntaryService(){
        $model=M('activitypractice');

        //需要做分页，页面显示10条
        $count=$model->where('activitypracticetype<>0 and activitypracticeauditstatus=1')->count();
        $page=new \Think\Page($count,10,'p1');
        $page->setP('p1');
        $orderby ['activitypracticeid'] = 'desc';
        $list = $model->where('activitypracticetype<>0 and activitypracticeauditstatus=1')->order ( $orderby )->limit ( $page->firstRow . ',' . $page->listRows )->select ();

        $this->assign("list",$list);
        $this->assign ( 'page', $page->show () ); // 赋值分页输出
        $this->display();

    }

    public function showContent(){
        $model=M('activitypractice');
        $userModel=M('user');

        $record=$model->where('activitypracticeid='.$_GET['activitypracticeid'])->find();
        $user=$userModel->where('userid='.$record['activitypracticereleaseid'])->find();

        //类型
        $type='socialPractice';
        if($record['activitypracticetype']!=0){
            $type='voluntaryService';
        }
        //内容
        $fileName = $record['activitypracticecontenturl'];
        $myFile = fopen($fileName, "r") or die ("Unable to open file!");
        $content = fread($myFile, filesize($fileName));
        fclose($myFile);

        $this->assign("content", $content);
        $this->assign("date", $record['activitypracticereleasedate']);
        $this->assign("name", $user['usernickname']);
        $this->assign("title", $record['activitypracticetitle']);
        $this->assign("type",$type);

        //统计
        $data['activityPracticeId'] = $record['activitypracticeid'];
        $data['activityPracticePageView'] = $record['activitypracticepageview'] + 1;
        $model->save($data);

        $this->display();
    }
}
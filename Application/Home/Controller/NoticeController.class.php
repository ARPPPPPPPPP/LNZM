<?php
/**
 * Created by PhpStorm.
 * User: zhangguixu
 * Date: 15/8/9
 * Time: 上午8:54
 */

namespace Home\Controller;

use Think\Controller;

class NoticeController extends  Controller{

    function  showlist(){
        $notice = M ( 'notice' );

        //需要做分页，页面显示10条
        $count=$notice->count();
        $page=new \Think\Page($count,10,'p1');
        $page->setP('p1');
        $orderby ['noticeid'] = 'desc';
        $list = $notice->where('noticeAuditId=1')->order ( $orderby )->limit ( $page->firstRow . ',' . $page->listRows )->select ();

        $this->assign ( 'list', $list ); // 赋值数据集
        $this->assign ( 'page', $page->show () ); // 赋值分页输出
        $this->display();
    }

    function showContent()
    {
        $noticeModel = M('notice');
        $userModel = M('user');
        $notice = $noticeModel->where('noticeid=' . $_GET['noticeid'])->find();
        $date = $notice['noticereleasedate']; //日期
        $title = $notice['noticetitle'];//标题
        $fileName = $notice['noticecontenturl'];
        $myFile = fopen($fileName, "r") or die ("Unable to open file!");
        $content = fread($myFile, filesize($fileName));
        fclose($myFile);

        $data['noticeId'] = $notice['noticeid'];
        $data['noticePageView'] = $notice['noticepageview'] + 1;
        $noticeModel->save($data);

        $user = $userModel->where('userid=' . $notice['noticereleaseid'])->find();
        $name = $user['usernickname'];   //来源


        $this->assign("content", $content);
        $this->assign("date", $date);
        $this->assign("name", $name);
        $this->assign("title", $title);




        $this->display();
    }

}
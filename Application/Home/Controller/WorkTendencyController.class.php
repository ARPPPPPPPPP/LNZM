<?php
/**
 * Created by PhpStorm.
 * User: zhangguixu
 * Date: 15/7/30
 * Time: 下午4:02
 */

namespace Home\Controller;

use Think\Controller;
class WorkTendencyController extends  Controller{

    //显示列表页
    function showList(){
        $workTendency = M ( 'worktendency' );

        //需要做分页，页面显示10条
        $count=$workTendency->count();
        $page=new \Think\Page($count,10,'p1');
        $page->setP('p1');
        $orderby ['worktendencyid'] = 'desc';
        $list = $workTendency->order ( $orderby )->limit ( $page->firstRow . ',' . $page->listRows )->select ();

        $this->assign ( 'list', $list ); // 赋值数据集
        $this->assign ( 'page', $page->show () ); // 赋值分页输出
        $this->display();
    }

    //显示正文页
    function showContent(){
        $workTendencyModel=M('worktendency');

        $workTendency=$workTendencyModel->where('worktendencyid='.$_GET['worktendencyid']);
        $fileName = $workTendency->getField('worktendencycontenturl');
        $myFile = fopen ( $fileName, "r" ) or die ( "Unable to open file!" );
        $content = fread ( $myFile, filesize ( $fileName ) );
        fclose ( $myFile );
        $this->assign("content",$content);
        $this->display();
    }
}
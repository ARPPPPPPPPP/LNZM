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
        $listWorkTendency = $workTendency->limit (10)->select ();

        //需要做分页，页面显示10条
        $this->assign("listWorkTendency",$listWorkTendency);
        $this->show();
    }

    //显示正文页
    function showContent(){
        $workTendencyModel=M('worktendency');

        $workTendency=$workTendencyModel->where('worktendencyid'+$_GET['worktendencyid']);
        $fileName = $workTendency->getField('worktendencycontenturl');
        $myFile = fopen ( $fileName, "r" ) or die ( "Unable to open file!" );
        $content = fread ( $myFile, filesize ( $fileName ) );
        fclose ( $myFile );
        $this->assign("content",$content);
        $this->show();
    }
}
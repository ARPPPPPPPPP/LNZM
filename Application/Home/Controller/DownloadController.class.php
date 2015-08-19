<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 2015/8/19
 * Time: 20:10
 */

namespace Home\Controller;
use Think\Controller;

class DownloadController extends  Controller{
    function download(){
        $model=M('download');
        $count=$model->count();
        $page=new \Think\Page($count,10,'p1');
        $page->setP('p1');
        $orderby['downloadid']='desc';
        $list=$model->order ( $orderby )->limit ( $page->firstRow . ',' . $page->listRows )->select ();

        $this->assign("list",$list);
        $this->assign("page",$page->show());
        $this->display();
    }

    function app(){
        $this->display();
    }
}
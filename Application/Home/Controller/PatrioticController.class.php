<?php
/**
 * Created by PhpStorm.
 * User: zhangguixu
 * Date: 15/8/4
 * Time: 下午3:58
 */

namespace Home\Controller;
use Think\Controller;

class PatrioticController extends  Controller{

    //序
    function preface(){
        $this->display();
    }

    //在广东
    function fullText(){
        $page=1;
        if(isset($_GET['page'])){
            $page=$_GET['page'];
        }
        $next=$page+1;
        $pre=$page-1;

        $src="/LNZM/PUBLIC/res/articles/".$page.".png";
//        dump($src);
//        return;
        $this->assign("page",$page);  //当前页
        $this->assign("next",$next); //下一页
        $this->assign("pre",$pre); //上一页
        $this->assign("src",$src);
        $this->display();
    }

    //专家导读
    function introduction(){
        $this->display();
    }
}
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
   public function preface(){
        $this->assign("index",1);
        $this->display();
    }
    //位置分布图
    public function location(){
        $this->assign("index",2);
        $this->display();
    }
    //推荐参观时间
    public function schedule(){
        $this->assign("index",3);
        $this->display();
    }
    //专家导读
    public function introduction(){
        $this->assign("index",4);
        $this->display();
    }

    //目录
    public function fullText(){
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


}
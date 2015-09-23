<?php
/**
 * Created by PhpStorm.
 * User: zhangguixu
 * Date: 15/8/4
 * Time: 上午11:10
 */

namespace Home\Controller;
use Think\Controller;
class FollowController extends  Controller{

    //关注微博
    public function followWeibo(){
        $this->display();
    }

    //关注微信
    public function  followWeixin(){
        $this->display();
    }

    //联系我们
    public function contactus(){
        $this->display();
    }
}
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
    function followWeibo(){
        $this->display();
    }

    //关注微信
    function  followWeixin(){
        $this->display();
    }

}
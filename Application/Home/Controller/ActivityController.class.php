<?php
/**
 * Created by PhpStorm.
 * User: zhangguixu
 * Date: 2015/9/26
 * Time: 9:54
 */

namespace Home\Controller;
use Think\Controller;

class ActivityController extends  Controller{

    //行动简介
    public function intro(){
        $this->display();
    }
    //行动标识
    public function logo(){
        $this->display();
    }
}

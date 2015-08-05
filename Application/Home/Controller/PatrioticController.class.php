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
    function places(){
        $this->display();
    }

    //专家导读
    function introduction(){
        $this->display();
    }
}
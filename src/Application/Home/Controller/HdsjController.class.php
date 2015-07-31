<?php
namespace Home\Controller;
use Think\Controller;
class HdsjController extends Controller {
    //默认是跳转到社会实践
    public function shsj(){
        $this->display();
    }
    //志愿服务
    public function zyfw(){
        $this->display();
    }
}
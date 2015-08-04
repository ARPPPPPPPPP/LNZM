<?php
namespace Home\Controller;
use Think\Controller;
class PracticalActivitiesController extends Controller {
    //默认是跳转到社会实践
    public function socialPractice(){
        $this->display();
    }
    //志愿服务
    public function voluntaryService(){
        $this->display();
    }
}
<?php
namespace Admin\Controller;
use Think\Controller;
class TestController extends Controller {
    public function testForm(){
    	dump(I('post.'));
    	return I('post.');
    }
}
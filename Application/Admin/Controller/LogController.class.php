<?php

namespace Admin\Controller;

use Think\Controller;
use Admin\Model\LogModel;

class LogController extends Controller {

	public function log() {
		$model = D("Log");
		
// 		$model->create();
// 		$model->test = 'test';
// 		$model->add();
		
		$model->create();
		$model->test = 'test111';
		$model->test1 = 'test111';
		$model->test3 = 'test111';
		$model->test14 = 'test111';
		$model->test5 = 'test111';
		$model->test16 = 'test111';
		dump($model->add());
		return;
		
		$data['operation'] = 1;
		$data['operationDate'] = date ( 'Y-m-d H:i:s', time () );
		$data['score'] = array('inc',2);
		dump($model->save($data));
		return;
	}
	
	public function phpinfo(){
		dump(phpinfo());
		return;
	}

}

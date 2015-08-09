<?php

namespace Admin\Controller;

use Think\Controller;
use Admin\Model\LogModel;

class LogController extends Controller {

	public function log() {
		writeLog($_GET['operationPeopleId'],$_GET['operationNumber'],$_GET['operationInformation']);
	}
	public function logTest() {
		doLog(1,2,'中文测试');
	}
	
	public function phpinfo(){
		dump(phpinfo());
		return;
	}

}

<?php
function getUserNicknameByUserId($userId) {
	$user = M ( 'user' );
	$listAllUser = $user->select ();
	
	for($j = 0; $j < count ( $listAllUser ); $j ++) {
		if ($userId == $listAllUser [$j] ['userid']) {
			return $listAllUser [$j] ['usernickname'];
		}
	}
	
	return '';
}

// function writeLog($userId) {
// writeLog ( $userId, 0);
// }
// function writeLog($userId, $operationNumber) {
// writeLog ( $userId, $operationNumber, '' );
// }
function writeLog($userId, $operationNumber, $operationInformation) {
	try {
		
		// 使用MongoDB进行日志记录，不管成功与否都返回，在这里截获所有异常
		$model = D ( "Log" );
		
		// $model->create();
		// $model->test = 'test';
		// $model->add();
		
		$model->create ();
		$model->operationPeopleId = $userId;
		$model->operationNumber = $operationNumber;
		$model->operationInformation = $operationInformation;
		$model->operationITime = date ( 'Y-m-d H:i:s', time () );
		
		$model->add ();
	} catch ( Exception $e ) {
	}
}
function doLog($userId, $operationNumber, $operationInformation) {
	// dump(U('Log/log'));
	if($userId == null){
		$userId = 0;
	}
	if($operationNumber == null){
		$operationNumber = 0;
	}
	if($operationInformation == null){
		$operationInformation = '';
	}
	
	
	$fp = fsockopen ( "localhost", 80, $errno, $errstr, 30 );
	if (! $fp) {
		echo 'error fsockopen';
	} else {
		stream_set_blocking ( $fp, 0 );
		$http = "GET " . U ( 'Log/log' ) . "?operationPeopleId=" . $userId . "&operationNumber=" . $operationNumber . "&operationInformation=" . $operationInformation . " HTTP/1.1\r\n";
		$http .= "Host: test.com\r\n";
		$http .= "Connection: Close\r\n\r\n";
		fwrite ( $fp, $http );
		fclose ( $fp );
	}
}
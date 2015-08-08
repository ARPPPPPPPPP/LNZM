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

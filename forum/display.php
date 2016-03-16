<?php
	session_start();
	include(realpath(dirname(dirname(__FILE__)).'/smarty.php'));
	$smarty->assign('name', 'jack');
	$smarty->display('info.html');
//	echo dirname(dirname(__FILE__)).'/smarty.php';
/*	if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
		$smarty->assign('hello', $_SESSION['username']);
		$smarty->display('info.html');	
	}else{
		echo "string";
	}
*/	
?>
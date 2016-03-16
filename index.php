<?php
    session_start();
	header("Cache-Control: no-cache");
	header("Pragma: no-cache");
	include(dirname(__FILE__)."/smarty.php");
	include(dirname(__FILE__)."/db/db_connection.php");
    doDB();
     $smarty->assign('session_username', $_SESSION['username']);
        
     $smarty->display('index.html');	
?>
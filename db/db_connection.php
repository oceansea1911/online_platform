<?php
	include(dirname(__FILE__).'/utils.php');
	header("Content-Type:text/html;charset=utf-8");
	$mysqli = "";
	function doDB(){
//		echo "string";
		global $mysqli;
		$hostname = getdbconfig("hostname");
		$username = getdbconfig("username");
		$password = getdbconfig("password");
		$database = getdbconfig("database");
		$mysqli =new mysqli($hostname, $username, $password, $database);
		if($mysqli->connect_errno){
			printf("Connect failed:%s\n", $mysqli->connect_error);
			exit();
		}
	}

?>
<?php
	session_start();
	include(dirname(__FILE__)."/db/db_connection.php");
	include(dirname(__FILE__)."/smarty.php");

	if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
		doDB();

		if ($_SESSION('usertype') == 'student') {
			$sql_research = "select * from stu_research_info where "
		}

	}else{
		echo "未登录,点击<a href='loginschool.html'>返回</a>,重新登录";

	}
?>
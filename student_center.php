<?php
	session_start();
	include('db/db_connection.php');
	include(dirname(__FILE__)."/smarty.php");

	if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
		doDB();
		$res_courses = $mysqli->query("call get_stu_classes('".$_SESSION['userid']."')");
		$courses = $res_courses->fetch_all(MYSQLI_ASSOC);
		while ($res=$mysqli->next_result()) {
			
		}
		$res_courses->free();
		$smarty->assign('courses', $courses);
		
		
		$res_researches = $mysqli->query("call get_stu_research_info('".$_SESSION['userid']."')");
		$researches = $res_researches->fetch_all(MYSQLI_ASSOC);
				while ($res=$mysqli->next_result()) {
			
		}
		$res_researches->free();
		$smarty->assign('researches', $researches);
        $smarty->assign('session_username', $_SESSION['username']);

		

		$smarty->display('stucenter.html');

	}else{
			echo "未登录,点击<a href='login.html'>返回</a>,重新登录";

	}
?>
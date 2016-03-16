<?php
	session_start();
	include(dirname(__FILE__).'/smarty.php');
	include(dirname(__FILE__).'/db/db_connection.php');

	if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
		$course_id = $_GET['course_id'];
		doDB();
		$res_subjects = $mysqli->query("call get_subjects('".$course_id."')");
		if ($res_subjects->num_rows) {
			$subject_list = $res_subjects->fetch_all(MYSQLI_ASSOC);
			$smarty->assign('subject_list', $subject_list);
			$smarty->display('forum/forum_subject_display.html'); 
		}else{
			echo "没有此课程";
		}
	}else{
		echo "未登录,点击<a href='login.html'>返回</a>,重新登录";

	}
	
?>
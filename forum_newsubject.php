<?php
	session_start();
	include(dirname(__FILE__)."/smarty.php");
	include(dirname(__FILE__)."/db/db_connection.php");

	if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
		$subject = $_POST['subject'];
		$content = $_POST['content'];
		$course_id = $_SESSION['course_id'];	
		$publisher = $_SESSION['userid'];

		doDB();
		$sql_subject = "insert into subject(name, content, publisher, course_id, date_added, date_modified) values('".$subject."', '".$content."', '".$publisher.
			"', '".$course_id."', now(), now())";
		$result = $mysqli->query($sql_subject);
		if ($result) {
			header("Location: forum_subject_display.php?id={$course_id}");
		}
	}else{
		echo "未登录,点击<a href='login.html'>返回</a>,重新登录";

	}



?>
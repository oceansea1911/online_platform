<?php
	session_start();
	include(dirname(__FILE__)."/smarty.php");
	include(dirname(__FILE__)."/db/db_connection.php");
    //echo $_SESSION['username'];

	if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
		doDB();
//        echo "11";
		//右侧推送
        $sql="select name from course order by date_added DESC LIMIT 5";
        $res_course = $mysqli->query($sql);
		$course = $res_course->fetch_all(MYSQLI_ASSOC);
//		echo "11";
		$courses_new_list= array();
		foreach ($course as $element) {
			$courses_new= array();
			$courses_new['name']=$element['name'];
            $courses_new_list[]=$courses_new;
		}

        $sql1="select distinct company.name from company left join internship on company.id=internship.company_id order by internship.publish_time desc LIMIT 5";
        $res_internship = $mysqli->query($sql1);
		$internship = $res_internship->fetch_all(MYSQLI_ASSOC);

		$internships_new_list = array();
		foreach ($internship as $element) {
			$internships_new = array();
			$internships_new['name']=$element['name'];
			$internships_new_list[]=$internships_new;
	    }
       
        $smarty->assign('courses_new_list', $courses_new_list);
		$smarty->assign('internships_new_list', $internships_new_list);

		//课程展示
		$res_courses = $mysqli->query("call get_stu_classes('".$_SESSION['userid']."')");
		$courses = $res_courses->fetch_all(MYSQLI_ASSOC);
//		echo "string";
	
		$smarty->assign('courses', $courses);
		$smarty->assign('session_username', $_SESSION['username']);
//		$smarty->display('course_display.html');
		$smarty->display('major.html');
	}else{
			echo "未登录,点击<a href='login.html'>返回</a>,重新登录";

	}

?>
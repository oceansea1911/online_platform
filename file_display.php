<?php
//	session_start();
/*	include(dirname(__FILE__)."/smarty.php");
	include(dirname(__FILE__)."/db/db_connection.php");*/


	class Course_Content{
		function getVideos($course_id, $mysqli){
			$sql_videos = "select v.*, t1.sec_name, t1.chap_name from video v inner join
						(select cs.id, cs.sec_name, cc.chap_name from course_section cs inner join 
						(select * from course_chapter where 1=1 and course_id='".$course_id."')as cc
						where 1=1 and cs.chapter_id=cc.id) as t1 where 1=1 and v.section=t1.id";
			$res_videos = $mysqli->query($sql_videos);
			if ($res_videos){
				$videos = $res_videos->fetch_all(MYSQLI_ASSOC);
				if (count($videos) == 0) {
					$videos = '';
				}
			}
			else{
				$videos = '';
			}
			return $videos;	
		}

		function getReferences($course_id, $mysqli){
			$sql_references = "select r.*, t1.sec_name, t1.chap_name from reference r inner join
						(select cs.id, cs.sec_name, cc.chap_name from course_section cs inner join 
						(select * from course_chapter where 1=1 and course_id='".$course_id."')as cc
						where 1=1 and cs.chapter_id=cc.id) as t1 where 1=1 and r.section=t1.id";
			$res_references = $mysqli->query($sql_references);

			if ($res_references) {
				$references = $res_references->fetch_all(MYSQLI_ASSOC);
				if (count($references) == 0) {
					$references = '';
				}
			}else{
				$references = '';
			}
			return $references;	
		}
	}


/*	if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
		$course_id = $_SESSION['course_id'];
		doDB();
		$sql_videos = "select * from video where 1=1 and course_id='".$course_id."'";
		$res_videos = $mysqli->query($sql_videos);


		if ($res_videos){
			$videos = $res_videos->fetch_all(MYSQLI_ASSOC);
			if (count($videos) == 0) {
				$videos = '';
			}
		}
		else{
			$videos = '';
		}	
		$smarty->assign('videos', $videos);



		$sql_references = "select * from reference where 1=1 and course_id='".$course_id."'";
		$res_references = $mysqli->query($sql_references);

		if ($res_references) {
			$references = $res_references->fetch_all(MYSQLI_ASSOC);
			if (count($references) == 0) {
				$references = '';
			}
		}else{
			$references = '';
		}	
		$smarty->assign('references', $references);

		$smarty->display('file/file_display.html');
	
	}else{
		echo "未登录,点击<a href='login.html'>返回</a>,重新登录";

	}*/







?>
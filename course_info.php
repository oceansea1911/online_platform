<?php
	session_start();
	include(dirname(__FILE__)."/db/db_connection.php");
//	include(dirname(__FILE__)."/file_display.php");
	include(dirname(__FILE__)."/smarty.php");
	if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
		doDB();
		$course_id = $_GET['course_id'];
		$sql_content = "select tr.*, tv.video_url, tv.video_name, tv.course_id from
				(select r.*, t1.sec_name, t1.chap_name, t1.chap_num, t1.sec_num from reference r inner join
				(select cs.id, cs.sec_name, cc.chap_name, cc.chap_num, cs.sec_num from course_section cs inner join 
				(select * from course_chapter where 1=1 and course_id='".$course_id."')as cc
				where 1=1 and cs.chapter_id=cc.id) as t1 where 1=1 and r.section=t1.id) as tr
				inner join
				(select v.*, t1.course_id from video v inner join
				(select cs.id, cc.course_id from course_section cs inner join 
				(select * from course_chapter where 1=1 and course_id='".$course_id."')as cc
				where 1=1 and cs.chapter_id=cc.id) as t1 where 1=1 and v.section=t1.id) as tv
				where 1=1 and tr.section=tv.section";
		$res_content = $mysqli->query($sql_content);
		$course_content = $res_content->fetch_all(MYSQLI_ASSOC);
		$smarty->assign('course_content', $course_content);
//		$smarty->display('file/file_display.html');


//		$sql_course = "select * from course where 1=1 and id='".$course_id."'";


		$comment_list = array();	
		$res_leaf = "select * from comment where 1=1 and course_id ='".$course_id."' and isleaf=1 order by comment_time desc";
		$res_leaf = $mysqli->query($res_leaf);
		$leaf_list = $res_leaf->fetch_all(MYSQLI_ASSOC);


		foreach ($leaf_list as $leaf) {
			global $comments;
			$comments = array();		
			comment_tree($leaf['id']);
			$comment_list[] = $comments;
		}
		$smarty->assign('comment_list', $comment_list);

		$sql_course = "select c.*, sci.type, c.info from course c inner join stu_course_info sci where 1=1 and 
					sci.course_id=c.id and sci.student_id='".$_SESSION['userid']."' and c.id='".$course_id."'";
		$res_course = $mysqli->query($sql_course);
		$course_info = $res_course->fetch_array(MYSQLI_ASSOC);
		$smarty->assign('course_info', $course_info);
		$smarty->assign('session_username', $_SESSION['username']);
		$smarty->display('subject.html');





/*		$_SESSION['course_id'] = $_GET['course_id'];
		$course_id = $_GET['course_id'];
		doDB();
		$sql_course = "select * from course where 1=1 and id='".$course_id."'";
		$res_course = $mysqli->query($sql_course);
		$course = $res_course->fetch_array(MYSQLI_ASSOC);
		$course_name = $course['name'];



		echo "<a href='forum_subject_display.php?course_id=$course_id'>".$course_name."课程论坛</a><br>";
		echo "<a href='file_display.php'>".$course_name."资料</a>";*/

	}else{
		echo "未登录,点击<a href='loginschool.html'>返回</a>,重新登录";

	}

	function comment_tree($leaf_id){
		global $mysqli;	
		$comment = array();	
		global $comments;
		global $course_id;		
		$sql_self = "select * from comment where 1=1 and id='".$leaf_id."'";
		$res_self = $mysqli->query($sql_self);
		$self = $res_self->fetch_array(MYSQLI_ASSOC);

		$sql_name = "select * from ".$self['critic_type']." where 1=1 and id='".$self['critic']."'";
		$res_name = $mysqli->query($sql_name);
		$name = $res_name->fetch_array(MYSQLI_ASSOC);

		$comment['name'] = $name['name'];
		$comment['critic'] = $self['critic'];
		$comment['content'] = $self['content'];
		$comment['comment_time'] = $self['comment_time'];
		$comment['id'] = $self['id'];
		$comment['course_id'] = $course_id;
		
		if ($self['isroot'] == 1) {
			$comments[] = $comment;
		}else{
			$sql_parent = "select * from comment where 1=1 and id='".$self['comment_parent']."'";
			$res_parent = $mysqli->query($sql_parent);
			$parent = $res_parent->fetch_array(MYSQLI_ASSOC);
			$sql_parent_name = "select * from ".$parent['critic_type']." where 1=1 and id='".$parent['critic']."'";
			$res_parent_name = $mysqli->query($sql_parent_name);
			$parent_name = $res_parent_name->fetch_array(MYSQLI_ASSOC);

			$comment['parent_name'] = $parent_name['name'];
			$comment['parent'] = $self['comment_parent'];
			$comments[] = $comment;
			comment_tree($self['comment_parent']);
		}
	}

?>
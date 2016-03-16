<?php
	session_start();
	include(dirname(__FILE__)."/smarty.php");
	include(dirname(__FILE__)."/db/db_connection.php");

	if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
		$comment_list = array();	
		doDB();
		$course_id = $_GET['course_id'];
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

		$sql_subject = "select * from subject where 1=1 and id='".$_GET['subject_id']."'";
		$res_subject = $mysqli->query($sql_subject);
		$subject = $res_subject->fetch_array(MYSQLI_ASSOC);
		$subject_name = $subject['name'];
		$subject_content = $subject['content'];
		$smarty->assign('subject_name', $subject_name);
		$smarty->assign('subject_content', $subject_content);

		$smarty->display('forum/forum_comment_display.html');

	}else{
		echo "未登录,点击<a href='login.html'>返回</a>,重新登录";

	}


	function comment_tree($leaf_id){
		global $mysqli;	
		$comment = array();	
		global $comments;		
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
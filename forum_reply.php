<?php
	session_start();
	include(dirname(__FILE__)."/smarty.php");
	include(dirname(__FILE__)."/db/db_connection.php");

	if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
		doDB();
		$comment_id = $_GET['comment_id'];
		$course_id = $_GET['course_id'];
//		echo $course_id;
		$content = $_POST['content'];
		$critic_type = $_SESSION['usertype'];	
		$res_new = "";
		if ($comment_id == 0) {
	/*		$sql_type = "select * from subject where 1=1 and id='".$_SESSION['subject_id']."'";
			$res_type = $mysqli->query($sql_type);
			$type = $res_type->fetch_array(MYSQLI_ASSOC);*/

			$sql_new = "insert into comment(comment_parent, isroot, isleaf, critic, content, critic_type, course_id, critic_parent_type, comment_time) 
						values(0, 1, 1, '".$_SESSION['userid']."', 
						'".$content."', '".$critic_type."', '".$course_id."', 'student', now())";
			$res_new = $mysqli->query($sql_new);





/*			if ($res_new) {

				header("Location: forum_comment_display.php?subject_id={$_SESSION['subject_id']}&course_id={$course_id}");
			}*/	
		}else{
				$sql_parent = "select * from comment where 1=1 and id='".$comment_id."'";
	//			echo $sql_parent;
				$res_parent = $mysqli->query($sql_parent);
				$parent = $res_parent->fetch_array(MYSQLI_ASSOC);

			//	echo $subject_id;
				$sql_update = "update comment c set c.isleaf=0 where id='".$comment_id."'";
				$res_update = $mysqli->query($sql_update);
				if ($res_update) {
					$sql_new = "insert into comment(comment_parent, isroot, isleaf, critic, content, critic_type, course_id, critic_parent_type, comment_time) 
								values('".$parent['id']."', 0, 1, '".$_SESSION['userid']."', 
								'".$content."', '".$critic_type."', '".$course_id."', '".$parent['critic_type']."', now())";
					$res_new = $mysqli->query($sql_new);



				}
	/*			if ($parent['comment_parent'] == 0) {
					$sql_update = "update comment c set c.isleaf=0 where id='".$comment_id."'";
					echo $sql_update;
					$res_update = $mysqli->query($sql_update);
					if ($res_update) {
						$sql_new = "insert into comment(subject_id, comment_parent, isroot, isleaf, critic, content, critic_type, course_id, critic_parent_type, comment_time) 
									values('".$parent['subject_id']."', '".$parent['id']."', 0, 1, '".$_SESSION['userid']."', 
									'".$content."', '".$critic_type."', '".$course_id."', '".$parent['critic_type']."', now())";
						$res_new = $mysqli->query($sql_new);
						if ($res_new) {
							header("Location: forum_comment_display.php?subject_id={$subject_id}&course_id={$course_id}");
						}
					}
				}*/
		}
		if ($res_new) {
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
			$smarty->display('subject.html');
		}
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
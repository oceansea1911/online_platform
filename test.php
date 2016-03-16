<?php
	include(dirname(__FILE__)."/smarty.php");
	include(dirname(__FILE__)."/db/db_connection.php");

	doDB();
/*	$sql_self = "select * from comment where 1=1 and id=5";
	$res_self = $mysqli->query($sql_self);
	$self = $res_self->fetch_array(MYSQLI_ASSOC);
	echo $self['content'];
*/
/*
		$sql_self = "select * from comment where 1=1 and id=5";
		$res_self = $mysqli->query($sql_self);
		$self = $res_self->fetch_array(MYSQLI_ASSOC);

		$sql_parent = "select * from ".$self['critic_parent_type']." where 1=1 and id='".$self['comment_parent']."'";
		$res_parent = $mysqli->query($sql_parent);
		$parent_name = $res_parent->fetch_array(MYSQLI_ASSOC);
		echo $parent_name['name'];


	if (isset($_SESSION['username']) && !empty($_SESSION['username'])){

	}else{
		echo "未登录,点击<a href='login.html'>返回</a>,重新登录";

	}*/
//	echo $_SERVER['DOCUMENT_ROOT'];
/*	$a = '二傻子';
	$password = '123456';
	$type = 'student';
	$result = $mysqli->query("call test('".$a."', '".$password."', '".$type."')");
	$res = $result->fetch_array(MYSQLI_ASSOC);
	echo $res['sno'];*/
/*	$res = $result->fetch_all(MYSQLI_ASSOC);
	foreach ($res as $item) {
		echo $item['name'].'<br>';
	}*/
/*$leaf_id=1;
$result = $mysqli->query("call comment_parent(1)");
$comment = $result->fetch_array(MYSQLI_ASSOC);
//	$res = $result->fetch_all(MYSQLI_ASSOC);
//	echo $res['0']['tno'];
	echo $comment['comment_parent'];*/
/*select c.*, ct.name critic_name, pt.name parent_name from comment c join critictype ct on(
c.critic=ct.id), parenttype pt where 1=1 and c.id=leaf and pt.id=c.comment_parent;*/
/*$result = $mysqli->query("call comment_isroot('1')");
echo $result;*/
		print_r($mysqli);
		$res_self = $mysqli->query($sql_self);
//		echo $res_self->num_rows;
		$self = $res_self->fetch_array(MYSQLI_ASSOC);
		echo $res_self->num_rows;$sql_self = "select * from comment";

?>
<?php
	session_start();
	include(dirname(__FILE__)."/smarty.php");
	include(dirname(__FILE__)."/db/db_connection.php");

	if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
		if (isset($_GET['video_id']) and !empty($_GET['video_id'])) {
			$video_id = $_GET['video_id'];
			doDB();
			$sql_video = "select * from video where 1=1 and id='".$video_id."'";
			$res_video = $mysqli->query($sql_video);
			if($res_video != ''){
				$video = $res_video->fetch_array(MYSQLI_ASSOC);
				$smarty->assign("video", $video);
				$smarty->display("file/video_onsite.html");
			}else{
				echo "<script>alert('视频不存在！');history.go(-1)</script>";
				}
		}
		if (isset($_GET['reference_id']) && !empty($_GET['reference_id'])) {
			$reference_id = $_GET['reference_id'];
			doDB();
			$sql_reference = "select * from reference where 1=1 and id='".$reference_id."'";
			$res_resfernce = $mysqli->query($sql_reference);
			if ($res_resfernce != '') {
				$reference = $res_resfernce->fetch_array(MYSQLI_ASSOC);
				$smarty->assign("reference", $reference);
				$smarty->display("file/refer_onsite.html");
			}else{
				echo "<script>alert('文档不存在！');history.go(-1)</script>";
			}
		}

		
	
	}else{
		echo "未登录,点击<a href='login.html'>返回</a>,重新登录";

	}



?>



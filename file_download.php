<?php
	session_start();
	include(dirname(__FILE__)."/smarty.php");
	include(dirname(__FILE__)."/db/db_connection.php");

	if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
		if (isset($_GET['video_id'])) {
		$video_id  = $_GET['video_id'];
		$sql_url = "select * from video where 1=1 and id='".$video_id."'";
		}

		if (isset($_GET['reference_id'])) {
			$reference_id  = $_GET['reference_id'];
			$sql_url = "select * from reference where 1=1 and id='".$reference_id."'";			
		}

		doDB();
		$res_url = $mysqli->query($sql_url);
		$url = $res_url->fetch_array(MYSQLI_ASSOC);
		$file_path = $_SERVER['DOCUMENT_ROOT'].$url['url'];
		$file_name = $url['name'];
	//echo $file_path;
		$fp = fopen($file_path, 'rb');
		$fsize = filesize($file_path);

		//下载文件需要用到的头
		header("Content-type: application/octet-stream");
		header("Accept-Range: bytes");
		header("Accept-Length: ".$fsize);
		header("Content-Disposition: attatchment; filename=".$file_name) ;
		$buffer = 1024;
		$file_count = 0;

		while (!feof($fp) && $file_count<$fsize) {
			$file_con = fread($fp, $buffer);
			$file_count += $buffer;
			echo $file_con;
		}
		fclose($fp);

		
	}else{
		echo "未登录,点击<a href='login.html'>返回</a>,重新登录";

	}

?>
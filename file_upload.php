<?php
	session_start();
	set_time_limit(0);
	include(dirname(__FILE__)."/smarty.php");
	include(dirname(__FILE__)."/db/db_connection.php");
	echo $_SESSION['username'];
	//文档命名规则学校代码+课程代码+课时号+上传日期
	if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
		$school_id = 1;
		$name = $_FILES['filename']['name'];
		$tmp_name = $_FILES['filename']['tmp_name'];
		$course_id = $_POST['course_id'];
		$section = $_POST['section'];
		$hash = hash_hmac('sha224', $tmp_name, 'secret');
		$filename = $hash;
		$filetype = $_POST['filetype'];
		$course_id = $_POST['course_id'];
		
		$file_size = $_FILES['filename']['size'];
		$error = $_FILES['filename']['error'];
		$file_path = str_replace("\\","/",dirname(__FILE__))."/upfile/".$course_id."/".$filetype;
		$fileformat = get_fileFormat($name);
		$file_url = $file_path."/".$filename.".".$fileformat;
		$url = "/webDemo1/upfile/".$course_id."/".$filetype."/".$filename.".".$fileformat;
		$swf_url = "/webDemo1/upfile/".$course_id."/".$filetype."/swf/".$filename.".swf";
		$pdf_url = $file_path."/".$filename.".pdf";
		$info = $_POST['info'];
//		echo $file_url;

		if($filename != ''){
			if(!is_dir($file_path)){
				mkdir($file_path, 0777, true);
			}
			if (file_exists($file_url)) {
				echo "<script>alert('文件名冲突！请重新命名后上传');history.go(-1)</script>";
			}else{
				if(move_uploaded_file($tmp_name, $file_url)){
					doDB();
					if ($filetype == 'video') {
						$sql_upload = "insert into video(course_id, url, section, name, info, date_added) values('".$course_id."', '"
							.$url."', '".$section."', '".$name."', '".$info."', now())";
						$res_upload = $mysqli->query($sql_upload);
						if ($res_upload) {
							echo "<script>alert('上传成功');history.go(-1)</script>";
						}
					}elseif ($filetype == 'document') {
						if(!is_dir($file_path."/swf")){
							mkdir($file_path."/swf", 0777, true);
						}
					
						if ($fileformat != 'pdf') {
							file2pdf("file:///".$file_url, "file:///".$pdf_url);
							pdf2swf($pdf_url, $file_path."/swf/".$filename.".swf");

						}else{
							pdf2swf($file_url, $file_path."/swf/".$filename.".swf");							
						}
						$sql_upload = "insert into reference(course_id, url, section, name, info, type, swf_url, date_added) values('".$course_id."', '"
							.$url."', '".$section."', '".$name."', '".$info."', '".$fileformat."', '".$swf_url."', now())";
						$res_upload = $mysqli->query($sql_upload);
						if ($res_upload) {
							echo "<script>alert('上传成功');history.go(-1)</script>";
						}else{
							echo "<script>alert('上传失败');history.go(-1)</script>";
						}
					}

				}else{
					echo "<script>alert('上传失败');history.go(-1)</script>";
				}

				
			}
		}else{
			echo "<script>alert('请添加上传文件');history.go(-1)</script>";
		}

		
	}else{
		echo "未登录,点击<a href='login.html'>返回</a>,重新登录";

	}




	function get_fileFormat($filename){
		$pattern = "\.(.*)";
		ereg($pattern, $filename, $regs);
		return $regs[count($regs)-1];
	}

	function pdf2swf($input, $output){
		$command = "pdf2swf.exe -t \"" . $input . "\" -o \"" . $output . "\" -s flashversion=9 ";
//		echo $command;
		$Shell = new COM("WScript.shell") or die("创建COM失败");
		$oExec = $Shell->exec($command);
	}


	function MakePropertyValue($name,$value,$osm){  
		$oStruct = $osm->Bridge_GetStruct
		("com.sun.star.beans.PropertyValue");  
		$oStruct->Name = $name;  
		$oStruct->Value = $value;  
		return $oStruct;  
	}  
	function file2pdf($doc_url, $output_url){  
		$osm = new COM("com.sun.star.ServiceManager") or die ("Please be sure that OpenOffice.org is installed.\n");  
		$args = array(MakePropertyValue("Hidden",true,$osm));  
		$oDesktop = $osm->createInstance("com.sun.star.frame.Desktop");  
		$oWriterDoc = $oDesktop->loadComponentFromURL($doc_url,"_blank", 0, $args);  
		$export_args = array(MakePropertyValue("FilterName","writer_pdf_Export",$osm));  
		$oWriterDoc->storeToURL($output_url,$export_args);  
		$oWriterDoc->close(true);  
	}  

/*	$doc_file = "J:/phptools/httpd-2.4.12-win64-VC11/Apache24/htdocs/webDemo1/upfile/1/document/L1 Introduction.ppt";  

	$output_file = "J:/phptools/httpd-2.4.12-win64-VC11/Apache24/htdocs/webDemo1/upfile/1/document/2.pdf";  
	$doc_file = "file:///" . $doc_file;  
	$output_file = "file:///" . $output_file;  
	file2pdf($doc_file,$output_file); */ 

?>
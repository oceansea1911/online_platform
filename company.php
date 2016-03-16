<?php
	session_start();
	header("Cache-Control: no-cache");
	header("Pragma: no-cache");
	include(dirname(__FILE__)."/smarty.php");
	include(dirname(__FILE__)."/db/db_connection.php");
    doDB(); 
    $company_id=$_GET["company_id"];
    //echo "string";
	if (isset($_SESSION['username']) && !empty($_SESSION['username'])){

		$sql_update_str = "select click_rate from internship where company_id=$company_id";
		$click_rate = $mysqli->query($sql_update_str)->fetch_assoc()['click_rate'] + 1;
		$sql_update_str1 = "update internship set click_rate={$click_rate} where company_id=$company_id";
		$mysqli->query($sql_update_str1);
		 
        $sql="select * from (select company.id,company.name,company.company_info,internship.key_word,internship.publish_time from company left join internship on company.id=internship.company_id) as aa where aa.id=$company_id";
        $res_internship = $mysqli->query($sql);
		$internship = $res_internship->fetch_array();

		$sql1="select email,contact,telephone,address from company  where  id=$company_id";
        $res_company = $mysqli->query($sql1);
		$company = $res_company->fetch_array();
		$sql2="select position,numbers,position_info,requirement from internship  where  company_id=$company_id";
        $res_recruitment = $mysqli->query($sql2);
		$recruitments = $res_recruitment->fetch_all(MYSQLI_ASSOC);
		$recruit_info=array();
		foreach ($recruitments as $element) {
			$info = array();
			$info=explode("；",$element["position_info"]);
			$recruit_info[]=$info;
			
		}
		$recruit_requirements=array();
		foreach ($recruitments as $element) {
			$requirements = array();
			$requirements=explode("；",$element["requirement"]);
			$recruit_requirements[]=$requirements;
			
		}
		//var_dump($recruit_requirements);
		//右侧推送
        $sql3="select position,company_id  from internship order by publish_time desc LIMIT 5";
        $res_internship1 = $mysqli->query($sql3);
		$internships_new = $res_internship1->fetch_all(MYSQLI_ASSOC);
		
	    $sql4="select position,company_id  from internship order by click_rate desc LIMIT 5";
        $res_internship2 = $mysqli->query($sql4);
		$internships_new2 = $res_internship2->fetch_all(MYSQLI_ASSOC);
		

        $smarty->assign('internship', $internship);
        $smarty->assign('company', $company);
        $smarty->assign('recruitments', $recruitments);
        $smarty->assign('recruit_info', $recruit_info); 
        $smarty->assign('recruit_requirements', $recruit_requirements); 
        $smarty->assign('internships_new', $internships_new);
        $smarty->assign('internships_new2', $internships_new2);
        $smarty->display('company.html');		
	    
	}else{
			echo "未登录,点击<a href='loginschool.html'>返回</a>,重新登录";

	}

?>
<?php
	session_start();
	header("Cache-Control: no-cache");
	header("Pragma: no-cache");
	include(dirname(__FILE__)."/smarty.php");
	include(dirname(__FILE__)."/db/db_connection.php");
    doDB();
  //echo $_SESSION['username'];
    define('ITEMS_PER_PAGE',4);
   
  
	if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
        if(isset($_GET["search"]) && $_GET["search"] == "搜索"){
        	if (isset($_GET['p']) && !empty($_GET['p']))
				$currentPage = $_GET['p'];
			else
				$currentPage = 1;
        	$name=$_GET["name"];
	        $city=$_GET["city"];
        	$sql3="select  * from (select company.id,company.name,company.company_info,internship.position,internship.city,internship.key_word,internship.publish_time,internship.click_rate from company left join internship on company.id=internship.company_id)as aa where (aa.name like '%{$name}%' or aa.position like '%{$name}%') and aa.city like '%{$city}%' order by aa.publish_time desc limit ".ITEMS_PER_PAGE . " offset " . ITEMS_PER_PAGE * ($currentPage-1);
	        #var_dump($sql);";
       		$res_internship3 = $mysqli->query($sql3);
			$internships3 = $res_internship3->fetch_all(MYSQLI_ASSOC);
			$totalPage_query1 = "select  count(*) as totalpages  from (select company.id,company.name,company.company_info,internship.position,internship.city,internship.key_word,internship.publish_time,internship.click_rate from company left join internship on company.id=internship.company_id)as aa where (aa.name like '%{$name}%' or aa.position like '%{$name}%') and aa.city like '%{$city}%'";
			$res_total_page1 = $mysqli->query($totalPage_query1);
			$totalPages1 = $res_total_page1->fetch_assoc()['totalpages'];
			//echo $totalPages1;
			$totalPages1 = intval($totalPages1)/ITEMS_PER_PAGE;
			//echo ceil($totalPages1);
			$pages1 = array();
			for ($i = 1; $i <= ceil($totalPages1); $i++)
				$pages1[] = $i;
		}
		else{
		   	if (isset($_GET['p']) && !empty($_GET['p']))
				$currentPage = $_GET['p'];
			else
				$currentPage = 1;
			#var_dump($currentPage);
		 	$sql="select  company.id,company.name,company.company_info,internship.position,internship.city,internship.key_word,internship.publish_time,internship.click_rate from company left join internship on company.id=internship.company_id order by internship.publish_time desc limit ".ITEMS_PER_PAGE . " offset " . ITEMS_PER_PAGE * ($currentPage-1);
	        #var_dump($sql);
	        $res_internship = $mysqli->query($sql);
			$internships = $res_internship->fetch_all(MYSQLI_ASSOC);

			$totalPage_query = "select count(*) as totalpages from internship";
			$res_total_page = $mysqli->query($totalPage_query);
			$totalPages = $res_total_page->fetch_assoc()['totalpages'];
			$totalPages = intval($totalPages)/ITEMS_PER_PAGE;
			#var_dump($totalPages);
			$pages = array();
			for ($i = 1; $i <= ceil($totalPages); $i++)
				$pages[] = $i;
		}
	
		#var_dump($pages);
		$previous=$currentPage-1;
		$next=$currentPage+1;
		$smarty->assign("pages", $pages);
		$smarty->assign("pages1", $pages1);
		$smarty->assign("previous", $previous);
		$smarty->assign("next", $next);
		$smarty->assign("curPage",$currentPage);

        //右侧推送
        $sql1="select position,company_id  from internship order by publish_time desc LIMIT 5";
        $res_internship1 = $mysqli->query($sql1);
		$internships_new = $res_internship1->fetch_all(MYSQLI_ASSOC);

		
	    $sql2="select position,company_id  from internship order by click_rate desc LIMIT 5";
        $res_internship2 = $mysqli->query($sql2);
		$internships_new2 = $res_internship2->fetch_all(MYSQLI_ASSOC);
		
		//$ajax_request = @($_SERVER["HTTP_AJAX_REQUEST"] == "true");
		//if ($ajax_request){
		$smarty->assign("name", $name);
    	$smarty->assign("city", $city);
		//}
   
    	//$smarty->display($ajax_request ? 'internship.html' : 'internship.html');

        $smarty->assign('internships', $internships);
        $smarty->assign('internships_new', $internships_new);
        $smarty->assign('internships_new2', $internships_new2);
        $smarty->assign('internships3', $internships3);
        $smarty->assign('session_username', $_SESSION['username']);
        //echo "10";
        $smarty->display('internship.html');		
		
		
	}else{
			echo "未登录,点击<a href='loginschool.html'>返回</a>,重新登录";

	}

?>
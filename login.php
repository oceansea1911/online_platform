<?php
	session_start();
	include('db/db_connection.php');

	$username = $_POST["username"];
    $password = $_POST["password"];
    $type = $_POST['usertype'];
    doDB();

/*    $sql = "select * from ".$type." where name='".$username."' and password='".$password."'";
 //   echo $sql;
    $result = $mysqli->query($sql);
    $student = $result->fetch_array(MYSQLI_ASSOC);
    if ($result->num_rows) {
    	$_SESSION['username'] = $username;
        $_SESSION['userid'] = $student['id'];
        $_SESSION['usertype'] = $_POST['usertype'];
    	echo "<a href='forum_subject_display.php?id=1'>c语言课程论坛</a>";	
    }*/
    if (isset($username) && !empty($username)){

        if($username == "" ) 
            {  
                echo "<script>alert('请输入用户名！'); history.go(-1);</script>";  
            } 
            elseif ($password == "") {
               echo "<script>alert('请输入密码！'); history.go(-1);</script>";  
             } 
            elseif ($type == "") {
               echo "<script>alert('请选择登陆类型！'); history.go(-1);</script>";  
             } 
            else{
                $result = $mysqli->query("call login_chk('".$type."', '".$username."', '".$password."')");
                $user = $result->fetch_array(MYSQLI_ASSOC);
                if ($result->num_rows) {
                    $_SESSION['username'] = $username;
                    $_SESSION['userid'] = $user['id'];
                    $_SESSION['usertype'] = $_POST['usertype'];
    //                echo "<a href='course_display.php?'>我的课程</a>";    
                    header("Location: student_center.php");
                }
                else{
                    echo "<script>alert('login failed')</script>";//"<script>$('input').append('<span>hello  dffdfdfd</span>')</script>"
                }
      
             } 
        }else{
            echo "未登录,点击<a href='loginschool.html'>返回</a>,重新登录";

    }
?>





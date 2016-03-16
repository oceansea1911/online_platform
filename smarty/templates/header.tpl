<nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
      <div class="collapse navbar-collapse pull-left">
          <ul class="nav navbar-nav">
            <li><a href="index.php">首页</a></li>
            <li><a href="#">教学实验</a></li>
            <li><a href="researchhome.php">科研合作</a></li>
            <li><a href="internship.php">就业实习</a></li>
            <li><a href="#">关于我们</a></li>
          </ul>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav pull-right">
            {if $session_username==null}
            <li><a href="#">注册</a></li>
            <li  id="enter"><a href="#">登录</a>
              <div class="user-center hidden enter-position">
                <ul>
                  <li><a href="#">企业入口</a></li>
                  <li><a href="loginschool.html">高校入口</a></li>
                </ul> 
              </div>
            </li>
            {else}
            <div id="user">
                <img src="img/user.png" class="user-img">
                <div class="user-center hidden">
              <ul>
                <li><a href="student_center.php">个人中心</a></li>
                <li><a href="logout.php">退出</a></li>
              </ul> 
                </div>
            </div>
            {/if}

          </ul>
        </div>
      </div>
    </nav>
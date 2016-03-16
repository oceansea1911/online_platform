<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-18 09:29:50
         compiled from ".\smarty\templates\major.html" */ ?>
<?php /*%%SmartyHeaderCode:287557d852b284c13-07339467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d828818360de3cda720ac442e9bef90f436e15e' => 
    array (
      0 => '.\\smarty\\templates\\major.html',
      1 => 1434619782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287557d852b284c13-07339467',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557d852b34bfc5_28752203',
  'variables' => 
  array (
    'courses' => 0,
    'course' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557d852b34bfc5_28752203')) {function content_557d852b34bfc5_28752203($_smarty_tpl) {?><?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<!--     <link rel="icon" href="../../favicon.ico">
 --><title>我的课程</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
    <style>
      .solid-height{
        margin: 0 0 10px;
        height: 100px;
        overflow-y: hidden;
      }
    </style>
  </head>
<body>	
	<nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
      <div class="collapse navbar-collapse pull-left">
          <ul class="nav navbar-nav">
            <li><a href="#" class="active">首页</a></li>
            <li><a href="#">教学实验</a></li>
            <li><a href="#">科研合作</a></li>
            <li><a href="#">就业实习</a></li>
            <li><a href="#">关于我们</a></li>
          </ul>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav pull-right">
            <!-- <li><a href="#">注册</a></li>
            <li><a href="#">登录</a></li> -->
            <div id="user">
                <img src="img/user.png" class="user-img">
                <div class="user-center hidden">
              <ul>
                <li><a href="#">个人中心</a></li>
                <li><a href="#">退出</a></li>
              </ul> 
                </div>
            </div>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <ul class="breadcrumb">
          <li><a href="student_center.php">个人中心</a> <span class="divider"></span></li>
          <li><a href="#">我的课程</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-9">
          <!-- 课程详情导航条 -->
          <div class="row">
            <div class="col-xs-12 horizon">
              <ul class="nav navbar-nav" id="s-nav">
                <li><a href="#s-part1" class="s-chosen">全部课程</a></li>
                <li><a href="#s-part2">公开课</a></li>
                <li><a href="#s-part3">校内课</a></li>
              </ul>
            </div>
          </div>
         <!--  4部分内容   -->
         <!-- s-part1 -->
          <div>
            <div class="row" id="s-part1">
              <?php  $_smarty_tpl->tpl_vars['course'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['course']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['courses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['course']->key => $_smarty_tpl->tpl_vars['course']->value) {
$_smarty_tpl->tpl_vars['course']->_loop = true;
?>
              <div class="col-sm-5 col-md-3">
                <div class="thumbnail">
                  <a href="course_info.php?course_id=<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
"><img src="img/subject.png" alt="课程"></a>
                  <div class="caption">
                    <a href="course_info.php?course_id=<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
"><h3><?php echo $_smarty_tpl->tpl_vars['course']->value['name'];?>
</h3></a>
                    <p class="indent solid-height"><?php echo $_smarty_tpl->tpl_vars['course']->value['info'];?>
</p>
                    <p><!-- <a href="#" class="btn btn-primary" role="开始学习">开始学习</a>  --><a href="course_info.php?course_id=<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
" class="btn btn-info" role="开始学习">开始学习</a></p>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>


            <div class="row hidden" id="s-part2">
              <?php  $_smarty_tpl->tpl_vars['course'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['course']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['courses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['course']->key => $_smarty_tpl->tpl_vars['course']->value) {
$_smarty_tpl->tpl_vars['course']->_loop = true;
?>
              <?php if ($_smarty_tpl->tpl_vars['course']->value['type']=='公开课') {?>
              <div class="col-sm-5 col-md-3">
                <div class="thumbnail">
                  <a href="course_info.php?course_id=<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
"><img src="img/subject.png" alt="课程"></a>
                  <div class="caption">
                    <a href="course_info.php?course_id=<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
"><h3><?php echo $_smarty_tpl->tpl_vars['course']->value['name'];?>
</h3></a>
                    <p class="indent solid-height"><?php echo $_smarty_tpl->tpl_vars['course']->value['info'];?>
</p>
                    <p><!-- <a href="#" class="btn btn-primary" role="开始学习">开始学习</a>  --><a href="course_info.php?course_id=<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
" class="btn btn-info" role="开始学习">开始学习</a></p>
                  </div>
                </div>
              </div>
              <?php }?>
              <?php } ?>
            </div>

            <div class="row hidden" id="s-part3">
              <?php  $_smarty_tpl->tpl_vars['course'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['course']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['courses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['course']->key => $_smarty_tpl->tpl_vars['course']->value) {
$_smarty_tpl->tpl_vars['course']->_loop = true;
?>
              <?php if ($_smarty_tpl->tpl_vars['course']->value['type']=='校内课') {?>
              <div class="col-sm-5 col-md-3">
                <div class="thumbnail">
                  <a href="course_info.php?course_id=<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
"><img src="img/subject.png" alt="课程"></a>
                  <div class="caption">
                    <a href="course_info.php?course_id=<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
"><h3><?php echo $_smarty_tpl->tpl_vars['course']->value['name'];?>
</h3></a>
                    <p class="indent solid-height"><?php echo $_smarty_tpl->tpl_vars['course']->value['info'];?>
</p>
                    <p><!-- <a href="#" class="btn btn-primary" role="开始学习">开始学习</a>  --><a href="course_info.php?course_id=<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
" class="btn btn-info" role="开始学习">开始学习</a></p>
                  </div>
                </div>
              </div>
              <?php }?>
              <?php } ?>              
            </div>

          </div>
        </div>


       <!--  右侧推送 -->
        <div class="col-xs-6 col-sm-3 pull-right" style="padding: 10px; margin-top: -10px;">
            <dl>
              <dt>最新课程</dt>
              <dd>javascript高级程序设计</dd>
              <dd>javascript高级程序设计</dd>
              <dd>javascript高级程序设计</dd>
              <dd>javascript高级程序设计</dd>
              <dd>javascript高级程序设计</dd>
              <dd>HTML5秘籍</dd>
            </dl>
            <dl>
              <dt>最新实习</dt>
              <dd>百度前端实习</dd>
              <dd>百度前端实习</dd>
              <dd>百度前端实习</dd>
              <dd>百度前端实习</dd>
              <dd>百度前端实习</dd>
              <dd>百度前端实习</dd>
              <dd>百度前端实习</dd>
            </dl>
        </div>
      </div>
    </div>
    <div class="footer">
        <div class="footer-text">
            <p>
                <span>关于我们</span>
                <span>诚征英才</span>
                <span>联系我们</span>
                <span>服务协议</span>
                <span>京ICP备15011063号</span>
            </p>
            <p>
                Copyright 2015 GPX All Rights Reserved&nbsp;&nbsp;&nbsp;&nbsp;极派客公司&nbsp;&nbsp;&nbsp;&nbsp;版权所有&nbsp;&nbsp;&nbsp;&nbsp;
            </p>
        </div>
    </div>
    <?php echo '<script'; ?>
 src="js/jquery-1.11.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/common.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>

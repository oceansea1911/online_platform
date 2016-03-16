<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-30 11:43:32
         compiled from ".\smarty\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:230835592182c28d085-84725936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8661095a5f199603022316564d5bf43c426bd167' => 
    array (
      0 => '.\\smarty\\templates\\header.tpl',
      1 => 1435664610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230835592182c28d085-84725936',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5592182c2a0916_75034884',
  'variables' => 
  array (
    'session_username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5592182c2a0916_75034884')) {function content_5592182c2a0916_75034884($_smarty_tpl) {?><nav class="navbar navbar-fixed-top navbar-inverse">
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
            <?php if ($_smarty_tpl->tpl_vars['session_username']->value==null) {?>
            <li><a href="#">注册</a></li>
            <li  id="enter"><a href="#">登录</a>
              <div class="user-center hidden enter-position">
                <ul>
                  <li><a href="#">企业入口</a></li>
                  <li><a href="loginschool.html">高校入口</a></li>
                </ul> 
              </div>
            </li>
            <?php } else { ?>
            <div id="user">
                <img src="img/user.png" class="user-img">
                <div class="user-center hidden">
              <ul>
                <li><a href="student_center.php">个人中心</a></li>
                <li><a href="logout.php">退出</a></li>
              </ul> 
                </div>
            </div>
            <?php }?>

          </ul>
        </div>
      </div>
    </nav><?php }} ?>

<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-30 12:12:30
         compiled from ".\smarty\templates\subject.html" */ ?>
<?php /*%%SmartyHeaderCode:22616559287aedea555-55057579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5781d57a9db0a527e4637b3157218f660ab4b4c3' => 
    array (
      0 => '.\\smarty\\templates\\subject.html',
      1 => 1435636510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22616559287aedea555-55057579',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'session_username' => 0,
    'course_content' => 0,
    'comment_list' => 0,
    'comments' => 0,
    'comment' => 0,
    'teachers' => 0,
    'courses' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559287af186804_35785958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559287af186804_35785958')) {function content_559287af186804_35785958($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<!--     <link rel="icon" href="../../favicon.ico">
 --><title>课程</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
    <link href="css/subject.css" rel="stylesheet">
    <?php echo '<script'; ?>
 type="text/javascript" src="js/flexpaper_flash.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/demo_js.js"><?php echo '</script'; ?>
>  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>
  <?php echo '<script'; ?>
 type="text/javascript">
    function displayppt(){
      alert("hello");
      var holder=document.getElementById('viewerPlaceHolder');
       alert(holder);
      //holder.parent().style.display="";
      
    };
  <?php echo '</script'; ?>
>

  <body>
   <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('session_username'=>$_smarty_tpl->tpl_vars['session_username']->value), 0);?>

   <!--  <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="collapse navbar-collapse pull-left">
          <ul class="nav navbar-nav">
            <li><a href="#">首页</a></li>
            <li><a href="#">教学实验</a></li>
            <li><a href="#">科研合作</a></li>
            <li><a href="#">就业实习</a></li>
            <li><a href="#">关于我们</a></li>
          </ul>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav pull-right">
            <li><a href="#">注册</a></li>
            <li><a href="#">登录</a></li>
          </ul>
        </div>
      </div>
    </nav> -->

    <div class="container">
      <div class="row">
        <ul class="breadcrumb">
          <li><a href="#">个人中心</a> <span class="divider"></span></li>
          <li><a href="#">我的课程</a> <span class="divider"></span></li>
          <li><a href="#">校内课</a> <span class="divider"></span></li>
          <li><a href="#">C++</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-9">
          <div class='row  bg'>
            <div class="col-xs-6 col-sm-4">
              <img src="img/s0.png">
            </div>
            <div class="col-xs-6 col-sm-8 s-title">
              <h3>课程简介</h3>
              <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
            </div>
          </div>
          <!-- 课程详情导航条 -->
          <div class="row">
            <div class="col-xs-12 horizon">
              <ul class="nav navbar-nav" id="s-nav">
                <li><a href="#s-part1">课程信息</a></li>
                <li><a href="#s-part2">实验</a></li>
                <li><a href="#s-part3">参考资料</a></li>
                <li><a href="#s-part4">讨论区</a></li>
              </ul>
            </div>
          </div>

         <!--  4部分内容   -->
         <!-- s-part1 -->
          <div>
            <div class="row" id="s-part1">
              <?php if ($_smarty_tpl->tpl_vars['course_content']->value!='') {?>
              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['content'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['content']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['name'] = 'content';
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['course_content']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['content']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['content']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['content']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['content']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['content']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['content']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['total']);
?>
                <?php if ($_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index_prev']]['chap_num']==$_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['chap_num']&&$_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index_next']]['chap_num']==$_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['chap_num']) {?>
                  <li>
                    <a href="#"><?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['sec_name'];?>
</a>
                    <a href="#<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['sec_num'];?>
" data-toggle="modal" title="播放视频"><span class="glyphicon glyphicon-film" aria-hidden="true"></span></a>
                    <a href="file.html?http://127.0.0.1<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['swf_url'];?>
" title="查看PPT"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></a> 
        <div class="modal fade" id="<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['sec_num'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times; </button>
                      <h4 class="modal-title" id="myModalLabel">
                            <?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['sec_name'];?>

                      </h4>
                    </div>
                    <div class="modal-body">
                      <video class='video-style' controls id="video">
                        <source src='<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['video_url'];?>
' type="video/mp4">
                        <source src='<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['video_url'];?>
' type='video/ogg'>
                        <p> 浏览器不支持该视频播放，请升级浏览器</p>
                      </video>
                    </div>
                  </div>
                </div>
        </div>        
                  </li>

                <?php } elseif ($_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index_prev']]['chap_num']==$_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['chap_num']&&$_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index_next']]['chap_num']!=$_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['chap_num']) {?>
                  <li>
                    <a href="#"><?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['sec_name'];?>
</a>
                    <a href="#<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['sec_num'];?>
" data-toggle="modal" title="播放视频"><span class="glyphicon glyphicon-film" aria-hidden="true"></span></a>
                    <a href="file.html?http://127.0.0.1<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['swf_url'];?>
" target="_blank" title="查看PPT"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></a>
                  </li>
        <div class="modal fade" id="<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['sec_num'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times; </button>
                      <h4 class="modal-title" id="myModalLabel">
                            <?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['sec_name'];?>

                      </h4>
                    </div>
                    <div class="modal-body">
                      <video class='video-style' controls id="video">
                        <source src='<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['video_url'];?>
' type="video/mp4">
                        <source src='<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['video_url'];?>
' type='video/ogg'>
                        <p> 浏览器不支持该视频播放，请升级浏览器</p>
                      </video>
                    </div>
                  </div>
                </div>
        </div>                   
                  </ol> 
                  </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index_prev']]['chap_num']!=$_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['chap_num']&&$_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index_next']]['chap_num']==$_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['chap_num']) {?>
              <div class="col-sm-12">
                <h3 class="s-chapter">第<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['chap_num']%100;?>
章 <?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['chap_name'];?>
</h3>
                <ol class="s-section">                             
                  <li>
                    <a href="#"><?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['sec_name'];?>
</a>
                    <a href="#<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['sec_num'];?>
" data-toggle="modal" title="播放视频"><span class="glyphicon glyphicon-film" aria-hidden="true"></span></a>
                    <a href="file.html?http://127.0.0.1<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['swf_url'];?>
" target="_blank" title="查看PPT"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></a>
                  </li> 
        <div class="modal fade" id="<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['sec_num'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times; </button>
                      <h4 class="modal-title" id="myModalLabel">
                            <?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['sec_name'];?>

                      </h4>
                    </div>
                    <div class="modal-body">
                      <video class='video-style' controls id="video">
                        <source src='<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['video_url'];?>
' type="video/mp4">
                        <source src='<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['video_url'];?>
' type='video/ogg'>
                        <p> 浏览器不支持该视频播放，请升级浏览器</p>
                      </video>
                    </div>
                  </div>
                </div>
        </div>
                <?php } else { ?>                  
              <div class="col-sm-12">
                <h3 class="s-chapter">第<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['chap_num']%100;?>
章 <?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['chap_name'];?>
</h3>
                <ol class="s-section">                             
                  <li>
                    <a href="#"><?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['sec_name'];?>
</a>
                    <a href="#<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['sec_num'];?>
" data-toggle="modal" title="播放视频"><span class="glyphicon glyphicon-film" aria-hidden="true"></span></a>
                    <a href="file.html?http://127.0.0.1<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['swf_url'];?>
" target="_blank" title="查看PPT"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></a>
                  </li>
        <div class="modal fade" id="<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['sec_num'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times; </button>
                      <h4 class="modal-title" id="myModalLabel">
                            <?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['sec_name'];?>

                      </h4>
                    </div>
                    <div class="modal-body">
                      <video class='video-style' controls id="video">
                        <source src='<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['video_url'];?>
' type="video/mp4">
                        <source src='<?php echo $_smarty_tpl->tpl_vars['course_content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']]['video_url'];?>
' type='video/ogg'>
                        <p> 浏览器不支持该视频播放，请升级浏览器</p>
                      </video>
                    </div>
                  </div>
                </div>
        </div> 
                </ol>
              </div>
              <?php }?>
              <?php endfor; endif; ?>
              <?php }?>             
            </div>


            <!-- s-part2 -->
            <div class="row hidden" id="s-part2">
              <div class="col-sm-12">
                <h3 class="s-chapter">第1章 SVN下载与安装实验</h3>
                <ol class="s-section">
                  <li>
                    <a href="#">SVN 服务器端的安装和配置</a>
                    <a href="#"><span class="glyphicon glyphicon-expand" aria-hidden="true"></a>
                  </li>
                </ol>
              </div>
            </div>
            <div class="row hidden" id="s-part3">
              <div class="col-sm-5 col-md-3">
                <div class="thumbnail">
                  <a href="#"><img src="img/subject.png" alt="课程"></a>
                  <div class="caption">
                    <a href="#"><h3>Python</h3></a>
                    <p>本课程主要讲解在不同系统（Window、Linux）中搭建Python开发环境，及Eclipse配置和 Python 文件类型。</p>
                    <p><!-- <a href="#" class="btn btn-primary" role="关注">关注</a>  --><a href="#" class="btn btn-default" role="关注">关注</a></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-5 col-md-3">
                <div class="thumbnail">
                  <a href="#"><img src="img/subject.png" alt="课程"></a>
                  <div class="caption">
                    <a href="#"><h3>Python</h3></a>
                    <p>本课程主要讲解在不同系统（Window、Linux）中搭建Python开发环境，及Eclipse配置和 Python 文件类型。</p>
                    <p><!-- <a href="#" class="btn btn-primary" role="关注">开始学习</a>  --><a href="#" class="btn btn-default" role="关注">关注</a></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-5 col-md-3">
                <div class="thumbnail">
                  <a href="#"><img src="img/subject.png" alt="课程"></a>
                  <div class="caption">
                    <a href="#"><h3>Python</h3></a>
                    <p>本课程主要讲解在不同系统（Window、Linux）中搭建Python开发环境，及Eclipse配置和 Python 文件类型。</p>
                    <p><!-- <a href="#" class="btn btn-primary" role="关注">开始学习</a>  --><a href="#" class="btn btn-default" role="关注">关注</a></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-5 col-md-3">
                <div class="thumbnail">
                  <a href="#"><img src="img/subject.png"></a>
                  <div class="caption">
                    <a href="#"><h3>Python</h3></a>
                    <p>本课程主要讲解在不同系统（Window、Linux）中搭建Python开发环境，及Eclipse配置和 Python 文件类型。</p>
                    <p><!-- <a href="#" class="btn btn-primary" role="关注">开始学习</a>  --><a href="#" class="btn btn-default" role="关注">关注</a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row hidden" id="s-part4">
              <?php if ($_smarty_tpl->tpl_vars['comment_list']->value!='') {?>
                <?php  $_smarty_tpl->tpl_vars['comments'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comments']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comments']->key => $_smarty_tpl->tpl_vars['comments']->value) {
$_smarty_tpl->tpl_vars['comments']->_loop = true;
?>

                  <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
                    <?php if (count($_smarty_tpl->tpl_vars['comment']->value)==6) {?>
                      <span><?php echo $_smarty_tpl->tpl_vars['comment']->value['name'];?>
 | <?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_time'];?>
 说: <?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
</span>  <a class="pull-right" data-toggle="modal" href="#response"> 回复</a>
                      <p></p>
                      <p></p> 

                    <?php } else { ?>
                      <span><?php echo $_smarty_tpl->tpl_vars['comment']->value['name'];?>
 | <?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_time'];?>
 回复<?php echo $_smarty_tpl->tpl_vars['comment']->value['parent_name'];?>
 说: <?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
</span>  <a class="pull-right" data-toggle="modal" href="#response">回复</a><br>

                    <?php }?>
                  <?php } ?>
                <?php } ?>

              <?php } else { ?>
              <h3>暂无跟帖</h3>
              <?php }?>

              <div class="row input-board">
                  <form name="form_reply">
                    <textarea placeholder="留个脚印" name="content"></textarea> 
                  </form>  
              <div class="col-sm-2 col-sm-offset-11">
                <btton class="btn btn-info">回复</button>
              </div>               
              </div>
            </div>
          </div>
        </div>


       <!--  右侧推送 -->
      <?php echo $_smarty_tpl->getSubTemplate ("subjectpush.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('teachers'=>$_smarty_tpl->tpl_vars['teachers']->value,'course'=>$_smarty_tpl->tpl_vars['courses']->value), 0);?>

        <!-- <div class="col-xs-6 col-sm-3 pull-right" style="padding: 10px;margin-top: -10px">
            <dl>
              <dt>授课老师</dt>
              <dd>
                  <a href="#" class="figure"><img src="img/user.png">
                  </a>
                  <a href="#">大山</a>
                  <p> Web前端工程师</p>
                  <br class="clear">
                  <p class="indent" style="margin-top: 20px;">W3CPlus创始人，目前就职于手淘。对CSS3和Sass等前端脚本语言有深入的认识和丰富的实践经验。CSS3、Sass和Drupal中国布道者，2014年出版《图解CSS3：核心技术与案例实战》。
                  </p>
              </dd>
            </dl>
            <dl>
              <dt>课程须知</dt>
                <dd>
                <p class="indent">对CSS有一定的了解，才可以更好的学习本课程。</p>
              </dd>
            </dl>
            <dl>
              <dt>老师告诉你能学到什么？</dt>
                <dd>Sass是什么？他有什么功能？</dd>
                <dd>Sass需要什么样的环境才能顺利运行</dd>
                <dd>Sass语法格式和CSS有什么不一样？
                <dd>Sass要如何编译
                <dd>你要怎么调试Sass
                
            </dl>
        </div>
      </div>
    </div> -->  
      
     <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

     <!--  <div class="footer">
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
  </div> -->
          <!-- response modal -->
  <div class="modal fade" id="response" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
                   回复
            </h4>
          </div>
          <div class="modal-body">
                  
                    <textarea id="content" name="content"></textarea>
   
                  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭
            </button>
            <button type="button" class="btn btn-primary" onclick="forum_reply(<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['comment']->value['course_id'];?>
)">确认</button>
          </div>
      </div>
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
  <?php echo '<script'; ?>
 src="js/subject.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }} ?>

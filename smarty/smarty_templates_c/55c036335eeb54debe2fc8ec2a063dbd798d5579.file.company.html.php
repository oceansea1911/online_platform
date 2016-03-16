<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-30 04:33:03
         compiled from ".\smarty\templates\company.html" */ ?>
<?php /*%%SmartyHeaderCode:348355921bff63e624-97277650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55c036335eeb54debe2fc8ec2a063dbd798d5579' => 
    array (
      0 => '.\\smarty\\templates\\company.html',
      1 => 1435630907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '348355921bff63e624-97277650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'internship' => 0,
    'recruitments' => 0,
    'recruitment' => 0,
    'recruit_info' => 0,
    'elements' => 0,
    'element' => 0,
    'recruit_requirements' => 0,
    'company' => 0,
    'internships_new' => 0,
    'internship_new' => 0,
    'internships_new2' => 0,
    'internship_new2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55921bff740367_02119874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55921bff740367_02119874')) {function content_55921bff740367_02119874($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<!--     <link rel="icon" href="../../favicon.ico">
 --><title>公司</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
    <style type="text/css"> 
    .sub-header {
	    padding-bottom: 10px;
	    border-bottom: 1px solid #EEE;
	}
	.glyphicon{
		top: 5px;
		color: red;
		border: 1px;
	}
	.content-c{
		padding: 10px;
	}
	.job-name{
		color: rgb(92, 184, 92);
		font-family: 微软雅黑;
		background:#eee;
		padding: 10px;
		cursor: pointer;
	}
	.sub-title{
		font-family: 微软雅黑;
  		font-size: 18px;
	}
	.resume{
		  position: fixed;
		  bottom: 30px;
		  right: 150px;
		  width: 150px;
		  border: 1px #eee solid;
		  height: 100px;
		  background: #5CB85C;
	}
	.resume a,h4{
		font-size: 18px;
		display: block;
		height: 34px;
		text-decoration: none;
		padding-bottom: 12px;
		font-family: 微软雅黑;
		color: white;
		text-align: center;
		border-bottom: 1px white solid;
		cursor: pointer;
	}
	.resume .glyphicon{
		text-align: center;
		color: white;
	}
	.resume h5{
		text-align: center;
		color: red;
		font-size: 18px;
	}
	.modal-header {
	  	padding: 10px;
	 	border-bottom: 1px solid #e5e5e5;
	 	height: 41px;
		background: #5CB85C;
	 }
	.input-group {
		  margin-bottom: 10px;
		}
	.modal-dialog {
  		width: 404px;
  	}
  	#resume {
		margin: 300px 0 0 200px;
	} /*投递简历对话框的位置*/
    </style>
  </head>
<body>	
	<nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
      <div class="collapse navbar-collapse pull-left">
          <ul class="nav navbar-nav">
            <li><a href="#">首页</a></li>
            <li><a href="#">教学实验</a></li>
            <li><a href="#">科研合作</a></li>
            <li><a href="internship.php?p=1">就业实习</a></li>
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
    </nav>
    <div class="container">
      	<div class="row horizon">
        	<h3><span class="glyphicon glyphicon-heart-empty" aria-hidden="true" id="collect-c"></span>	<?php echo $_smarty_tpl->tpl_vars['internship']->value["name"];?>
</h3>
     	</div>
      	<div class="row">
	        <div class="col-xs-12 col-sm-9">
	          <div>
	            <div class="row">
	            	<div class="col-xs-4 hint">
	            		<p>发布时间：<span><?php echo $_smarty_tpl->tpl_vars['internship']->value["publish_time"];?>
</span></p>
	            	</div>
	            	<div class="col-xs-8 hint">
	            		<p>标签：<span><?php echo $_smarty_tpl->tpl_vars['internship']->value["key_word"];?>
</span></p>
	            	</div>
	            </div>
	            <div class="row panel panel-default">
	            	<div class='content-c'>
	            		<p class="sub-title">一、公司介绍</p>
	            		<p class="indent"><?php echo $_smarty_tpl->tpl_vars['internship']->value["company_info"];?>
</p>
	            		<p class="sub-title">二、招聘职位</p>
	            		<?php  $_smarty_tpl->tpl_vars['recruitment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recruitment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recruitments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop1']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['recruitment']->key => $_smarty_tpl->tpl_vars['recruitment']->value) {
$_smarty_tpl->tpl_vars['recruitment']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop1']['iteration']++;
?>
	            		<div>
	            			
	            			<p class="job-name"><span class='glyphicon glyphicon-tag'></span><?php echo $_smarty_tpl->tpl_vars['recruitment']->value["position"];?>
</p>
	            			<p>人数：<span><?php echo $_smarty_tpl->tpl_vars['recruitment']->value["numbers"];?>
人</span></p>
	            			
	            			<p>职位描述：</p>
	            			<ul>
	            				<?php  $_smarty_tpl->tpl_vars['elements'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elements']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recruit_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop2']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['elements']->key => $_smarty_tpl->tpl_vars['elements']->value) {
$_smarty_tpl->tpl_vars['elements']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop2']['iteration']++;
?>
	            				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop2']['iteration']==$_smarty_tpl->getVariable('smarty')->value['foreach']['loop1']['iteration']) {?>
	            		           <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
	            				<li><?php echo $_smarty_tpl->tpl_vars['element']->value;?>
</li>
	            				
	            				<?php } ?>
	            				<?php }?>
	            				<?php } ?>
	            				
	            			</ul>
	            			<p>职位要求：</p>
	            			<ul>
	            				<?php  $_smarty_tpl->tpl_vars['elements'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elements']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recruit_requirements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop4']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['elements']->key => $_smarty_tpl->tpl_vars['elements']->value) {
$_smarty_tpl->tpl_vars['elements']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop4']['iteration']++;
?>
	            				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop4']['iteration']==$_smarty_tpl->getVariable('smarty')->value['foreach']['loop1']['iteration']) {?>
	            		           <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
	            				<li><?php echo $_smarty_tpl->tpl_vars['element']->value;?>
</li>
	            				
	            				<?php } ?>
	            				<?php }?>
	            				<?php } ?>
	            			</ul>
                            
	            		</div>
	            		<?php } ?>
	            		
	            		<p class="sub-title">三、联系方式</p>
	            		<p>邮箱：<span><?php echo $_smarty_tpl->tpl_vars['company']->value["email"];?>
</span></p>
	            		<p>联系人：<span><?php echo $_smarty_tpl->tpl_vars['company']->value["contact"];?>
</span></p>
	            		<p>联系电话：<span><?php echo $_smarty_tpl->tpl_vars['company']->value["telephone"];?>
</span></p>
	            		<p>地址：<span><?php echo $_smarty_tpl->tpl_vars['company']->value["address"];?>
</span></p>
	            	</div>
	            </div>
	          </div>
	        </div>


       <!--  右侧推送 -->
       		<div class="col-xs-6 col-sm-3 pull-right" style="margin-top: 12px;padding: 10px">
            <dl>
            	<dt>最新实习</dt>
               <?php  $_smarty_tpl->tpl_vars['internship_new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['internship_new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['internships_new']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['internship_new']->key => $_smarty_tpl->tpl_vars['internship_new']->value) {
$_smarty_tpl->tpl_vars['internship_new']->_loop = true;
?>
              <dd><a href="company.php?company_id=<?php echo $_smarty_tpl->tpl_vars['internship_new']->value['company_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['internship_new']->value['position'];?>
</dd>
             
               <?php } ?> 
            </dl>
            <dl>
              <dt>最热实习</dt>
              <?php  $_smarty_tpl->tpl_vars['internship_new2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['internship_new2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['internships_new2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['internship_new2']->key => $_smarty_tpl->tpl_vars['internship_new2']->value) {
$_smarty_tpl->tpl_vars['internship_new2']->_loop = true;
?>
              <dd><a href="company.php?company_id=<?php echo $_smarty_tpl->tpl_vars['internship_new2']->value['company_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['internship_new2']->value['position'];?>
</dd>
               <?php } ?> 
          
            </dl>
       		</div>
    	</div>
      <!-- 投递简历 -->
      	<div class="resume">
      		<a href="#resume" data-toggle="modal">申请职位</a>
      		<h5><span class='glyphicon glyphicon-envelope'></span> <span>未投递</span></h5>
      	</div>
      	<div class="modal fade" id="resume" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times; </button>
                      <h4 class="modal-title">
                             投递简历
                      </h4>
                    </div>
                    <div class="modal-body">
                      	<form>
						  <div class="form-group">
						    <label class="sr-only" for="exampleInputAmount">投递邮箱</label>
						    <div class="input-group">
						      <div class="input-group-addon"><span class='glyphicon glyphicon-envelope'></span></div>
						      <input type="text" class="form-control" id="exampleInputAmount" placeholder="此处自动填充邮箱">
						    </div>
						    <label class="sr-only" for="exampleInputAmount">职位</label>
						    <div class="input-group">
						      <div class="input-group-addon"><span class='glyphicon glyphicon-pencil'></span></div>
						      <input type="text" class="form-control" id="exampleInputAmount" placeholder="请输入申请职位名称">
						    </div>
						  </div>
						  <p>还没有简历？请先完善<a href="#">我的简历</a></p>
						  <button type="submit" class="btn btn-success" style="margin-left: 145px;">申请职位</button>
						</form>
                    </div>
<!--                     <div class="modal-footer">
                      <button type="button" class="btn btn-primary">保存</button>
                    </div> -->
                  </div>
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
                Copyright 2015 GPX All Rights Reserved&nbsp;&nbsp;&nbsp;&nbsp;安码科技公司&nbsp;&nbsp;&nbsp;&nbsp;版权所有&nbsp;&nbsp;&nbsp;&nbsp;
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
    <?php echo '<script'; ?>
 src="js/company.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>

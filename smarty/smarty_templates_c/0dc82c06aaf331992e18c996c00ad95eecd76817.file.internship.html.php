<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-30 04:26:41
         compiled from ".\smarty\templates\internship.html" */ ?>
<?php /*%%SmartyHeaderCode:851255921a81224217-91680425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dc82c06aaf331992e18c996c00ad95eecd76817' => 
    array (
      0 => '.\\smarty\\templates\\internship.html',
      1 => 1435630902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '851255921a81224217-91680425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'session_username' => 0,
    'name' => 0,
    'city' => 0,
    'internships' => 0,
    'internship' => 0,
    'internships3' => 0,
    'internship3' => 0,
    'previous' => 0,
    'pages' => 0,
    'curPage' => 0,
    'eachp' => 0,
    'pages1' => 0,
    'next' => 0,
    'internships_new' => 0,
    'internship_new' => 0,
    'internships_new2' => 0,
    'internship_new2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55921a81325f52_00818447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55921a81325f52_00818447')) {function content_55921a81325f52_00818447($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<!--     <link rel="icon" href="../../favicon.ico">-->
 	<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.11.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/internship_js.js"><?php echo '</script'; ?>
>
 	<title>实习招聘</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
    <style type="text/css"> 
    .sub-header {
	    padding-bottom: 10px;
	    border-bottom: 1px solid #EEE;
	}
    </style>
  </head>
<body>	
	<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('session_username'=>$_smarty_tpl->tpl_vars['session_username']->value), 0);?>

    <div class="container">
      <div class="row horizon">
        <h1>实习信息查询系统</h1>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-9">
          <div>
            <div class="row">
            	<form class="form-inline" style="margin-top: 10px" action="internship.php" method="get" name="internship_form">
				  <div class="form-group">
				    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
				    <div class="input-group">
				      <div class="input-group-addon" >类型</div>
				      <input type="text" class="form-control" placeholder="输入职位或公司名称" name="name">
				      <div class="input-group-addon">城市</div>
				      <input type="text" class="form-control" placeholder="输入实习的城市" id="city-chosen" list='city'name="city">					
				      <datalist id="city">
				      </datalist>
				    </div>
				
				 <button type="submit" class="btn btn-success" name="search" value="搜索" >搜索</button>
				 <!-- <input type="submit" class="btn btn-success" name="search" value="搜索"></input> -->
				  </div>
				</form>
				<?php if ($_smarty_tpl->tpl_vars['name']->value==null&&$_smarty_tpl->tpl_vars['city']->value==null) {?>
             	<h2 class="sub-header">全部实习信息</h2>
             	<?php } else { ?>
             	<h2 class="sub-header">搜索结果</h2>
             	<?php }?>
	          	<div class="table-responsive">
	            	<table class="table table-striped table-bordered">
	              <thead>
	                <tr>
	                  <th>公司</th>
	                  <th>职位</th>
	                  <th>涉及城市</th>
	                  <th>关键词</th>
	                  <th>发布时间</th>
	                  <th>点击量</th>
	                </tr>
	              </thead>
	              <tbody class="search">
	              	<?php if ($_smarty_tpl->tpl_vars['name']->value==null&&$_smarty_tpl->tpl_vars['city']->value==null) {?>
	              	<?php  $_smarty_tpl->tpl_vars['internship'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['internship']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['internships']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['internship']->key => $_smarty_tpl->tpl_vars['internship']->value) {
$_smarty_tpl->tpl_vars['internship']->_loop = true;
?>
	                <tr>
	                  <td><a href="company.php?company_id=<?php echo $_smarty_tpl->tpl_vars['internship']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['internship']->value['name'];?>
</a></td>
	                  <td><?php echo $_smarty_tpl->tpl_vars['internship']->value['position'];?>
</td>
	                  <td><?php echo $_smarty_tpl->tpl_vars['internship']->value['city'];?>
</td>
	                  <td><?php echo $_smarty_tpl->tpl_vars['internship']->value['key_word'];?>
</td>
	                  <td><?php echo $_smarty_tpl->tpl_vars['internship']->value['publish_time'];?>
</td>
	                  <td><?php echo $_smarty_tpl->tpl_vars['internship']->value['click_rate'];?>
</td>
	                </tr>
	                <?php } ?> 
	                <?php } else { ?>
	                <?php  $_smarty_tpl->tpl_vars['internship3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['internship3']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['internships3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['internship3']->key => $_smarty_tpl->tpl_vars['internship3']->value) {
$_smarty_tpl->tpl_vars['internship3']->_loop = true;
?>
	                <tr>
	                  <td><a href="company.php?company_id=<?php echo $_smarty_tpl->tpl_vars['internship3']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['internship3']->value['name'];?>
</a></td>
	                  <td><?php echo $_smarty_tpl->tpl_vars['internship3']->value['position'];?>
</td>
	                  <td><?php echo $_smarty_tpl->tpl_vars['internship3']->value['city'];?>
</td>
	                  <td><?php echo $_smarty_tpl->tpl_vars['internship3']->value['key_word'];?>
</td>
	                  <td><?php echo $_smarty_tpl->tpl_vars['internship3']->value['publish_time'];?>
</td>
	                  <td><?php echo $_smarty_tpl->tpl_vars['internship3']->value['click_rate'];?>
</td>
	                </tr>
	                <?php } ?> 
	                <?php }?>
	            
	              </tbody>
	            	</table>
	          	</div>
            </div>
            <div class="row center">
            	<nav>
				  <ul class="pagination">
				    <li>
				      <a href="internship.php?p=<?php echo $_smarty_tpl->tpl_vars['previous']->value;?>
" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    <?php if ($_smarty_tpl->tpl_vars['name']->value==null&&$_smarty_tpl->tpl_vars['city']->value==null) {?>
				    <?php  $_smarty_tpl->tpl_vars['eachp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['eachp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['eachp']->key => $_smarty_tpl->tpl_vars['eachp']->value) {
$_smarty_tpl->tpl_vars['eachp']->_loop = true;
?>
				    <li <?php if ($_smarty_tpl->tpl_vars['curPage']->value==$_smarty_tpl->tpl_vars['eachp']->value) {?>class="active"<?php }?>><a href="internship.php?p=<?php echo $_smarty_tpl->tpl_vars['eachp']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['eachp']->value;?>
</a></li>
				    <?php } ?>
				    <?php } else { ?>
				    <?php  $_smarty_tpl->tpl_vars['eachp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['eachp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['eachp']->key => $_smarty_tpl->tpl_vars['eachp']->value) {
$_smarty_tpl->tpl_vars['eachp']->_loop = true;
?>
				    <li <?php if ($_smarty_tpl->tpl_vars['curPage']->value==$_smarty_tpl->tpl_vars['eachp']->value) {?>class="active"<?php }?>><a href="internship.php?name=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
&city=<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
&search=搜索&p=<?php echo $_smarty_tpl->tpl_vars['eachp']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['eachp']->value;?>
</a></li>
				    <?php } ?>
				    <?php }?>	
				    <li>
				    <a href="internship.php?p=<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
" aria-label="Next">
				       <span aria-hidden="true">&raquo;</span>
				    </a>
				   </li>
				   
				  </ul>
				</nav>
            </div>
          </div>
        </div>


       <!--  右侧推送 -->
        <div class="col-xs-6 col-sm-3 pull-right" style="padding: 10px; margin-top: -10px;">
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
    <?php echo '<script'; ?>
 src="js/city.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }} ?>

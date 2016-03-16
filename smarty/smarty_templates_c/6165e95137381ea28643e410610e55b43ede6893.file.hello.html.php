<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-30 04:42:22
         compiled from ".\smarty\templates\hello.html" */ ?>
<?php /*%%SmartyHeaderCode:1362455921df930db38-61181874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6165e95137381ea28643e410610e55b43ede6893' => 
    array (
      0 => '.\\smarty\\templates\\hello.html',
      1 => 1435639327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1362455921df930db38-61181874',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55921df935bd50_31254735',
  'variables' => 
  array (
    'session_username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55921df935bd50_31254735')) {function content_55921df935bd50_31254735($_smarty_tpl) {?><html>
<head></head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('session_username'=>$_smarty_tpl->tpl_vars['session_username']->value), 0);?>

<h1>hello,<?php echo $_smarty_tpl->tpl_vars['session_username']->value;?>
</h1>
</body>
</html><?php }} ?>

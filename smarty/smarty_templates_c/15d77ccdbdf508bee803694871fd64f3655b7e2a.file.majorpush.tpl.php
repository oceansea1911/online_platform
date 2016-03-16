<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-30 05:00:15
         compiled from ".\smarty\templates\majorpush.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107835592225f2386c9-74453460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15d77ccdbdf508bee803694871fd64f3655b7e2a' => 
    array (
      0 => '.\\smarty\\templates\\majorpush.tpl',
      1 => 1435630040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107835592225f2386c9-74453460',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'courses_new_list' => 0,
    'courses_new' => 0,
    'internships_new_list' => 0,
    'internships_new' => 0,
    'interships_new' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5592225f25f7c6_20586900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5592225f25f7c6_20586900')) {function content_5592225f25f7c6_20586900($_smarty_tpl) {?> <div class="col-xs-6 col-sm-3 pull-right" style="padding: 10px; margin-top: -10px;">
            <dl>
              <dt>最新课程</dt>
             <?php  $_smarty_tpl->tpl_vars['courses_new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['courses_new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['courses_new_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['courses_new']->key => $_smarty_tpl->tpl_vars['courses_new']->value) {
$_smarty_tpl->tpl_vars['courses_new']->_loop = true;
?>
              <dd><?php echo $_smarty_tpl->tpl_vars['courses_new']->value['name'];?>
</dd>
             <!--  <dd>$courses_new['name']}</dd>
              <dd><?php echo $_smarty_tpl->tpl_vars['courses_new']->value['2'];?>
</dd>
              <dd><?php echo $_smarty_tpl->tpl_vars['courses_new']->value['3'];?>
</dd>
              <dd>javascript高级程序设计</dd>
              <dd>HTML5秘籍</dd> -->
              <?php } ?> 
            </dl>
            <dl>
              <dt>最新实习</dt>
            <?php  $_smarty_tpl->tpl_vars['internships_new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['internships_new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['internships_new_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['internships_new']->key => $_smarty_tpl->tpl_vars['internships_new']->value) {
$_smarty_tpl->tpl_vars['internships_new']->_loop = true;
?>
              <dd><?php echo $_smarty_tpl->tpl_vars['internships_new']->value['name'];?>
</dd>
              <!-- <dd><?php echo $_smarty_tpl->tpl_vars['interships_new']->value['1'];?>
</dd>
              <dd><?php echo $_smarty_tpl->tpl_vars['interships_new']->value['2'];?>
</dd>
              <dd><?php echo $_smarty_tpl->tpl_vars['interships_new']->value['3'];?>
</dd>
              <dd>百度前端实习</dd>
              <dd>百度前端实习</dd>
              <dd>百度前端实习</dd> -->
              <?php } ?> 
            </dl>
        </div>
      </div>
    </div>

<?php }} ?>

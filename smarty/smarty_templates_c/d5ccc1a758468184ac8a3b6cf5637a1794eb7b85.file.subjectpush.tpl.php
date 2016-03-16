<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-30 12:12:31
         compiled from ".\smarty\templates\subjectpush.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7601559287af1ec110-89852281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5ccc1a758468184ac8a3b6cf5637a1794eb7b85' => 
    array (
      0 => '.\\smarty\\templates\\subjectpush.tpl',
      1 => 1435630036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7601559287af1ec110-89852281',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'teachers' => 0,
    'courses' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559287af203811_27427178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559287af203811_27427178')) {function content_559287af203811_27427178($_smarty_tpl) {?>  <div class="col-xs-6 col-sm-3 pull-right" style="padding: 10px;margin-top: -10px">
            <dl>
              <dt>授课老师</dt>
              <dd>
                  <a href="#" class="figure"><img src="img/user.png">
                  </a>
                  <a href="#"><?php echo $_smarty_tpl->tpl_vars['teachers']->value['name'];?>
</a>
                  <p> <?php echo $_smarty_tpl->tpl_vars['teachers']->value['position'];?>
</p>
                  <br class="clear">
                  <p class="indent" style="margin-top: 20px;"><?php echo $_smarty_tpl->tpl_vars['teachers']->value['teacher_info'];?>

                    <!-- W3CPlus创始人，目前就职于手淘。对CSS3和Sass等前端脚本语言有深入的认识和丰富的实践经验。CSS3、Sass和Drupal中国布道者，2014年出版《图解CSS3：核心技术与案例实战》。 -->
                  </p>
              </dd>
            </dl>
            <dl>
              <dt>课程须知</dt>
                <dd>
                <p class="indent"><?php echo $_smarty_tpl->tpl_vars['courses']->value['info'];?>
<!-- 对CSS有一定的了解，才可以更好的学习本课程。 --></p>
              </dd>
            </dl>
            <dl>
              <dt>老师告诉你能学到什么？</dt>
               <!--  <dd>Sass是什么？他有什么功能？</dd>
                <dd>Sass需要什么样的环境才能顺利运行</dd> -->
                <dd><?php echo $_smarty_tpl->tpl_vars['courses']->value['teacher_advise'];?>
<!-- Sass语法格式和CSS有什么不一样？
                <dd>Sass要如何编译
                <dd>你要怎么调试Sass -->
                
            </dl>
        </div>
      </div>
    </div>




    <?php }} ?>

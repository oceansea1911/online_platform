<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-30 12:03:05
         compiled from ".\smarty\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:129225592182c21bbf8-21681634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '423e61eafc28661a25492e6da526cac7438f2256' => 
    array (
      0 => '.\\smarty\\templates\\index.html',
      1 => 1435665784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129225592182c21bbf8-21681634',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5592182c27d688_81777758',
  'variables' => 
  array (
    'session_username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5592182c27d688_81777758')) {function content_5592182c27d688_81777758($_smarty_tpl) {?><html>
<!--修改时间2015-06-07-->
<head>
    <meta charset="utf-8">
    <title>线上平台</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">

</head>
<body>
    <!--导航栏-->
    <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('session_username'=>$_smarty_tpl->tpl_vars['session_username']->value), 0);?>

   <!--  <nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="container">
            <div class="collapse navbar-collapse pull-left">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">首页</a></li>
                    <li><a href="#">教学实验</a></li>
                    <li><a href="researchhome.html">科研合作</a></li>
                    <li><a href="internship.php">就业实习</a></li>
                    <li><a href="#">关于我们</a></li>
                </ul>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav pull-right">
                    <li><a href="#">注册</a></li>
                    <li><a href="loginschool.html">登录</a></li>
                </ul>
            </div>
        </div>
    </nav>
 -->


    <!--轮播图-->
    <div id="myCarousel" class="carousel slide"  data-ride="carousel">
        <!-- 轮播（Carousel）指标 -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>   
        <!-- 轮播（Carousel）项目 -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/home_lunbo1.png" alt="First slide">
                <div class="carousel-caption">标题 1</div>
            </div>
            <div class="item">
                <img src="img/home_lunbo2.png" alt="Second slide">
                <div class="carousel-caption">标题 2</div>
            </div>
            <div class="item">
                <img src="img/home_lunbo3.png" alt="Third slide">
                <div class="carousel-caption">标题 3</div>
            </div>
        </div>
        <!-- 轮播（Carousel）导航  -->
        <a class="carousel-control left" style="font-size:50px;line-height:400px;" href="#myCarousel" 
      data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" style="font-size:50px;line-height:400px;" href="#myCarousel" 
      data-slide="next">&rsaquo;</a>
    </div>


    <hr class="featurette-divider">



    <!--所有内容-->
    <div class="contain marketing">
        <!--优势-->
        <div class="row featurette">
            <div class="con">
                <div class="sup1">
                    <img src="img/youshi1.png" alt="优势（学生）">
                    <p class="sup_text">学习生活全面跟踪</p>
                </div>
                <div class="sup2">
                    <img src="img/youshi2.png" alt="优势（教师）">
                    <p class="sup_text">科研疑问便捷交互</p>
                </div>
                <div class="sup3">
                    <img src="img/youshi3.png" alt="优势（企业）">
                    <p class="sup_text">工作信息及时获取</p>
                </div>
            </div>
        </div>




        <hr class="featurette-divider">


        <!--最近课程-->
        <div class="row featurette" style="background-color:#f0f0f0">
            <div class="tit">
                <h1>热门课程</h1>
            </div>
            <div class="con">
                <div class="module_intro">
                    <p>随着科学技术的进步，培养具有创新精神和创新能力的创新型人才是当前国家对高等教育的高层次要求,是适应新世纪人才竞争的环境需要。</p>
                </div>
                <a href="#">
                    <div class="cl col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <img src="img/info_sec.png" alt="信息安全管理">
                        </div>
                        <div class="caption">
                            <p>信息安全管理</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="cl col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <img src="img/code_str.png" alt="代码安全加固">
                        </div>
                        <div class="caption">
                            <p>代码安全加固</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="cl col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <img src="img/linux.png" alt="Linux服务管理基础">
                        </div>
                        <div class="caption">
                            <p>Linux服务管理基础</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="cl col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <img src="img/sec_nan.png" alt="源代码安全分析">
                        </div>
                        <div class="caption">
                            <p>源代码安全分析</p>
                        </div>
                    </div>
                </a>
<!--                 <p class="more_btn">
                    <a class="btn btn-default" href="#" role="button">more »</a>
                </p> -->
            </div>
        </div><!--最近课程-->


        <hr class="featurette-divider">

        
        <!--科研成果-->
        <div class="row featurette">
            <div class="tit">
                <h1>科研成果</h1>
            </div>
            
            <div class="con">
                <div class="module_intro">
                    <p>随着科学技术的进步，培养具有创新精神和创新能力的创新型人才是当前国家对高等教育的高层次要求,是适应新世纪人才竞争的环境需要。</p>
                </div>
                
                <a href="#">
                    <div class="cl col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <img src="img/111.png" alt="PHP">
                        </div>
                        <div class="caption">
                            <p>线上平台项目</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="cl col-xs-6 col-sm-3">                    
                        <div class="thumbnail">
                            <img src="img/222.png" alt="PHP">
                        </div>
                        <div class="caption">
                            <p>线上平台项目</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="cl col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <img src="img/333.png" alt="PHP">
                        </div>
                        <div class="caption">
                            <p>线上平台项目</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="cl col-xs-6 col-sm-3">                   
                        <div class="thumbnail">
                            <img src="img/444.png" alt="PHP">
                        </div>
                        <div class="caption">
                            <p>线上平台项目</p>
                        </div>
                    </div>
                </a>                
<!--                 <p class="more_btn">
                    <a class="btn btn-default" href="#" role="button">more »</a>
                </p> -->
            </div>
        </div><!--科研成果-->


        <hr class="featurette-divider">


        <!--实习就业-->
        <div class="row featurette" style="background-color:#f0f0f0">
            <div class="tit">
                <h1>实习就业</h1>
            </div>
            <div class="con">
                <div class="module_intro">
                    <p>随着科学技术的进步，培养具有创新精神和创新能力的创新型人才是当前国家对高等教育的高层次要求,是适应新世纪人才竞争的环境需要。</p>
                </div>
                
                <a href="#">
                    <div class="cl col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <img src="img/111.png" alt="PHP">
                        </div>
                        <div class="caption">
                            <p>线上平台项目</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="cl col-xs-6 col-sm-3">                    
                        <div class="thumbnail">
                            <img src="img/222.png" alt="PHP">
                        </div>
                        <div class="caption">
                            <p>线上平台项目</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="cl col-xs-6 col-sm-3">
                        <div class="thumbnail">
                            <img src="img/333.png" alt="PHP">
                        </div>
                        <div class="caption">
                            <p>线上平台项目</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="cl col-xs-6 col-sm-3">                   
                        <div class="thumbnail">
                            <img src="img/444.png" alt="PHP">
                        </div>
                        <div class="caption">
                            <p>线上平台项目</p>
                        </div>
                    </div>
                </a>                
               <!--  <p class="more_btn">
                    <a class="btn btn-default" href="#" role="button">more »</a>
                </p> -->
            </div>
        </div><!--实习就业-->


        <hr class="featurette-divider">


        <!--合作单位-->
        <div class="row featurette">
            <div class="tit">
                <h1>合作单位</h1>
            </div>
            <div class="con">
                <a href="http://www.bupt.edu.cn/">
                    <div class="co_cor">
                        <img src="img/beiyou_logo.png" alt="北京邮电大学">
                        <p>北京邮电大学</p>
                    </div>
                </a>
                <a href="http://www.sdnu.edu.cn/">
                    <div class="co_cor">
                        <img src="img/shanshi_logo.png"  alt="山东师范大学">
                        <p>山东师范大学</p>
                    </div>
                </a>
                <a href="http://www.qfnu.edu.cn/">
                    <div class="co_cor">
                        <img src="img/qushi_logo.png" alt="曲阜师范大学">
                        <p>曲阜师范大学</p>
                    </div>
                </a>
                <a href="http://www.njupt.edu.cn/">  
                    <div class="co_cor">
                        <img src="img/nanyou_logo.png" alt="南京邮电大学">
                        <p>南京邮电大学</p>
                    </div>
                </a>
                <a href="http://www.cqupt.edu.cn/cqupt/index.shtml">
                    <div class="co_cor">
                        <img src="img/chongyou_logo.png" alt="重庆邮电大学">
                        <p>重庆邮电大学</p>
                    </div>
                </a>

                <a href="http://www.hngazk.edu.cn/">
                    <div class="co_cor">
                        <img src="img/henanjingcha_logo.png" alt="河南警察学院">
                        <p>河南警察学院</p>
                    </div>
                </a>
            </div>
        </div><!--合作单位-->


        
        <div class="footer">
            <div class="footer-text">
                <p>
                    <span>关于我们|</span>
                    <span>诚征英才|</span>
                    <span>联系我们|</span>
                    <span>服务协议|</span>
                    <span>京ICP备15011063号</span>
                </p>
                <p>
                    Copyright 2015 GPX All Rights Reserved&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">安码科技有限公司</a>&nbsp;&nbsp;&nbsp;&nbsp;版权所有&nbsp;&nbsp;&nbsp;&nbsp;
                </p>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
 src="js/jquery-2.1.4.js"><?php echo '</script'; ?>
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

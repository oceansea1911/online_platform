<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-30 04:53:23
         compiled from ".\smarty\templates\workhome.html" */ ?>
<?php /*%%SmartyHeaderCode:500355921f22ec9bb6-92526501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18db61e74f6d20e0f978c7f3fae92bfe6e0b7fda' => 
    array (
      0 => '.\\smarty\\templates\\workhome.html',
      1 => 1435640001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '500355921f22ec9bb6-92526501',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55921f22f1fac5_34471591',
  'variables' => 
  array (
    'session_username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55921f22f1fac5_34471591')) {function content_55921f22f1fac5_34471591($_smarty_tpl) {?><html>
<head>
	<meta charset="utf-8">
    <title>实习就业</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
    <link href="css/workhome.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="js/jquery-2.1.4.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/common.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/workhome.js"><?php echo '</script'; ?>
>
</head>
<body>
	<!--导航栏-->
    <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('session_username'=>$_smarty_tpl->tpl_vars['session_username']->value), 0);?>


    <!--轮播图-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- 轮播（Carousel）指标 -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- 轮播（Carousel）项目 -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/research_lunbo1.png" alt="First slide">
                <div class="carousel-caption">标题 1</div>
            </div>
            <div class="item">
                <img src="img/research_lunbo2.png" alt="Second slide">
                <div class="carousel-caption">标题 2</div>
            </div>
            <div class="item">
                <img src="img/research_lunbo3.png" alt="Third slide">
                <div class="carousel-caption">标题 3</div>
            </div>
        </div>
        <!-- 轮播（Carousel）导航 -->
        <a class="carousel-control left" style="font-size:50px;line-height:400px;" href="#myCarousel" 
      data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" style="font-size:50px;line-height:400px;" href="#myCarousel" 
      data-slide="next">&rsaquo;</a>
    </div> 


    <hr class="featurette-divider">


	<!--所有内容-->
    <div class="container marketing">


    	<div class="con">
    		<h2>实习</h2>
    		<div class="hor">
                <div class="rowlist1">
                    <!--小标题-->
                    <div class="tit01">
                        <div class="wz">&nbsp&nbsp&nbsp&nbsp实习发布</div>
                        <div class="more">
                            <a href="#">更多»</a>
                        </div>
                    </div>

                    <div style="clear:both"></div>

                    <div class="row1">
                        <div class="m_info">
                            <div class="npic">
                                <a href="#">
                                    <img src="img/cor.png">
                                </a>
                            </div>
                            <div class="ntt">
                                <b>
                                    <a href="#">两节科学课深度结合</a>
                                </b>
                                <br>
                                "从应以学生的生活为基点，让学生从生活中发现问题，创新实践，策划更有效的教师研修活动..."
                                <a href="#">[详细]</a>
                            </div>
                        </div>


                        <div class="clear:both"></div>

                        <div class="info_detail">
                            <ul class="news">
                                <li style=" border-top: 1px solid #CCCCCC;margin-bottom:10px"></li>
                                <li>
                                    <a href="#">
                                        <span class="cor_info">华为技术有限公司北京研究所</span>
                                    </a>
                                    <span class="cor_time">06-06</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="cor_info">华为技术有限公司北京研究所与信息学院开展科研合作座谈qqqqqqqqqqqqq</span>
                                    </a>
                                    <span class="cor_time">06-06</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="cor_info">华为技术有限公司北京研究所与信息学院开展科研合作座谈</span>
                                    </a>
                                    <span class="cor_time">06-06</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="cor_info">华为技术有限公司北京研究所与信息学院开展科研合作座谈</span>
                                    </a>
                                    <span class="cor_time">06-06</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="cor_info">华为技术有限公司北京研究所与信息学院开展科研合作座谈</span>
                                    </a>
                                    <span class="cor_time">06-06</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
    		</div>
    		<div class="hor">
                <div class="rowlist1">
                    <!--小标题-->
                    <div class="tit01">
                        <div class="wz">&nbsp&nbsp&nbsp&nbsp实习信息</div>
                        <div class="more">
                            <a href="#">更多»</a>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="row1">




                        <div class="demo">
                            <ul>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第1行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第2行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第3行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第4行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第5行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第6行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第7行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第8行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第9行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第10行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第11行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第12行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第13行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第14行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第15行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第16行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第17行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第18行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第19行</a></li>
                            </ul>

                        </div>


                          




                    </div>
                </div>
    		</div>
    	</div>


    	<hr class="featurette-divider">


    	<div class="con">
    		<h2>就业</h2>
    		<div class="hor">
                <div class="rowlist1">
                    <!--小标题-->
                    <div class="tit01">
                        <div class="wz">&nbsp;&nbsp;&nbsp;&nbsp;就业发布</div>
                        <div class="more">
                            <a href="#">更多»</a>
                        </div>
                    </div>

                    <div style="clear:both"></div>

                    <div class="row1">
                        <div class="m_info">
                            <div class="npic">
                                <a href="#">
                                    <img src="img/cor.png">
                                </a>
                            </div>
                            <div class="ntt">
                                <b>
                                    <a href="#">两节科学课深度结合</a>
                                </b>
                                <br>
                                "从应以学生的生活为基点，让学生从生活中发现问题，创新实践，策划更有效的教师研修活动..."
                                <a href="#">[详细]</a>
                            </div>
                        </div>


                        <div class="clear:both"></div>

                        <div class="info_detail">
                            <ul class="news">
                                <li style=" border-top: 1px solid #CCCCCC;margin-bottom:10px"></li>
                                <li>
                                    <a href="#">
                                        <span class="cor_info">华为技术有限公司北京研究所</span>
                                    </a>
                                    <span class="cor_time">06-06</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="cor_info">华为技术有限公司北京研究所与信息学院开展科研合作座谈qqqqqqqqqqqqq</span>
                                    </a>
                                    <span class="cor_time">06-06</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="cor_info">华为技术有限公司北京研究所与信息学院开展科研合作座谈</span>
                                    </a>
                                    <span class="cor_time">06-06</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="cor_info">华为技术有限公司北京研究所与信息学院开展科研合作座谈</span>
                                    </a>
                                    <span class="cor_time">06-06</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="cor_info">华为技术有限公司北京研究所与信息学院开展科研合作座谈</span>
                                    </a>
                                    <span class="cor_time">06-06</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
    		</div>
    		<div class="hor">
                <div class="rowlist1">
                    <!--小标题-->
                    <div class="tit01">
                        <div class="wz">&nbsp&nbsp&nbsp&nbsp就业信息</div>
                        <div class="more">
                            <a href="#">更多»</a>
                        </div>
                    </div><!--小标题-->

                    <div style="clear:both"></div>

                    <div class="row1">
                        <div id="scrollDiv" class="pub_news">
                            <ul>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第1行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第2行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第3行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第4行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第5行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第6行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第7行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第8行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第9行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第10行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第11行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第12行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第13行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第14行</a></li>
                                <li><a href="#">这是公告标题的第1行这是公告标题的第15行</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
    		</div>
    	</div>


		<div class="con">
	    	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="co_fa">
	    		<tbody>
	    			<tr>
	    				<td class="title_3 tb t14">&nbsp;&nbsp;&nbsp;合作单位</td>
	    				<td class="title_4">&nbsp;</td>
	    			</tr>
	    		</tbody>
	    	</table>
    	</div>

    	<div class="row featurette">
            <div class="con">
                <a href="http://www.bupt.edu.cn/">
                    <div class="hor">
                        <img src="img/beiyou_logo.png">
                        <h5>北京邮电大学</h5>
                    </div>
                </a>
                <a href="http://www.sdnu.edu.cn/">
                    <div class="hor">
                        <img src="img/shanshi_logo.png">
                        <h5>山东师范大学</h5>
                    </div>
                </a>
                <a href="http://www.qfnu.edu.cn/">
                    <div class="hor">
                        <img src="img/qushi_logo.png">
                        <h5>曲阜师范大学</h5>
                    </div>
                </a>
                <a href="http://www.njupt.edu.cn/">  
                    <div class="hor">
                        <img src="img/nanyou_logo.png">
                        <h5>南京邮电大学</h5>
                    </div>
                </a>
                <a href="http://www.cqupt.edu.cn/cqupt/index.shtml">
                    <div class="hor">
                        <img src="img/chongyou_logo.png">
                        <h5>重庆邮电大学</h5>
                    </div>
                </a>

                <a href="http://www.hngazk.edu.cn/">
                    <div class="hor">
                        <img src="img/henanjingcha_logo.png">
                        <h5>河南警察学院</h5>
                    </div>
                </a>
            </div>
        </div>


    	<hr class="featurette-divider">


        <div class="footer">
            <div class="footer-text">
                <p>
                    <span><a href="#">关于我们</a>|</span>
                    <span><a href="#">诚征英才</a>&nbsp;|&nbsp;</span>
                    <span><a href="#">联系我们</a>&nbsp;|&nbsp;</span>
                    <span><a href="#">服务协议</a>&nbsp;|&nbsp;</span>
                    <span>京ICP备15011063号</span>
                </p>
                <p>
                    Copyright 2015 GPX All Rights Reserved&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">安码科技有限公司</a>&nbsp;&nbsp;&nbsp;&nbsp;版权所有&nbsp;&nbsp;&nbsp;&nbsp;
                </p>
            </div>
        </div>
    </div>

</body>
</html>


<?php }} ?>

<?php
	include('Smarty.class.php');
	$smarty=new Smarty;	//实例化
    $smarty->template_dir="./smarty/templates";	//指定模版存放目录
    $smarty->compile_dir="./smarty/smarty_templates_c";	//指定编译文件存放目录
    $smarty->config_dir="./smarty/configs";	//指定配置文件存放目录
    $smarty->cache_dir="./smarty/smarty_cache";	//指定缓存存放目录
    $smarty->caching=false;	//关闭缓存（设置为true表示启用缓存）
    $smarty->left_delimiter="{";	//指定左标签
    $smarty->right_delimiter="}";	//指定右标签
?>
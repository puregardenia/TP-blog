<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/index.js"></script>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
<link rel="stylesheet" href="__PUBLIC__/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
	<div id="top">
		<div class="menu">
			<a href="#">选择按钮</a>
			<a href="#">选择按钮</a>
			<a href="#">选择按钮</a>
			<a href="#">选择按钮</a>
			<a href="#">选择按钮</a>
		</div>
		<div class="exit">
			<a href="<?php echo U('Admin/Index/logout');?>" target="_self">退出</a>
			<a href="http://www.ThinkPHP.cn" target="_blank">ThinkPHP官网</a>
		</div>
	</div>
	<div id="left">
		<dl>
			<dt>新闻管理</dt>
			<dd><a href="<?php echo U('Admin/MsgManage/index');?>">查看所有新闻</a></dd>
			<dd><a href="<?php echo U('Admin/MsgManage/add');?>">新建新闻</a></dd>
		</dl>
	</div>
	<div id="right">
		<iframe name="iframe" src=""></iframe>
	</div>
</body>
</html>
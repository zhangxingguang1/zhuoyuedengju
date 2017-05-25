<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理中心</title>
	<link rel="stylesheet" href="/zhuoyue/Public/admin/css/admin.css">
	<link rel="stylesheet" href="/zhuoyue/Public/admin/css/font-awesome.css">
	<script src="/zhuoyue/Public/admin/js/jquery.min.js"></script>
	<script src="/zhuoyue/Public/admin/js/nav.js"></script>
</head>
<body>
	<div class="admin_top clear">
		<div class="admin_top_left">
			卓越灯具后台管理系统
		</div>
		<div class="admin_top_right">
			<i class="fa fa-user"></i>您好,admin
			<a href="#"><i class="fa fa-power-off"></i>退出</a>
		</div>
	</div>
	<div class="bottom">
		<div class="bottom_left">
			<ul>
				<li>
					<a href="<?php echo U('Admin/Banner/banner');?>" target="right">
						<i class="fa fa-image"></i> 首页轮播图
						<!-- <i class="fa fa-sort-desc"></i> -->
					</a>
				</li>
				<li>
					<a href="<?php echo U('Admin/Manager/manager');?>" target="right">
						<i class="fa fa-user"></i> 管理员管理
						<!-- <i class="fa fa-sort-desc"></i> -->
					</a>
				</li>
				<li class="bli">
					<a href="##">
						<i class="fa fa-shopping-bag"></i> 产品管理
						<i class="fa fa-chevron-down"></i>
					</a>
					<ul class="hide bottom_left_child">
						<li><a href="<?php echo U('Admin/Product/product');?>" target="right">产品管理</a></li>
						<li><a href="<?php echo U('Admin/classify/classify');?>" target="right">分类管理</a></li>
					</ul>
				</li>
				<li class="bli">
					<a href="##">
						<i class="fa fa-shopping-bag"></i> 新闻管理
						<i class="fa fa-chevron-down"></i>
					</a>
					<ul class="hide bottom_left_child">
						<li><a href="<?php echo U('Admin/News/news');?>" target="right">新闻管理</a></li>
						<li><a href="<?php echo U('Admin/News/news');?>" target="right">分类管理</a></li>
					</ul>
				</li>				
			</ul>
		</div>
		<div class="bottom_right">
			<ul class="bread">
				<li>首页></li>
				<li>首页轮播图</li>
			</ul>
			<div>
	  			<iframe scrolling="no" frameborder="0" src="<?php echo U('Admin/Banner/banner');?>" name="right" width="98%" height="500px"></iframe>
			</div>
		</div>
	</div>
</body>
</html>
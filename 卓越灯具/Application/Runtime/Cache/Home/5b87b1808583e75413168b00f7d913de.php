<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
	<head>
	  	<meta charset="utf-8">
<link rel="stylesheet" href="/zhuoyue/Public/home/css/style.css">
<link rel="stylesheet" href="/zhuoyue/Public/home/css/font-awesome.css">
<link rel="stylesheet" href="/zhuoyue/Public/home/css/conceal.css">
<link rel="stylesheet" href="/zhuoyue/Public/home/css/intro.css">
<link rel="stylesheet" href="/zhuoyue/Public/home/css/message.css">
<link rel="stylesheet" href="/zhuoyue/Public/home/css/news.css">
<link rel="stylesheet" href="/zhuoyue/Public/home/css/detail.css">
<link rel="stylesheet" href="/zhuoyue/Public/home/css/product.css">
<link rel="stylesheet" href="/zhuoyue/Public/home/css/show.css">
<script src="/zhuoyue/Public/home/js/jquery.min.js"></script>
<script src="/zhuoyue/Public/home/js/wrap.js"></script>
<script src="/zhuoyue/Public/home/js/slide.js"></script>
	  	<title>卓越灯具</title>
  	</head>
  	<body>
  		<!-- 头部 -->
<div class="header clears">
	<div class="header-left">
		<img src="/zhuoyue/Public/home/images/logo.png" />
	</div>
	<div class="header-right">
		<img src="/zhuoyue/Public/home/images/phone.png" />
		<p>全国服务热线</p>
		<span>17796911177</span>
	</div>
</div>
<!-- 导航栏 -->
<div class="top">
	<div class="nav">
		<ul class="bar"> 
		    <li><a href="<?php echo U('Home/Index/index');?>">首页</a></li> 
		    <li><a href="<?php echo U('Home/Intro/intro');?>">走进卓越</a>
		    	<ul class="sub">
					<li><a href="<?php echo U('Home/Intro/intro');?>">公司简介</a></li>
					<li><a href="<?php echo U('Home/Intro/intro');?>">宣传视频</a></li>
					<li><a href="<?php echo U('Home/Intro/intro');?>">公司荣誉</a></li>
		    	</ul>
		    </li>
		    <li><a href="<?php echo U('Home/Product/product');?>">产品展示</a>
		    	<ul class="sub">
					<li><a href="<?php echo U('Home/Product/product');?>">高中杆灯系列</a></li>
					<li><a href="<?php echo U('Home/Product/product');?>">道路灯系列</a></li>
					<li><a href="<?php echo U('Home/Product/product');?>">华灯系列</a></li>
					<li><a href="<?php echo U('Home/Product/product');?>">景观灯系列</a></li>
					<li><a href="<?php echo U('Home/Product/product');?>">庭院灯系列</a></li>
					<li><a href="<?php echo U('Home/Product/product');?>">太阳能灯系列</a></li>
		    	</ul>
		    </li>
		    <li><a href="<?php echo U('Home/News/news');?>">新闻中心</a> 
		    	<ul class="sub">
					<li><a href="<?php echo U('Home/News/news');?>">公司新闻</a></li>
					<li><a href="<?php echo U('Home/News/news');?>">行业动态</a></li>
					<li><a href="<?php echo U('Home/News/news');?>">常见问题</a></li>
		    	</ul>
		    </li>
		    <li><a href="<?php echo U('Home/Example/example');?>">成功案例</a></li>
		    <li><a href="<?php echo U('Home/Message/message');?>">在线留言</a></li> 
		    <li><a href="<?php echo U('Home/Contact/contact');?>">联系我们</a></li>
		</ul>
	</div>
	<div class="search">
		<input type="text" name="search" placeholder="搜索关键词..."><a href="#"><i class="fa fa-search"></i></a>
	</div>
</div>
<!--右侧悬浮菜单-->
<div class="slide">
	<ul class="icon">
		<a href="javascript:scrollTo(0,0);"><li class="up" title="顶部"></li></a>
		<li class="qq"></li>
		<li class="tel"></li>
		<li class="wx"></li>
		<a href="javascript:scrollTo(9999,9999);"><li class="down" title="底部"></li></a>
	</ul>
	<ul class="info">
		<li class="qq">
			<p>在线沟通，请点我<a href="http://wpa.qq.com/msgrd?v=3&uin=123456789&site=qq&menu=yes" target="_blank">在线咨询</a></p>
		</li>
		<li class="tel">
			<p>咨询热线：<br>177-9691-1177<br>客服qq：<br>123456789</p>
		</li>
		<li class="wx">
			<div class="img"><img src="/zhuoyue/Public/home/images/1441956938.png" /></div>
		</li>
	</ul>
</div>
<div id="btn" class="index_cy"></div>
  			  	
	<!--content-->
	<div class="content clears">
		<!--面包屑-->
  		<div class="bread">
			<ol>
			    <li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
			    <li class="active">产品中心</li>
			</ol>
		</div>
			<h3 class="prod">产品分类</h3>
	  		<div class="classify">
	  			<ul>
	  				<li><a href="#">高杆灯</a></li>
	  				<li><a href="#">中杆灯</a></li>
	  				<li><a href="#">道路灯</a></li>
	  				<li><a href="#">庭院灯</a></li>
	  				<li><a href="#">室内灯</a></li>
	  			</ul>
	  		</div>
	  	<div class="classi">
	  		<div class="select">
	  			产品筛选:
	  		</div>
	  		<div class="classify1 clears">
	  			<p>光源种类：</p>
	  			<ul>
	  				<li><a href="#">LED灯</a></li>
	  				<li><a href="#">太阳能灯</a></li>
	  				<li><a href="#">电灯</a></li>
	  			</ul>
	  		</div>
	  		<div class="classify1">
	  			<p>用途分类:</p>
	  			<ul>
	  				<li><a href="#">工矿灯</a></li>
	  				<li><a href="#">投光灯</a></li>
	  				<li><a href="#">地插灯</a></li>
	  				<li><a href="#">监控灯</a></li>
	  				<li><a href="#">信号灯</a></li>
	  			</ul>
	  		</div>
	  	</div>
		<div class="show clears">
			<div class="show1">
				<a href="<?php echo U('Home/Show/show');?>"><img src="/zhuoyue/Public/home/images/05.jpg" alt=""></a>
				<p>关于产品1的一些介绍</p>
			</div>
			<div class="show2">
				<img src="/zhuoyue/Public/home/images/05.jpg" alt="">
				<p>关于产品1的一些介绍</p>
			</div>
			<div class="show3">
				<img src="/zhuoyue/Public/home/images/05.jpg" alt="">
				<p>关于产品1的一些介绍</p>
			</div>
			<div class="show4">
				<img src="/zhuoyue/Public/home/images/05.jpg" alt="">
				<p>关于产品1的一些介绍</p>
			</div>
			<div class="show1">
				<img src="/zhuoyue/Public/home/images/05.jpg" alt="">
				<p>关于产品1的一些介绍</p>
			</div>
			<div class="show2">
				<img src="/zhuoyue/Public/home/images/05.jpg" alt="">
				<p>关于产品1的一些介绍</p>
			</div>
			<div class="show3">
				<img src="/zhuoyue/Public/home/images/05.jpg" alt="">
				<p>关于产品1的一些介绍</p>
			</div>
			<div class="show4">
				<img src="/zhuoyue/Public/home/images/05.jpg" alt="">
				<p>关于产品1的一些介绍</p>
			</div>
			<div class="show3">
				<img src="/zhuoyue/Public/home/images/05.jpg" alt="">
				<p>关于产品1的一些介绍</p>
			</div>
			<div class="show4">
				<img src="/zhuoyue/Public/home/images/05.jpg" alt="">
				<p>关于产品1的一些介绍</p>
			</div>
		</div>
		<div class="page">上一页 < < 1 2 3 4 5 6 7 8 > > 下一页</div>
	</div>

		<div class="footer">
	<div class="footer-left">
		<div class="btn">
			<a href="<?php echo U('Home/Sitemap/sitemap');?>"><i class="fa fa-map-signs"></i>&nbsp&nbsp网站地图</a>
		</div>
		<ul>
			<li style="border:0px"><a href="<?php echo U('Home/Index/index');?>">网站首页</a></li>
			<li><a href="<?php echo U('Home/Secret/secret');?>">隐私声明</a></li>
			<li><a href="<?php echo U('Home/Conceal/conceal');?>">法律条款</a></li>
			<li><a href="<?php echo U('Home/Index/index');?>">友情链接</a></li>
		</ul>
	</div>
	<div class="wechat">
		<img src="/zhuoyue/Public/home/images/wechat.jpg" />
		<h5>官方微信</h5>
	</div>
	<div class="wechat">
		<img src="/zhuoyue/Public/home/images/wechat.jpg" />
		<h5>官方微信</h5>
	</div>
	<div class="contact">
		<a><i class="fa fa-phone-square"></i>&nbsp&nbsp17796911177</a>
		<a href="http://wpa.qq.com/msgrd?v=3&uin=123456789&site=qq&menu=yes"><i class="fa fa-user"></i>&nbsp&nbsp在线客服</a>
		<a><i class="fa fa-envelope"></i>&nbsp&nbsp客服邮箱<p>kefu@example.com</p></a>
	</div>
	<div class="clears"></div>
	<p class="p">  2017 by 新乐市天光灯具有限公司&nbsp&nbsp&nbsp&nbsp经营许可证编号：冀000000</p>
</div>
  	</body>
</html>
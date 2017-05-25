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
  		
	<!--轮播图-->
	<div class="wrap" id="wrap">
		<ul id="pic">
			<li><img src="/zhuoyue/Public/home/images/1.jpg" /></li>
			<li><img src="/zhuoyue/Public/home/images/2.jpg" /></li>
			<li><img src="/zhuoyue/Public/home/images/3.jpg" /></li>
			<li><img src="/zhuoyue/Public/home/images/4.jpg" /></li>
		</ul>
		<ol id="list">
			<li class="on" value="1"></li>
			<li value="2"></li>
			<li value="3"></li>
			<li value="4"></li>
		</ol>			
	</div>
	<!--content-->
	<div class="content clears">
		<!--面包屑-->
  		<div class="bread">
			<ol>
			    <li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
			    <li class="active">走进卓越</li>
			</ol>
		</div>
		<div class="intro_left">
			<h4>走进卓越</h4>
			<ul id="tab">
				<li class="selected">公司简介</li>
				<li>荣誉资质</li>
				<li>办公环境</li>
			</ul>
		</div>
	  	<div id="tab1" class="intro_right">
	  		<h4>公司简介</h4>
			<video controls="controls">
				<source src="/zhuoyue/Public/home/images/movie.ogg" type="video/ogg">
				<source src="/zhuoyue/Public/home/images/movie.mp4" type="video/mp4">
				您的浏览器版本过低无法播放视频
			</video>
			<p>新乐市天光灯具有限公司是从事灯具产品开发、研制、生产的企业，拥有一批具有丰富工作经验的工程技术人员和管理人才，经过多年的不懈努力，企业已形成室外道路照片灯具、特种灯具等几大类，数十种系列化产品。产品销往全国二十多个省市，在我国多项大型工程中大量使用。公司具备完善的制造能力和新产品的开发能力，严格的管理制度，先进的生产工艺和全面的质量保证体系，为产提供充分的保障。 公司以严谨，创新，诚信，进取作为自己的企业精神，坚持以市场要求为向导，以客户满意为宗旨，坚持质量第一，信誉第一。公司将以一流的产品质量，一流的销售服务为各界用户提供放心的产品，满意的服务.</p>
	  	</div>
	  	<div id="tab2" class="intro_right hide">
	  		<h4>荣誉资质</h4>
	  		<img src="/zhuoyue/Public/home/images/3.jpg" />
					<h5>厂房外景</h5>
					<p>LED照明凭借其节能和寿命长的巨大潜力优势，现已成为大多数照明应用的首选。而且，正变得更加智能和以人为中心。有些公司通过将无处不在的照明基础设施用于其他服务，甚至已经超越了以人为中心的照明。例如，可以部署传感器来为物联网收集信息。这让照明应用在智能家居、智能建筑和未来的智能城市中起到重要的作用。</p>
	  		<div class="honour">
				<img src="/zhuoyue/Public/home/images/01.jpg"/>
				<img src="/zhuoyue/Public/home/images/02.jpg"/>
				<img src="/zhuoyue/Public/home/images/03.jpg"/>
				<img src="/zhuoyue/Public/home/images/04.jpg"/>
		  	</div>
		  	<h5>厂房外景</h5>
				<p>LED照明凭借其节能和寿命长的巨大潜力优势，现已成为大多数照明应用的首选。而且，正变得更加智能和以人为中心。有些公司通过将无处不在的照明基础设施用于其他服务，甚至已经超越了以人为中心的照明。例如，可以部署传感器来为物联网收集信息。这让照明应用在智能家居、智能建筑和未来的智能城市中起到重要的作用。</p>
		</div>
		<div class="intro_right hide" id="tab3">
				<h4>办公环境</h4>
				<img src="/zhuoyue/Public/home/images/1.jpg" />
				<h5>厂房外景</h5>
				<p>LED照明凭借其节能和寿命长的巨大潜力优势，现已成为大多数照明应用的首选。而且，正变得更加智能和以人为中心。有些公司通过将无处不在的照明基础设施用于其他服务，甚至已经超越了以人为中心的照明。例如，可以部署传感器来为物联网收集信息。这让照明应用在智能家居、智能建筑和未来的智能城市中起到重要的作用。</p>
				<div class="office clears">
					<img src="/zhuoyue/Public/home/images/2.jpg">
					<img src="/zhuoyue/Public/home/images/3.jpg">
				</div>
				<div class="office1 clears">
					<img src="/zhuoyue/Public/home/images/1.jpg">
					<img src="/zhuoyue/Public/home/images/3.jpg">
					<img src="/zhuoyue/Public/home/images/4.jpg">
				</div>
				<h5>办公环境</h5>
				<p>LED照明凭借其节能和寿命长的巨大潜力优势，现已成为大多数照明应用的首选。而且，正变得更加智能和以人为中心。有些公司通过将无处不在的照明基础设施用于其他服务，甚至已经超越了以人为中心的照明。例如，可以部署传感器来为物联网收集信息。这让照明应用在智能家居、智能建筑和未来的智能城市中起到重要的作用。</p>
				<div class="honor">
					<img src="/zhuoyue/Public/home/images/01.jpg">
					<img src="/zhuoyue/Public/home/images/02.jpg">
					<img src="/zhuoyue/Public/home/images/03.jpg">
				</div>
				<h5>生产一角</h5>
				<p>LED照明凭借其节能和寿命长的巨大潜力优势，现已成为大多数照明应用的首选。而且，正变得更加智能和以人为中心。有些公司通过将无处不在的照明基础设施用于其他服务，甚至已经超越了以人为中心的照明。例如，可以部署传感器来为物联网收集信息。这让照明应用在智能家居、智能建筑和未来的智能城市中起到重要的作用。</p>
		</div>
		<script>
			var otab=document.getElementById("tab");
			var oli=otab.getElementsByTagName("li");
			var tabs=["tab1","tab2","tab3"]
			for(var i=0;i<oli.length;i++){
				oli[i].index=i;
				oli[i].onclick=function(){
					for(var j=0;j<oli.length;j++){
						document.getElementById(tabs[j]).className="hide";
						oli[j].className="";
					}
					document.getElementById(tabs[this.index]).className="intro_right";
					oli[this.index].className="selected";
				}
			}
		</script>
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
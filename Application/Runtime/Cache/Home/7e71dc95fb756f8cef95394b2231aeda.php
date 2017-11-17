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
<script src="/zhuoyue/Public/home/js/filter.js"></script>
<script src="/zhuoyue/Public/home/js/page.js"></script>
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
		    <li><a href="<?php echo U('Home/Product/product');?>/1">产品展示</a>
		    	<ul class="sub">
					<li><a href="<?php echo U('Home/Product/product');?>/1">高杆灯系列</a></li>
					<li><a href="<?php echo U('Home/Product/product');?>/2">道路灯系列</a></li>
					<li><a href="<?php echo U('Home/Product/product');?>/3">华灯系列</a></li>
					<li><a href="<?php echo U('Home/Product/product');?>/4">景观灯系列</a></li>
					<li><a href="<?php echo U('Home/Product/product');?>/5">庭院灯系列</a></li>
					<li><a href="<?php echo U('Home/Product/product');?>/6">太阳能灯系列</a></li>
		    	</ul>
		    </li>
		    <li><a href="<?php echo U('Home/News/news');?>">新闻中心</a> 
		    	<ul class="sub">
					<li><a id="1" href="<?php echo U('Home/News/news');?>/1">公司新闻</a></li>
					<li><a id="2" href="<?php echo U('Home/News/news');?>/2">行业动态</a></li>
					<li><a id="3" href="<?php echo U('Home/News/news');?>/3">常见问题</a></li>
		    	</ul>
		    </li>
		    <li><a href="<?php echo U('Home/Example/example');?>">成功案例</a></li>
		    <li><a href="<?php echo U('Home/Message/message');?>">在线留言</a></li> 
		    <li><a href="<?php echo U('Home/Contact/contact');?>">联系我们</a></li>
		</ul>
	</div>
	<div class="search">
		<form method="post" action="<?php echo U('Home/Search/search');?>">
			<input type="text" name="search" placeholder="搜索关键词..."><button class="sea" type="submit"><i class="fa fa-search"></i></button>
		</form>
	</div>
</div>
<!--右侧悬浮菜单-->
<div class="chat" id="close">
	<!-- 信息展示框 -->
	<div class="chatshow1">
	<div class="chatshow" id="chatshow">
	</div>
	</div>
	<!--信息输入框-->
	 <div class="neir">
    	<textarea type="text" class="texts"></textarea>
    	<input type="submit" class="sends" value="发 送" />
	</div>
</div>
<div id="btn" class="index_cy" title="在线客服"></div>
<div class="index_by" onclick="javascript:scrollTo(0,0);" title="返回顶部"></div>
<script>
	var name="";
	var id=0;
	$(document).ready(function(){
		if(!sessionStorage.idj){
			$.getJSON("<?php echo U('home/index/chedan');?>",'',function(mss){
				sessionStorage.idj=mss[0]['id'];
			})
		}
		$('.sends').click(function(){
			name=$('.texts').val();
			var count=0;
			if(name==""){
				alert("内容不能为空");
			}
			else{
				$(".texts").val("");
				if(!sessionStorage.id){
					sessionStorage.id=sessionStorage.idj;
					$.post("<?php echo U('home/index/chedand');?>",{toid:sessionStorage.id})
				}
				var mydata=new Date();
				var ddmm=mydata.toLocaleTimeString();
				var html="<div class='ni'><p class='date2'>"+ddmm+"</p><div class='neirong1 clears'>"+"<img src='/zhuoyue/Public/home/images/kehu.jpg' class='gifsize'/>"+"<div class='arrow1'></div><span>"+name+"</span>"+"<img src='/zhuoyue/Public/home/images/gif.gif' class='image'>"+"</div></div>";
				$('.chatshow').append(html);
				$('.chatshow').scrollTop($('.chatshow')[0].scrollHeight);
				$.post("<?php echo U('home/Index/ajax');?>",{content:name,goid:count,toid:sessionStorage.id,time:ddmm},function(){
					$('.image').remove();
				});
			}  
		});
		
		$('#btn').click(function(){
			$('#close').toggle();
			if($(this).hasClass('index_cy')){
				$(this).removeClass('index_cy');
				$(this).addClass('index_cy2');
			}
			else{
				$(this).removeClass('index_cy2');
				$(this).addClass('index_cy');
			}	
		});	
	})
	function xx(){
		$.getJSON("<?php echo U('home/index/fresh');?>",'',function(mess){
			var len=mess.length-1;
			for(var i=len;i>-1;i--){
				if(mess[i]['id']>id&&mess[i]['toid']==sessionStorage.id){
					id=mess[i]['id'];
					if(mess[i]['goid']==1){
						var html="<p class='date1'>"+mess[i]['times']+"</p><div class='neirong clears'>"+"<img src='/zhuoyue/Public/home/images/kehu.jpg' />"+"<div class='arrow'></div><span>"+mess[i]['content']+"</span></div>";
						$('.chatshow').append(html);
						$('.chatshow').scrollTop($('.chatshow')[0].scrollHeight);
					}
					else{
						if(mess[i]['content']!=name){
							var html="<div class='ni'><p class='date2'>"+mess[i]['times']+"</p><div class='neirong1 clears'>"+"<img src='/zhuoyue/Public/home/images/kehu.jpg' class='gifsize'/>"+"<div class='arrow1'></div><span>"+mess[i]['content']+"</span>"+"</div></div>";
							$('.chatshow').append(html);
							$('.chatshow').scrollTop($('.chatshow')[0].scrollHeight);
						}
					}
				}
			}
		});
	}
	setInterval("xx()",5000);
</script>
  		
	<!--轮播图-->
	<div class="wrap" id="wrap">
		<ul id="pic">
			<?php if(is_array($banner)): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="<?php echo U($vo['src']);?>" /></li>
				<!-- <li><img src="/zhuoyue/Public/home/images/2.jpg" /></li>
				<li><img src="/zhuoyue/Public/home/images/3.jpg" /></li>
				<li><img src="/zhuoyue/Public/home/images/4.jpg" /></li> --><?php endforeach; endif; else: echo "" ;endif; ?>
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
		<img src="/zhuoyue/Public/home/images/weibo.jpg" />
		<h5>官方微博</h5>
	</div>
	<div class="contact">
		<a><i class="fa fa-phone-square"></i>&nbsp&nbsp17796911177</a>
		<a href="http://wpa.qq.com/msgrd?v=3&uin=123456789&site=qq&menu=yes"><i class="fa fa-user"></i>&nbsp&nbsp在线客服</a>
		<a><i class="fa fa-envelope"></i>&nbsp&nbsp客服邮箱<p>kefu@example.com</p></a>
	</div>
	<div class="clears"></div>
	<p class="p">  2017 by 新乐市卓越灯具有限公司&nbsp&nbsp&nbsp&nbsp经营许可证编号：冀000000</p>
</div>
  	</body>
</html>
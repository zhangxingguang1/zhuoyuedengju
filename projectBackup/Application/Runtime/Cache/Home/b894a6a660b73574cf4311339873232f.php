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
	$(function(){
		$('.sends').click(function(){
			var name=$('.texts').val();
			var count=0
			if(name==""){
				alert("内容不能为空");
			}
			else{
				$(".texts").val("");
				var mydata=new Date();
				var ddmm=mydata.toLocaleTimeString();
				var html="<div class='ni'><p class='date2'>"+ddmm+"</p><div class='neirong1 clears'>"+"<img src='/zhuoyue/Public/home/images/kehu.jpg' class='gifsize'/>"+"<div class='arrow1'></div><span>"+name+"</span>"+"<img src='/zhuoyue/Public/home/images/gif.gif' class='image'>"+"</div></div>";
				$('.chatshow').append(html);
				$('.chatshow').scrollTop($('.chatshow')[0].scrollHeight);

				$.post("<?php echo U('home/Index/ajax');?>",{content:name,goid:count,time:ddmm},function(){
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
	var id=0;
	function xx(){
		$.getJSON("<?php echo U('home/index/fresh');?>",'',function(mess){
			var len=mess.length-1
			for(var i=len;i>-1;i--){
				if(mess[i]['id']>id){
					var html="<p class='date1'>"+mess[i]['times']+"</p><div class='neirong clears'>"+"<img src='/zhuoyue/Public/home/images/kehu.jpg' />"+"<div class='arrow'></div><span>"+mess[i]['content']+"</span></div>";
					$('.chatshow').append(html);
					$('.chatshow').scrollTop($('.chatshow')[0].scrollHeight);
					id=mess[i]['id'];
				}
			}
		});
	}
	setInterval("xx()",5000);
</script>
  			
	<!--content-->
	<div class="content clears">
	<!--面包屑-->
		<div class="bread">
		<ol>
		    <li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
		    <li class="active">在线留言</li>
		</ol>
	</div>
	<div class="message_img">
		<img src="/zhuoyue/Public/home/images/message.jpg" />
	</div>
	<div class="tab">
		<span>提交留言</span>
	</div>
	<div class="message_sub">
		<form action="" method="post">
			<div class="clears">
				<span>问 题：</span>
				<input name="FaqTitle" type="text" /><font color="#FF0000">*</font>
			</div>    
			<div class="pack clears">
				<span>内 容：</span>
				<textarea name="Content" cols="60" rows="6"></textarea><font color="#FF0000">*</font>
			</div>
			<div class="clears">
				<span>联系人：</span>
				<input name="Contact" type="text" /><font color="#FF0000">*</font>
			</div>
			<div>
				<span>联系方式：</span>
				<input name="ContactWay" type="text" /> <font color="#FF0000">*</font> 请注明是手机、电话、QQ、Email,方便我们和您联系
			</div>
			<div>
				<span>验证码：</span>
				<input name="code" type="text" class="" id="" size="6" maxlength="6"/><font color="#FF0000">*</font>
				<img src="" alt="看不清验证码?点击刷新!" onClick="" />
			</div>
			<div>
				<span>&nbsp;</span>
				<input type="submit" value=" 提交 "/>
			</div>
		</form>
	</div>
	<div class="tab">
		<span>最新留言</span>
	</div>
	<div class="message_new">
		<div>
			<p>这是啦啦啦阿里粉的一些内容</p><span class="mes_title">时间：20175-5-15&nbsp&nbsp</span>
		</div>
		<div>
			<p>这是啦啦啦阿里粉的一些内容</p><span class="mes_title">时间：20175-5-15&nbsp&nbsp</span>
		</div>
		<div>
			<p>这是啦啦啦阿里粉的一些内容</p><span class="mes_title">时间：20175-5-15&nbsp&nbsp</span>
		</div>
		<div>
			<p>这是啦啦啦阿里粉的一些内容</p><span class="mes_title">时间：20175-5-15&nbsp&nbsp</span>
		</div>
		<div>
			<p>这是啦啦啦阿里粉的一些内容</p><span class="mes_title">时间：20175-5-15&nbsp&nbsp</span>
		</div>
		<div>
			<p>这是啦啦啦阿里粉的一些内容</p><span class="mes_title">时间：20175-5-15&nbsp&nbsp</span>
		</div>
	</div>
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
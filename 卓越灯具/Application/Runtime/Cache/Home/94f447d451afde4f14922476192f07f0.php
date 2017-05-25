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
			    <li class="active">产品展示</li>
			</ol>
		</div>
		<div class="product_detail">
			<div class="product_img">
				<div class="hides">
					<img id="large_img" src="/zhuoyue/Public/home/images/01.jpg" />
				</div>
				<ul id="imageslist">
					<li>
						<img id="small_img0" src="/zhuoyue/Public/home/images/01.jpg" />
					</li>
					<li>
						<img id="small_img1" src="/zhuoyue/Public/home/images/02.jpg" />
					</li>
					<li>
						<img id="small_img2" src="/zhuoyue/Public/home/images/03.jpg" />
					</li>
					<li>
						<img id="small_img3" src="/zhuoyue/Public/home/images/04.jpg" />
					</li>
				</ul>
			</div>
			<script>
				$(function(){
	  				for (var i = 0; i < $("#imageslist li").length; i++) {
  						$('#small_img'+i).click(function(){
  							$("#large_img").attr("src",this.src);
  						})
  						$("#imageslist li").click(function(){
    						$(this).siblings('li').css('border','1px solid #ccc');
    						$(this).css('border','1px solid #00A2CA');
  						})
  						
	  				}
	  			})
			</script>
			<div class="product_info">
				<span>产品名称：</span><br/>
				<h3>LF70H LED高杆灯</h3><br/><br/><br/>
				<span>详细介绍：</span><br/>
				<p>LF70H采用新一代LED技术，更低的系统功耗进一步降低了照明功率密度（LDP）；带来更舒适的照明环境，无论在工厂、商场、还是公共空间的照明要求都胜任有余；全面对光、电、热、结构、造型等设计，将最大化提升节能成本，配合南华控制系统，打造一站式终极节能方案，是照明方案改造的最佳选择。</p>
			</div>
		</div>
		<div class="tab">
			<span>产品参数</span>
		</div>
		<table width="80%" border="0" cellpadding="0" cellspacing="0" class="common">
		  <tbody>
			  <tr>
				<th width="20%" class="th_left">描 述</th>
				<th width="80%" class="th_right">参 数</th>
			  </tr>
			 
			  <tr>
				<td>工作电压</td>
				<td>AC100V~AC240V</td>
			  </tr>
			 
			  <tr>
				<td>电源频率</td>
				<td>50Hz~60Hz</td>
			  </tr>
			 
			  <tr>
				<td>额定功率</td>
				<td>多功率组合设计：560W/440W/300W/220W/150W/75W</td>
			  </tr>
			 
			  <tr>
				<td>色 &nbsp; &nbsp; 温</td>
				<td>冷白：5500K-6000K</td>
			  </tr>
			 
			  <tr>
				<td>-</td>
				<td>暖白：2700K-3000K</td>
			  </tr>
			 
			  <tr>
				<td>光源寿命</td>
				<td>≥50000小时</td>
			  </tr>
			 
			  <tr>
				<td>PF</td>
				<td>&gt;0.9</td>
			  </tr>
			 
			  <tr>
				<td>光 &nbsp; &nbsp; 效</td>
				<td>冷白 120 lm/W</td>
			  </tr>
			 
			  <tr>
				<td>-</td>
				<td>暖白105 lm/W</td>
			  </tr>
			 
			  <tr>
				<td>显色指数</td>
				<td>冷白：Ra≥70</td>
			  </tr>
			 
			  <tr>
				<td>-</td>
				<td>暖白：Ra≥80</td>
			  </tr>
			 
			  <tr>
				<td>防护等级</td>
				<td>IP65</td>
			  </tr>
			 
			  <tr>
				<td>机械碰撞防护等级&nbsp;</td>
				<td>IK08</td>
			  </tr>
			 
			  <tr>
				<td>震动等级</td>
				<td>1.5G（ANSI C136.31）</td>
			  </tr>
			 
			  <tr>
				<td>工作湿度</td>
				<td>10% ~ 95% (不凝结）</td>
			  </tr>
			 
			  <tr>
				<td>工作温度</td>
				<td>-30˚C ~ +50˚C</td>
			  </tr>
			 
			  <tr>
				<td>材 &nbsp; &nbsp; 质</td>
				<td>外壳：铝合金 &nbsp;支架：不锈钢</td>
			  </tr>
			 
			  <tr>
				<td>-</td>
				<td>灯罩：PC&nbsp;</td>
			  </tr>
			 
			  <tr>
				<td>盐雾等级</td>
				<td>ISO9227 &nbsp;720H</td>
			  </tr>
			 
			  <tr>
				<td>参考重量(含电源和支架)</td>
				<td>560W：26kg； 440W：22kg； 300W：16kg</td>
			  </tr>
			 
			  <tr>
				<td>-</td>
				<td>220W：13kg； 150W：11kg； 75W：9kg</td>
			  </tr>
			</tbody>
		</table>
		<div class="tab">
			<span>使用说明</span>
		</div>
		<ul class="con_list1">
		    <li>灯具用M12的螺丝配合防脱螺母与安装面固定，安装面应平整和有足够的机械强度；</li>
		    <li>将防坠连固定在适当的地方，固定面应有足够的机械强度；</li>
		    <li>将引出线直接连接在L、N、PE端子上；</li>
		    <li>接好电源线后接通电源即可工作；</li>
		    <li>灯具外接电源线必须满足至少16AWG以上的三芯护套线，护套线外径在直径10MM。</li>
		</ul>
		<div class="tab">
			<span>注意事项</span>
		</div>
		<ul class="con_list2">
		    <li>灯具用M12的螺丝配合防脱螺母与安装面固定，安装面应平整和有足够的机械强度；</li>
		    <li>将防坠连固定在适当的地方，固定面应有足够的机械强度；</li>
		    <li>将引出线直接连接在L、N、PE端子上；</li>
		    <li>接好电源线后接通电源即可工作；</li>
		    <li>灯具外接电源线必须满足至少16AWG以上的三芯护套线，护套线外径在直径10MM。</li>
		</ul>
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
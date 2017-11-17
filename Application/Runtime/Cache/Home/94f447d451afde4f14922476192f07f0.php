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
  		 	
	<!--content-->
	<div class="content clears">
		<!--面包屑-->
  		<div class="bread">
			<ol>
			    <li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
			    <li class="active">产品展示</li>
			</ol>
		</div>
		<?php if(is_array($show)): $i = 0; $__LIST__ = $show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="product_detail">
				<div class="product_img">
					<div class="hides">
						<img id="large_img" src="<?php echo U($vo['picture']);?>" />
					</div>
					<ul id="imageslist">
						<li>
							<img id="small_img0" src="<?php echo U($vo['picture']);?>" />
						</li>
						<li>
							<img id="small_img1" src="/zhuoyue/Public/home/images/01.jpg" />
						</li>
						<li>
							<img id="small_img2" src="/zhuoyue/Public/home/images/02.jpg" />
						</li>
						<li>
							<img id="small_img3" src="/zhuoyue/Public/home/images/03.jpg" />
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
					<h3><?php echo ($vo["name"]); ?></h3><br/><br/><br/>
					<span>详细介绍：</span><br/>
					<p><?php echo ($vo["jieshao"]); ?></p>
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
				 
				  <!-- <tr>
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
				 
				  <tr> -->
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
				</tbody>
			</table>
			<div class="tab">
				<span>使用说明</span>
			</div>
			<ul class="con_list1">
			    <?php echo ($vo["shuoming"]); ?>
			</ul>
			<div class="tab">
				<span>注意事项</span>
			</div>
			<ul class="con_list2">
			   <?php echo ($vo["zhuyi"]); ?>
			</ul><?php endforeach; endif; else: echo "" ;endif; ?>
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
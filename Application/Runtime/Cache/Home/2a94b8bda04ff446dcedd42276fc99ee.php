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
  		
	<!-- 轮播图 -->
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
	<!-- content -->
	<div class="bd1 clears">
		<!-- 最新产品 -->
		<div class="bd1-top">
			<h2>最新产品 ></h2>
			<hr/>
			<p>卓越以独特的灯具设计、领先的光学应用，倾力打造道路照明解决方案，营造舒适健康、品味非凡的光环境，让您的生活简单，愉悦，更添乐趣。</p>
			<hr/>
		</div>
		<div class="bd1-left view view-tenth">
	    	<?php if(is_array($new1)): $i = 0; $__LIST__ = $new1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><figure>
			        <div class="thumb"><img src="<?php echo U($vo['picture']);?>" /></div>
			        <div class="mask">
			            <h2><?php echo ($vo["name"]); ?></h2>
			            <p><?php echo (msubstr(strip_tags($vo["jieshao"]),0,50,'utf-8',true)); ?></p>
			            <a href="<?php echo U('Show/show');?>/id/<?php echo ($vo["id"]); ?>" class="link">查看更多</a>
			        </div>
		        </figure><?php endforeach; endif; else: echo "" ;endif; ?>
	    </div>
		<div class="bd1-right">
			<div class="bd1-right-top">
				<div class="bd1-right-top1 view view-tenth">
					<?php if(is_array($new2)): $i = 0; $__LIST__ = $new2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><figure>
					        <div class="thumb"><img src="<?php echo U($vo['picture']);?>" /></div>
					        <div class="mask">
					            <h2><?php echo ($vo["name"]); ?></h2>
					            <p><?php echo (msubstr(strip_tags($vo["jieshao"]),0,50,'utf-8',true)); ?></p>
					            <a href="<?php echo U('Show/show');?>/id/<?php echo ($vo["id"]); ?>" class="link">查看更多</a>
					        </div>
				        </figure><?php endforeach; endif; else: echo "" ;endif; ?>
			    </div>

				<div class="bd1-right-top2 view view-tenth">
			    	<?php if(is_array($new3)): $i = 0; $__LIST__ = $new3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><figure>
					        <div class="thumb"><img src="<?php echo U($vo['picture']);?>" /></div>
					        <div class="mask">
					            <h2><?php echo ($vo["name"]); ?></h2>
					            <p><?php echo (msubstr(strip_tags($vo["jieshao"]),0,50,'utf-8',true)); ?></p>
					            <a href="<?php echo U('Show/show');?>/id/<?php echo ($vo["id"]); ?>" class="link">查看更多</a>
					        </div>
				        </figure><?php endforeach; endif; else: echo "" ;endif; ?>
			    </div>
			</div>
			<div class="bd1-right-bottom">
				<div class="bd1-right-bottom1 view view-tenth">
			    	<?php if(is_array($new4)): $i = 0; $__LIST__ = $new4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><figure>
					        <div class="thumb"><img src="<?php echo U($vo['picture']);?>" /></div>
					        <div class="mask">
					            <h2><?php echo ($vo["name"]); ?></h2>
					            <p><?php echo (msubstr(strip_tags($vo["jieshao"]),0,50,'utf-8',true)); ?></p>
					            <a href="<?php echo U('Show/show');?>/id/<?php echo ($vo["id"]); ?>" class="link">查看更多</a>
					        </div>
				        </figure><?php endforeach; endif; else: echo "" ;endif; ?>
			    </div>

			    <div class="bd1-right-bottom2 view view-tenth">
			    	<?php if(is_array($new5)): $i = 0; $__LIST__ = $new5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><figure>
					        <div class="thumb"><img src="<?php echo U($vo['picture']);?>" /></div>
					        <div class="mask">
					            <h2><?php echo ($vo["name"]); ?></h2>
					            <p><?php echo (msubstr(strip_tags($vo["jieshao"]),0,50,'utf-8',true)); ?></p>
					            <a href="<?php echo U('Show/show');?>/id/<?php echo ($vo["id"]); ?>" class="link">查看更多</a>
					        </div>
				        </figure><?php endforeach; endif; else: echo "" ;endif; ?>
			    </div>
			</div>
		</div>
	</div>
	<!-- 热销产品 -->
	<div class="bd2 clears">
  		<div class="bd2-top">
			<h2>热销产品 ></h2>
			<hr/>
			<p>卓越以独特的设计、研发、制造、服务能力所打造的商用照明系列，能为客户提供专业的整体解决方案，满足全方位商业需求。</p>
			<hr/>
		</div>
		<div class="bd2-bottom">
			<?php if(is_array($hot)): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="port effect">
	            	<div class="image-box">
	                	<img src="<?php echo U($vo['picture']);?>" />
	                </div>
	                <div class="text-desc">
	                	<h3><?php echo ($vo["title"]); ?></h3>
	                    <p>查看详细信息</p>
	                	<a href="<?php echo U('Show/show');?>/id/<?php echo ($vo["id"]); ?>" class="btn">查看更多</a>
	                </div>
	            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        	<!-- <div class="port effect">
            	<div class="image-box">
                	<img src="/zhuoyue/Public/home/images/01.jpg" />
                </div>
                <div class="text-desc">
                	<h3>高杆灯</h3>
                    <p>查看详细信息</p>
                	<a href="<?php echo U('Show/show');?>/id/13" class="btn">查看更多</a>
                </div>
            </div>
            <div class="port effect">
            	<div class="image-box">
                	<img src="/zhuoyue/Public/home/images/02.jpg" />
                </div>
                <div class="text-desc">
                	<h3>高杆灯</h3>
                    <p>查看详细信息</p>
                	<a href="<?php echo U('Show/show');?>/id/13" class="btn">查看更多</a>
                </div>
            </div>
            <div class="port effect">
            	<div class="image-box">
                	<img src="/zhuoyue/Public/home/images/03.jpg" />
                </div>
                <div class="text-desc">
                	<h3>高杆灯</h3>
                    <p>查看详细信息</p>
                	<a href="<?php echo U('Show/show');?>/id/13" class="btn">查看更多</a>
                </div>
            </div>
            <div class="port effect">
            	<div class="image-box">
                	<img src="/zhuoyue/Public/home/images/04.jpg" />
                </div>
                <div class="text-desc">
                	<h3>高杆灯</h3>
                    <p>查看详细信息</p>
                	<a href="<?php echo U('Show/show');?>/id/13" class="btn">查看更多</a>
                </div>
            </div> -->
		</div>
	</div>
	<!--猜你喜欢-->
	<div class="bd3 clears">
  		<div class="bd3-top">
			<h2>猜你喜欢 ></h2>
			<hr/>
			<p>卓越以独特的设计、研发、制造、服务能力所打造的商用照明系列，能为客户提供专业的整体解决方案，满足全方位商业需求。</p>
			<hr/>
		</div>
		<div id="demo">
			<div id="indemo">
				<div id="demo1">
					<?php if(is_array($like)): $i = 0; $__LIST__ = $like;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Show/show');?>/id/<?php echo ($vo["id"]); ?>"><img src="<?php echo U($vo['picture']);?>" alt="#" /></a><?php endforeach; endif; else: echo "" ;endif; ?>
					<!-- <a href="<?php echo U('Show/show');?>/id/13"><img src="/zhuoyue/Public/home/images/01.jpg" alt="#" /></a>
					<a href="<?php echo U('Show/show');?>/id/13"><img src="/zhuoyue/Public/home/images/02.jpg" alt="#" /></a>
					<a href="<?php echo U('Show/show');?>/id/13"><img src="/zhuoyue/Public/home/images/03.jpg" alt="#" /></a>
					<a href="<?php echo U('Show/show');?>/id/13"><img src="/zhuoyue/Public/home/images/04.jpg" alt="#" /></a>
					<a href="<?php echo U('Show/show');?>/id/13"><img src="/zhuoyue/Public/home/images/05.jpg" alt="#" /></a> -->
				</div>
				<div id="demo2"></div>
			</div>
		</div>
	</div>
	<!-- body底部 -->
	<div class="page_footer">
		<table cellpadding="0" cellspacing="0" border="0" class="quick_entry clears">
			<tr>
				<td>
					<div>
						<img src="/zhuoyue/Public/home/images/footer_logo_1.png" /><br>
						<span>严格质量保证</span><br>
						<p>QUALITY ASSURANCE</p><br>
						<img src="/zhuoyue/Public/home/images/footer_logo_0.jpg" />	
					</div>
				</td>
				<td>
					<div>
						<img src="/zhuoyue/Public/home/images/footer_logo_2.png" /><br>
						<span>精湛研发制造</span><br>
						<p>RESEARCH MANUFACTURE</p><br>
						<img src="/zhuoyue/Public/home/images/footer_logo_0.jpg" />
					</div>
				</td>
				<td>
					<div>
						<img src="/zhuoyue/Public/home/images/footer_logo_3.png" /><br>
						<span>专业设计团队</span><br>
						<p>DESIGN TEAM</p><br>
						<img src="/zhuoyue/Public/home/images/footer_logo_0.jpg" />
					</div>
				</td>
				<td>
					<div>
						<img src="/zhuoyue/Public/home/images/footer_logo_4.png" /><br>
						<span>系统服务体系</span><br>
						<p>SERVICE SYSTEM</p><br>
						<img src="/zhuoyue/Public/home/images/footer_logo_0.jpg" />
					</div>
				</td>
				<td>
					<div>
						<img src="/zhuoyue/Public/home/images/footer_logo_5.png" /><br>
						<span>全程技术支持</span><br>
						<p>TECHNICAL SUPPORT</p><br>
						<img src="/zhuoyue/Public/home/images/footer_logo_0.jpg" />
					</div>
				</td>
			</tr>
		</table>
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
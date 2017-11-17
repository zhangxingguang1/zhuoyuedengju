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
			    <li class="active">产品中心</li>
			</ol>
		</div>
		<h3 class="prod">产品分类</h3>
  		<div class="classify pro_div_find">
  			<ul id="cate_tabs" class="find1">
  				<!-- <li><a href="javascript:void(0);">高杆灯</a></li>
  				<li><a href="javascript:void(0);">中杆灯</a></li>
  				<li><a href="javascript:void(0);">道路灯</a></li>
  				<li><a href="javascript:void(0);">庭院灯</a></li>
  				<li><a href="javascript:void(0);">室内灯</a></li> -->

  				<?php if(is_array($xilie)): $i = 0; $__LIST__ = $xilie;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="javascript:void(0);" id='<?php echo ($vo["id"]); ?>' onclick="javascript:void(0)"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
  			</ul>
  		</div>
  		<div id="cate_tab_content">
			<div class="filter pro_div_find" id="cate_tab1">
		  		<div class="select">
		  			<p>产品筛选：</p>
		  			<ul style="display:none;">
		  				<li class="sel-show" style="display:none">
		  					<a href="javascript:void(0);" title="点击清除"></a>
		  				</li>
		  				<li class="sel-show" style="display:none">
		  					<a href="javascript:void(0);" title="点击清除"></a>
		  				</li>
		  				<li class="sel-show" style="display:none">
		  					<a href="javascript:void(0);" title="点击清除"></a>
		  				</li>
		  			</ul>
		  		</div>
		  		<div class="classify1">
		  			<p>光源种类：</p>
		  			<ul class="find2">
		  				<li><a href="javascript:void(0);" class="sel-all" id='0'>全部</a></li>
		  				<!-- <li><a href="javascript:void(0);" value="7">LED灯</a></li>
		  				<li><a href="javascript:void(0);">太阳能灯</a></li>
		  				<li><a href="javascript:void(0);">电灯</a></li> -->
		  				<?php if(is_array($guangyuan)): $i = 0; $__LIST__ = $guangyuan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li value='<?php echo ($vo["id"]); ?>'><a href="javascript:void(0);" id='<?php echo ($vo["id"]); ?>'><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		  			</ul>
		  		</div>
		  		<div class="classify1">
		  			<p>用途分类：</p>
		  			<ul class="find3">
		  				<li><a href="javascript:void(0);" class="sel-all" id='0'>全部</a></li>
		  				<!-- <li><a href="javascript:void(0);">工矿灯</a></li>
		  				<li><a href="javascript:void(0);">投光灯</a></li>
		  				<li><a href="javascript:void(0);">地插灯</a></li>
		  				<li><a href="javascript:void(0);">监控灯</a></li>
		  				<li><a href="javascript:void(0);">信号灯</a></li> -->
		  				<?php if(is_array($yongtu)): $i = 0; $__LIST__ = $yongtu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li value='<?php echo ($vo["id"]); ?>'><a href="javascript:void(0);" id='<?php echo ($vo["id"]); ?>'><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		  			</ul>
		  		</div>
		  		<div class="classify1">
		  			<p>光通量分布：</p>
		  			<ul class="find4">
		  				<li><a href="javascript:void(0);" class="sel-all" id='0'>全部</a></li>
		  				<!-- <li><a href="javascript:void(0);">工矿灯</a></li>
		  				<li><a href="javascript:void(0);">投光灯</a></li>
		  				<li><a href="javascript:void(0);">地插灯</a></li>
		  				<li><a href="javascript:void(0);">监控灯</a></li>
		  				<li><a href="javascript:void(0);">信号灯</a></li> -->
		  				<?php if(is_array($guangtongliang)): $i = 0; $__LIST__ = $guangtongliang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li value='<?php echo ($vo["id"]); ?>'><a href="javascript:void(0);" id='<?php echo ($vo["id"]); ?>'><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		  			</ul>
		  		</div>
		  	</div>
  		</div>
		<div class="show clears" id="showtime">
			<?php if(is_array($find)): $i = 0; $__LIST__ = $find;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div name="showtime" class="pro_page_num chage_page">
					<a href="<?php echo U('Home/Show/show');?>/id/<?php echo ($vo["id"]); ?>">
						<img src="/zhuoyue/Public/<?php echo ($vo["picture"]); ?>" />
						<h3><?php echo ($vo["name"]); ?></h3>
						<span>查看详细信息</span>
					</a>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div id="barcon"></div>
	</div>
	<script>
		window.onload=function(){
			goPage(1,8);
			var arra = new Array();
			arra.xilie=1;
			arra.guangyuan=0;
			arra.yongtu=0;
			arra.guangtongliang=0;

			var arra2 = new Array();
			arra2[0]=1;
			arra2[1]=0;
			arra2[2]=0;
			arra2[3]=0;
			$('.pro_div_find a').click(function(){
				setTimeout(function(){

					arra.xilie=$('.pro_henglan a').attr('id');
					console.log("a"+arra.xilie);
					arra2[0]=arra.xilie;

					var seled = $('.seled');

					arra.guangyuan=seled[0].id;
					console.log("b"+arra.guangyuan);
					arra2[1]=arra.guangyuan;

					arra.yongtu=seled[1].id;
					console.log("c"+arra.yongtu);
					arra2[2]=arra.yongtu;

					arra.guangtongliang=seled[2].id;
					console.log("d"+arra.guangtongliang);
					arra2[3]=arra.guangtongliang;

					$.ajax({
				        url :"<?php echo U('Home/Product/gett');?>",
				        data:{"xilie":arra.xilie,"guangyuan":arra.guangyuan,"yongtu":arra.yongtu,"guangtongliang":arra.guangtongliang},
				        type:'GET',
				        dataType:"json",       
				        // error:function(){
				        //      console.log("chucuo");
				        // },
				        success:function(data){    
					        $('.show>div[name="showtime"]').remove();
					        if (data.length >=1) {
					        	for(var i=0 ;i<data.length;i++){
					        	var vals ='';
					        	vals+="<div name=\"showtime\"><a href=\"<?php echo U('Home/Show/show');?>/id/"+data[i].id+"\"><img src=\"/zhuoyue/Public\/"+data[i].picture+"\" /><h3>"+data[i].name+"</h3><span>查看详细信息</span></a></div>";
					        	$(vals).appendTo("#showtime");
					        	}	
					        }else{
					        	var vals ='';
					        	vals+="<div name=\"showtime\" style=\"width:98%;height:240px;border:0px;\"><h5 style=\"margin-top:20px;font-size:20px;color:black;\">当前类别信息正在增添中，请稍后尝试</h5></div>";
					        	$(vals).appendTo("#showtime");
					        }
				        }
					    
	    			});
				},50)
			})
		}
	</script>

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
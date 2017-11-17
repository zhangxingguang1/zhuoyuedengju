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
			    <li class="active">联系我们</li>
			</ol>
		</div>
  		<div class="conceal">
  			<h2>联系我们</h2>
  			<div class="us_info">
				<dl>
					<dd>
						<strong>地址</strong>：河北省石家庄市南二环东路20号
					</dd>
					<dd>
						<strong>客服热线</strong>：400-4567-8900 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp周一到周日，上午8:30-晚上21:00
					</dd>
					<dd>
						<strong>邮箱</strong>：<a href="zhuoyue@example.com">zhuoyue@example.com</a>
					</dd>
					<dd>
						<strong>QQ</strong>：2418184580
					</dd>
					<dd>
						<strong>网址</strong>：www.zhuoyue.com
					</dd>
				</dl>
  			</div>
  			<div class="img_info">
				<img src="/zhuoyue/Public/home/images/contact.png" />
  			</div>
			
			<!--百度地图容器-->

			<!--引用百度地图API-->
			<style type="text/css">
			    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
			    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
			</style>

			<div style="width:92%;height:550px;border:#ccc solid 1px;margin:40px 0 20px 4%;" id="dituContent"></div>
			<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
			<script type="text/javascript">
			    //创建和初始化地图函数：
			    function initMap(){
			        createMap();//创建地图
			        setMapEvent();//设置地图事件
			        addMapControl();//向地图添加控件
			        addMarker();//向地图中添加marker
			    }
			    
			    //创建地图函数：
			    function createMap(){
			        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
			        var point = new BMap.Point(114.526383,38.003595);//定义一个中心点坐标
			        map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
			        window.map = map;//将map变量存储在全局
			    }
			    
			    //地图事件设置函数：
			    function setMapEvent(){
			        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
			        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
			        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
			        map.enableKeyboard();//启用键盘上下左右键移动地图
			    }
			    
			    //地图控件添加函数：
			    function addMapControl(){
			        //向地图中添加缩放控件
				var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
				map.addControl(ctrl_nav);
			        //向地图中添加缩略图控件
				var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
				map.addControl(ctrl_ove);
			        //向地图中添加比例尺控件
				var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
				map.addControl(ctrl_sca);
			    }
			    
			    //标注点数组
			    var markerArr = [{title:"卓越灯具有限公司",content:"卓越灯具有限公司",point:"114.526608|38.002585",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
					 ];
			    //创建marker
			    function addMarker(){
			        for(var i=0;i<markerArr.length;i++){
			            var json = markerArr[i];
			            var p0 = json.point.split("|")[0];
			            var p1 = json.point.split("|")[1];
			            var point = new BMap.Point(p0,p1);
						var iconImg = createIcon(json.icon);
			            var marker = new BMap.Marker(point,{icon:iconImg});
						var iw = createInfoWindow(i);
						var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
						marker.setLabel(label);
			            map.addOverlay(marker);
			            label.setStyle({
			                        borderColor:"#808080",
			                        color:"#333",
			                        cursor:"pointer"
			            });
						
						(function(){
							var index = i;
							var _iw = createInfoWindow(i);
							var _marker = marker;
							_marker.addEventListener("click",function(){
							    this.openInfoWindow(_iw);
						    });
						    _iw.addEventListener("open",function(){
							    _marker.getLabel().hide();
						    })
						    _iw.addEventListener("close",function(){
							    _marker.getLabel().show();
						    })
							label.addEventListener("click",function(){
							    _marker.openInfoWindow(_iw);
						    })
							if(!!json.isOpen){
								label.hide();
								_marker.openInfoWindow(_iw);
							}
						})()
			        }
			    }
			    //创建InfoWindow
			    function createInfoWindow(i){
			        var json = markerArr[i];
			        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
			        return iw;
			    }
			    //创建一个Icon
			    function createIcon(json){
			        var icon = new BMap.Icon("/zhuoyue/Public/home/images/map.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
			        return icon;
			    }
			    
			    initMap();//创建和初始化地图
			</script>
  			
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
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="/zhuoyue/Public/admin/css/admin.css" rel="stylesheet">
	<link rel="stylesheet" href="/zhuoyue/Public/admin/css/font-awesome.css">
	<script src="/zhuoyue/Public/admin/js/jquery.min.js"></script>
</head>
<body>
	<div class="edit clear">
        <div class="edit-head"><i class="fa fa-edit"></i> 在线咨询</div>
        <div class="edit-body">
	        <ul class="conleft">
				<h4><i class="fa fa-navicon"></i>客户</h4>
				<?php if(is_array($reli)): $i = 0; $__LIST__ = $reli;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src='/zhuoyue/Public/home/images/kehu.jpg'/><div class='messmsg'></div><div class='newses'></div></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div class="chat">
				<div class="chatshow">
				</div>
		    	<textarea type="text" class="texts"></textarea>
		    	<input type="submit" class="sends" value="发 送" />
			</div> 
			<div class="chat hide">
				<div class="chatshow">
				</div>
		    	<textarea type="text" class="texts"></textarea>
		    	<input type="submit" class="sends" value="发 送" />
			</div> 
			<div class="chat hide">
				<div class="chatshow">
				</div>
		    	<textarea type="text" class="texts"></textarea>
		    	<input type="submit" class="sends" value="发 送" />
			</div> 
			<div class="chat hide">
				<div class="chatshow">
				</div>
		    	<textarea type="text" class="texts"></textarea>
		    	<input type="submit" class="sends" value="发 送" />
			</div> 
			<div class="chat hide">
				<div class="chatshow">
				</div>
		    	<textarea type="text" class="texts"></textarea>
		    	<input type="submit" class="sends" value="发 送" />
			</div> 
			<div class="chat hide">
				<div class="chatshow">
				</div>
		    	<textarea type="text" class="texts"></textarea>
		    	<input type="submit" class="sends" value="发 送" />
			</div> 
			<div class="chat hide">
				<div class="chatshow">
				</div>
		    	<textarea type="text" class="texts"></textarea>
		    	<input type="submit" class="sends" value="发 送" />
			</div> 
			<div class="chat hide">
				<div class="chatshow">
				</div>
		    	<textarea type="text" class="texts"></textarea>
		    	<input type="submit" class="sends" value="发 送" />
			</div> 
        </div>
    </div>
	<script>
		$(".conleft li").click(function(){
			$(this).addClass('onon').siblings().removeClass('onon');
			var index=$(this).index()-1;
			$(".chat").eq(index).show().siblings('.chat').hide();
		})
		$(function(){
		$('.sends').click(function(){
			var name=$(this).siblings('.texts').val();
			var index=$(this).parent().index()-1;
			switch(index){
					case 0:
					index=sessionStorage.id0
					break;
					case 1:
					index=sessionStorage.id1
					break;
					case 2:
					index=sessionStorage.id2
					break;
					case 3:
					index=sessionStorage.id3
					break;
					case 4:
					index=sessionStorage.id4
					break;
					case 5:
					index=sessionStorage.id5
					break;
					case 6:
					index=sessionStorage.id6
					break;
					case 7:
					index=sessionStorage.id7
					break;
				}
			var count=1;
			if(name==""){
				alert("内容不能为空");
			}
			else{
				$(this).siblings('.texts').val("");
				var mydata=new Date();
				var ddmm=mydata.toLocaleTimeString();
				var html="<div class='textt'><p class='date1'>"+"我："+ddmm+"</p><p class='date2'>"+name+"<img src='/zhuoyue/Public/home/images/gif.gif'>"+"</p></div>";
				$(this).siblings('div').append(html);
				$(this).siblings('div').scrollTop($(this).siblings('div')[0].scrollHeight);

				$.post("<?php echo U('home/Index/ajax');?>",{content:name,goid:count,toid:index,time:ddmm},function(){
					$('.date2 img').remove();
				});
			}  
		});
	})
	var id=0;
	var slid=[0,0,0,0,0,0,0,0];
	var jid=[0,0,0,0,0,0,0,0];
	function xx(){
			$.getJSON("<?php echo U('admin/nownews/sear');?>",'',function(state){
				var html="<li><img src='/zhuoyue/Public/home/images/kehu.jpg'/><div class='messmsg'></div><div class='newses'></div></li>"
				$('.conleft').append(html);
				var index=$('.conleft li:last-child').index()-1;
				switch(index){
					case 0:
					sessionStorage.id0=state[0]['id']
					break;
					case 1:
					sessionStorage.id1=state[0]['id']
					break;
					case 2:
					sessionStorage.id2=state[0]['id']
					break;
					case 3:
					sessionStorage.id3=state[0]['id']
					break;
					case 4:
					sessionStorage.id4=state[0]['id']
					break;
					case 5:
					sessionStorage.id5=state[0]['id']
					break;
					case 6:
					sessionStorage.id6=state[0]['id']
					break;
					case 7:
					sessionStorage.id7=state[0]['id']
					break;
				}
				$(".conleft li").click(function(){
					$(this).addClass('onon').siblings().removeClass('onon');
					var index=$(this).index()-1;
					$(".chat").eq(index).show().siblings('.chat').hide();
					$('.newses').eq(index).empty();
					slid[index]=0;
					jid=[0,0,0,0,0,0,0,0]
					jid[index]=-1;
				})
			})
			$.getJSON("<?php echo U('admin/nownews/freshes');?>",'',function(mess){
				var len=mess.length-1
				for(var i=len;i>-1;i--){
					if(mess[i]['id']>id){
						for(var j=0;j<sessionStorage.length;j++){
							var key=sessionStorage.key(j);
							if(sessionStorage.getItem(key)==mess[i]['toid']){

								var html="<div class='textts'><p class='date1'>"+"客户0"+j+": "+mess[i]['times']+"</p><p class='date2'>"+mess[i]['content']+"</p></div>";
								$('.chatshow').eq(j).append(html);
								$('.chatshow').eq(j).scrollTop($('.chatshow').eq(j)[0].scrollHeight);
								$('.messmsg').eq(j).empty();
								var htmls="<p>"+mess[i]['times']+"</p><p>"+mess[i]['content']+"</p>"
								$('.messmsg').eq(j).append(htmls);
								$('.newses').eq(j).empty();
								if(jid[j]==0){
									slid[j]+=1;
									var htms="<div class='newes'>"+slid[j]+"</div>";
									$('.newses').eq(j).append(htms);
								}
								id=mess[i]['id'];
							};
						}
					}
				}
			});
		}
	setInterval("xx()",5000);

	</script>
</body>
</html>
window.onload=function(){
	var wrap=document.getElementById('wrap'),
 	pic=document.getElementById('pic').getElementsByTagName("li"),
 	list=document.getElementById('list').getElementsByTagName('li'),
 	index=0,
 	timer=null;
	// 定义并调用自动播放函数
	timer = setInterval(autoPlay, 2000);
 	// 鼠标划过整个容器时停止自动播放
 	wrap.onmouseover = function () {
 		clearInterval(timer);
 	}
 	// 鼠标离开整个容器时继续播放至下一张
 	wrap.onmouseout = function () {
 		timer = setInterval(autoPlay, 2000);
 	}
 	// 遍历所有数字导航实现划过切换至对应的图片
 	for (var i = 0; i < list.length; i++) {
 		list[i].onmouseover = function () {
 			clearInterval(timer);
 			index = this.value - 1;
 			changePic(index);
 		}
 	}
 	function autoPlay () {
 		if (++index >= pic.length) index = 0;
 		changePic(index);
 	}
 	// 定义图片切换函数
 	function changePic (curIndex) {
 		for (var i = 0; i < pic.length; ++i) {
 			pic[i].style.display = "none";
 			list[i].className = "";
 		}
 		pic[curIndex].style.display = "block";
 		list[curIndex].className = "on";
 	}

 	//底部滚动图片
 	var speed=10; //数字越大速度越慢
	var tab=document.getElementById("demo");
	var tab1=document.getElementById("demo1");
	var tab2=document.getElementById("demo2");
	tab2.innerHTML=tab1.innerHTML;
	function Marquee(){
		if(tab2.offsetWidth-tab.scrollLeft<=0)
			tab.scrollLeft-=tab1.offsetWidth;
		else{
			tab.scrollLeft++;
		}
	}
	var MyMar=setInterval(Marquee,speed);
	tab.onmouseover=function(){
		clearInterval(MyMar);
	}
	tab.onmouseout=function(){
		MyMar=setInterval(Marquee,speed);
	}
}
window.onload=function(){function e(){++m>=l.length&&(m=0),t(m)}function t(e){for(var t=0;t<l.length;++t)l[t].style.display="none",a[t].className="";l[e].style.display="block",a[e].className="on"}function n(){d.offsetWidth-c.scrollLeft<=0?c.scrollLeft-=u.offsetWidth:c.scrollLeft++}var o=document.getElementById("wrap"),l=document.getElementById("pic").getElementsByTagName("li"),a=document.getElementById("list").getElementsByTagName("li"),m=0,r=null;r=setInterval(e,2e3),o.onmouseover=function(){clearInterval(r)},o.onmouseout=function(){r=setInterval(e,2e3)};for(var s=0;s<a.length;s++)a[s].onmouseover=function(){clearInterval(r),t(m=this.value-1)};var c=document.getElementById("demo"),u=document.getElementById("demo1"),d=document.getElementById("demo2");d.innerHTML=u.innerHTML;var i=setInterval(n,10);c.onmouseover=function(){clearInterval(i)},c.onmouseout=function(){i=setInterval(n,10)}};
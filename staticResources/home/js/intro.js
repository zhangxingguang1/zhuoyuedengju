window.onload=function(){
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
}
window.onload=function(){
    var count=0;
    document.getElementsByTagName('input')[0].onblur=function(){
        var password=this.value;
        if(password==""){
            document.getElementsByTagName('span')[1].innerHTML="请输入原始密码";
            this.style.border="1px solid red";
        }
        else{
            document.getElementsByTagName('span')[1].innerHTML="";
            this.style.border="1px solid #ddd";
            count+=1;
            if(count>=3){
                document.getElementsByTagName('button')[0].removeAttribute("disabled");
            }
        }
    }
    document.getElementsByTagName('input')[1].onblur=function(){
        var reg=/^[a-zA-Z\d_]{6,}$/g;
        var password1=document.getElementsByTagName('input')[2].value;
        var password=this.value;
        if(reg.test(password)){
            document.getElementsByTagName('span')[2].innerHTML="";
            this.style.border="1px solid #ddd";
            count+=1;
           if(count>=3){
                document.getElementsByTagName('button')[0].removeAttribute("disabled");
            }
            if(password1==password){
                document.getElementsByTagName('span')[3].innerHTML="";
                document.getElementsByTagName('input')[2].style.border="1px solid #ddd";
                count+=1;
                if(count>=3){
                    document.getElementsByTagName('button')[0].removeAttribute("disabled");
                }
            }
        }
        else{
            document.getElementsByTagName('span')[2].innerHTML="密码少于6位或有特殊字符";
            this.style.border="1px solid red";
        }
    }
    document.getElementsByTagName('input')[2].onblur=function(){
        var password=document.getElementsByTagName('input')[1].value;
        var password1=this.value;
        if(password1==password){
            document.getElementsByTagName('span')[3].innerHTML="";
            this.style.border="1px solid #ddd";
            count+=1;
            if(count>=3){
                document.getElementsByTagName('button')[0].removeAttribute("disabled");
            }
        }
        else{
            document.getElementsByTagName('span')[3].innerHTML="两个密码不一致";
            this.style.border="1px solid red";
        }
    }
}
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/zhuoyue/Public/admin/css/admin.css">
    <link rel="stylesheet" href="/zhuoyue/Public/admin/css/font-awesome.css">
</head>
<body>
    <div class="edit">
        <div class="edit-head"><i class="fa fa-edit"></i> 增加内容</div>
        <div class="edit-body">
            <form method="post" action="<?php echo U('Admin/banner/imgadd');?>" enctype="multipart/form-data">      
                <div class="form-group">
                    <div class="place">
                        <div class="label">选择图片：</div>
                        <input class="input" type="file" id="file_input" name="file"  multiple/>       
                    </div>
                </div>      
                <div class="form-group">
                    <div class="place">
                        <div class="label">图片预览：</div>
                        <div id="preview" class="preview"></div>         
                    </div>
                </div>
                <div class="form-group">
                    <div class="place">
                        <div class="label"> </div>
                        <button class="submit" type="submit"> 提交</button>
                        <button class="back" onclick="history.go(-1)"> 返回</button>  
                    </div>
                </div>      
            </form>
        </div>
    </div>
    <script>
        window.onload = function(){
            var input = document.getElementById("file_input");
            var result,div;

            if(typeof FileReader==='undefined'){
                result.innerHTML = "抱歉，你的浏览器不支持 FileReader";
                input.setAttribute('disabled','disabled');
            }else{
             input.addEventListener('change',readFile,false);
            }　
            function readFile(){
                for(var i=0;i<this.files.length;i++){
                    if (!input['value'].match(/.jpg|.gif|.png|.bmp/i)){　
                        return alert("上传的图片格式不正确，请重新选择");　　　　　　　　　
                    }
                    var reader = new FileReader();
                    reader.readAsDataURL(this.files[i]);
                    reader.onload = function(e){
                        document.getElementById('preview').innerHTML="";
                        result = '<img src="'+this.result+'" class="ban_img" alt=""/>';
                        document.getElementById('preview').innerHTML=result;　　　
                    }
                }
            }
        }
    </script>   
</body>
</html>
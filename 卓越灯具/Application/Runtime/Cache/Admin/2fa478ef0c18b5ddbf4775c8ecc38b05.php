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
        <div class="edit-head"><i class="fa fa-edit"></i> 添加产品</div>
        <div class="edit-body">
            <form method="post" action="">  
                <div class="form-group">
                    <div class="place">
                        <div class="label"><span class="require-red">*</span>产品名称：</div>
                        <input type="text" />         
                    </div>
                </div>    
                <div class="form-group">
                    <div class="place">
                        <div class="label"><span class="require-red">*</span>选择图片：</div>
                        <input type="file" />       
                    </div>
                </div>      
                <div class="form-group">
                    <div class="place">
                        <div class="label">详细介绍：</div>
                        <textarea rows="5" cols=""></textarea>         
                    </div>
                </div>
                <div class="form-group">
                    <div class="place">
                        <div class="label">使用说明：</div>
                        <textarea rows="5" cols=""></textarea>         
                    </div>
                </div>
                <div class="form-group">
                    <div class="place">
                        <div class="label">注意事项：</div>
                        <textarea rows="5" cols=""></textarea>         
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
</body>
</html>
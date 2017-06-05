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
        <div class="edit-head"><i class="fa fa-edit"></i> 添加分类</div>
        <div class="edit-body">
            <form method="post" action="">  
                <div class="form-group">
                    <div class="place">
                        <div class="label"><span class="require-red">*</span>分类级数：</div>
                        <select>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>         
                    </div>
                </div>    
                <div class="form-group">
                    <div class="place">
                        <div class="label"><span class="require-red">*</span>上级分类：</div>
                        <select>
                            <option value="无">无</option>
                            <option value="高杆灯系列">高杆灯系列</option>
                            <option value="中杆灯系列">中杆灯系列</option>
                            <option value="LED灯系列">LED灯系列</option>
                        </select>         
                    </div>
                </div>        
                <div class="form-group">
                    <div class="place">
                        <div class="label"><span class="require-red">*</span>分类名称：</div>
                        <input type="text" />         
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
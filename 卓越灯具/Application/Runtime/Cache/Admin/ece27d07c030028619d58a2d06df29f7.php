<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/zhuoyue/Public/admin/css/admin.css">
    <link rel="stylesheet" href="/zhuoyue/Public/admin/css/font-awesome.css">
    <script type="text/javascript" charset="utf-8" src="/zhuoyue/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/zhuoyue/Public/ueditor/ueditor.all.min.js"></script>
</head>
<body>
    <div class="edit">
        <div class="edit-head"><i class="fa fa-edit"></i> 添加新闻</div>
        <div class="edit-body">
            <form method="post" action="">     
                <div class="form-group">
                    <div class="place">
                        <div class="label"><span class="require-red">*</span>新闻分类：</div>
                        <select>
                            <option value="公司新闻">公司新闻</option>
                            <option value="行业动态">行业动态</option>
                            <option value="常见问题">常见问题</option>
                        </select>         
                    </div>
                </div>        
                <div class="form-group">
                    <div class="place">
                        <div class="label"><span class="require-red">*</span>新闻标题：</div>
                        <input type="text" />         
                    </div>
                </div>
                <div class="form-group">
                    <div class="place">
                        <div class="label">新闻内容：</div>
                        <div class="editor">
                            <script id="editor" type="text/plain"></script>
                            <script type="text/javascript">
                                var ue = UE.getEditor('editor',{   
                                    initialFrameHeight: 460, 
                                    autoFloatEnabled:false, 
                                    scaleEnabled:true,
                                });
                            </script> 
                        </div>
                                
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
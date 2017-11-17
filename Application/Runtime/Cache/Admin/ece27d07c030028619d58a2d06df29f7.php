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
            <form method="post" action="<?php echo U('Admin/News/store');?>" enctype="multipart/form-data">     
                <div class="form-group">
                    <div class="place">
                        <div class="label"><span class="require-red">*</span>新闻分类：</div>
                        <select name="cate">
                            <?php if(is_array($news_item)): $i = 0; $__LIST__ = $news_item;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["name"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                            <!-- <option value="公司新闻">公司新闻</option>
                            <option value="行业动态">行业动态</option>
                            <option value="常见问题">常见问题</option> -->
                        </select>         
                    </div>
                </div>        
                <div class="form-group">
                    <div class="place">
                        <div class="label"><span class="require-red">*</span>新闻标题：</div>
                        <input type="text" name="title" />         
                    </div>
                </div>
                <div class="form-group">
                    <div class="place">
                        <div class="label"><span class="require-red">*</span>新闻图片：</div>
                        <input type="file" name="thumb" />         
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
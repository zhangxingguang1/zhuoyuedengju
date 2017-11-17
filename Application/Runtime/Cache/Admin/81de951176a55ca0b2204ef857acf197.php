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
        <div class="edit-head"><i class="fa fa-edit"></i> 修改新闻</div>
        <div class="edit-body">
            <form method="post" action="<?php echo U('News/update');?>" enctype="multipart/form-data">
                <?php if(is_array($news_item)): $i = 0; $__LIST__ = $news_item;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="form-group">
                        <div class="place">
                            <div class="label"><span class="require-red">*</span>新闻分类：</div>
                            <select name="cate">
                                <option value="<?php echo ($vo["cate"]); ?>"><?php echo ($vo["cate"]); ?></option>
                                <?php if(is_array($other)): $i = 0; $__LIST__ = $other;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option value="<?php echo ($val["name"]); ?>"><?php echo ($val["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>        
                        </div>
                    </div>        
                    <div class="form-group">
                        <div class="place">
                            <div class="label"><span class="require-red">*</span>新闻标题：</div>
                            <input type="text" name="title" value="<?php echo ($vo["title"]); ?>" />         
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="place">
                            <div class="label">新闻图片：</div>
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
                                        initialContent: '<?php echo ($vo["content"]); ?>', 
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
                            <input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
                            <button class="submit" type="submit"> 提交</button>
                            <button class="back" onclick="history.go(-1)"> 返回</button> 
                        </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>      
            </form>
        </div>
    </div>   
</body>
</html>
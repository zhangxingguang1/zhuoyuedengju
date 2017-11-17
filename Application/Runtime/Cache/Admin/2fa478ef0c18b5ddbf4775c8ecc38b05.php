<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>添加产品</title>
    <link rel="stylesheet" href="/zhuoyue/Public/admin/css/admin.css">
    <link rel="stylesheet" href="/zhuoyue/Public/admin/css/font-awesome.css">
</head>
<body>
    <div class="edit">
        <div class="edit-head"><i class="fa fa-edit"></i> 添加产品</div>
        <div class="edit-body">
            <form method="post" action="<?php echo U('Admin/product/pro_add_deal');?>" enctype="multipart/form-data">  
                <div class="form-group">
                    <div class="place">
                        <div class="label"><span class="require-red">*</span>产品名称：</div>
                        <input type="text" name="name" />         
                    </div>
                </div>    
                <div class="form-group">
                    <div class="place">
                        <div class="label"><span class="require-red">*</span>选择图片：</div>
                        <input type="file" name="picture" />       
                    </div>
                </div>   
                <div class="form-group">
                    <div class="place">
                        <div class="label">选择系列：</div>
                        <select name="xilie">
                           <?php if(is_array($xilie)): $i = 0; $__LIST__ = $xilie;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo1["id"]); ?>"><?php echo ($vo1["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="place">
                        <div class="label">选择光源种类：</div>
                        <select name="guangyuan">
                           <?php if(is_array($guangyuan)): $i = 0; $__LIST__ = $guangyuan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo2["id"]); ?>"><?php echo ($vo2["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="place">
                        <div class="label">选择用途分类：</div>
                        <select name="yongtu">
                           <?php if(is_array($yongtu)): $i = 0; $__LIST__ = $yongtu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo3["id"]); ?>"><?php echo ($vo3["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="place">
                        <div class="label">选择光通量：</div>
                        <select name="guangtongliang">
                           <?php if(is_array($guangtongliang)): $i = 0; $__LIST__ = $guangtongliang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo4): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo4["id"]); ?>"><?php echo ($vo4["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>   
                </div>

                        
                <div class="form-group">
                    <div class="place">
                        <div class="label">详细介绍：</div>
                        <textarea rows="5" cols="" name="jieshao"></textarea>         
                    </div>
                </div>
                <div class="form-group">
                    <div class="place">
                        <div class="label">使用说明：</div>
                        <textarea rows="5" cols="" name="shuoming"></textarea>         
                    </div>
                </div>
                <div class="form-group">
                    <div class="place">
                        <div class="label">注意事项：</div>
                        <textarea rows="5" cols="" name="zhuyi"></textarea>         
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
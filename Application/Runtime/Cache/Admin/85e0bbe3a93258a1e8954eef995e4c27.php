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
        <div class="edit-head"><i class="fa fa-edit"></i> 编辑分类</div>
        <div class="edit-body">
            <form method="post" action="<?php echo U('Admin/procate/procate_edit_deal');?>">  
                <?php if(is_array($show)): $i = 0; $__LIST__ = $show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><input type="hidden" name="old_id" style="dispaly:none;" value="<?php echo ($vo["id"]); ?>"><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="form-group">
                    <div class="place">
                        <div class="label">当前名称：</div>
                        
                              
                        <input type="text" disabled="disabled" value="<?php echo ($vo["name"]); ?>" style="width:15%"/>    
                    </div>
                </div>   
                <div class="form-group">
                    <div class="place">
                        <div class="label">当前所属分类：</div>
                        <!-- <select>
                            <?php if(is_array($show)): $i = 0; $__LIST__ = $show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo["fa_class"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>  -->    
                        <input type="text" disabled="disabled" value="<?php echo ($vo["fa_class"]); ?>" style="width:15%"/>    
                    </div>
                </div>       
                  
                <div class="form-group">
                    <div class="place">
                        <div class="label"><span class="require-red">*</span>所属分类类别：</div>
                        <select name="fa_class_id">
                            <option value="1">系列</option>
                            <option value="2">光源种类</option>
                            <option value="3">用途分类</option>
                            <option value="4">光通量分布</option>
                        </select>         
                    </div>
                </div>      
                <div class="form-group">
                    <div class="place">
                        <div class="label"><span class="require-red">*</span>分类名称：</div>
                        <input type="text" name="name" />         
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
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>编辑产品</title>
    <link rel="stylesheet" href="/zhuoyue/Public/admin/css/admin.css">
    <link rel="stylesheet" href="/zhuoyue/Public/admin/css/font-awesome.css">
</head>
<body>
    
    <div class="edit">
        <div class="edit-head"><i class="fa fa-edit"></i> 编辑产品</div>
        <div class="edit-body">
            <div class="form-group">
                <div class="label" style="line-height:132px;">所要编辑的产品：</div>
                <div>
                    <?php if(is_array($show)): $i = 0; $__LIST__ = $show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voshow): $mod = ($i % 2 );++$i;?><span>图片：</span>
                        <img class="pro_img" src="/zhuoyue/Public/<?php echo ($voshow["picture"]); ?>" alt="">
                        <span>产品名称：<?php echo ($voshow["name"]); ?></span>
                    
                </div>
            </div>
            <form method="post" action="<?php echo U('Admin/product/pro_upload');?>" enctype="multipart/form-data">  
                    <input type="hidden" name="old_id" style="dispaly:none;" value="<?php echo ($voshow["id"]); ?>"><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="form-group">
                    <div class="place">
                        <div class="label"><span class="require-red">*</span>产品名称：</div>
                        <?php if(is_array($show)): $i = 0; $__LIST__ = $show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voshow): $mod = ($i % 2 );++$i;?><input type="text" name="name" value="<?php echo ($voshow["name"]); ?>"/><?php endforeach; endif; else: echo "" ;endif; ?>         
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
                            <?php if(is_array($sxilie)): $i = 0; $__LIST__ = $sxilie;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xiala1): $mod = ($i % 2 );++$i;?><option value="<?php echo ($xiala1["id"]); ?>"><?php echo ($xiala1["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                           <?php if(is_array($xilie)): $i = 0; $__LIST__ = $xilie;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo1["id"]); ?>"><?php echo ($vo1["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="place">
                        <div class="label">选择光源种类：</div>                         
                        <select name="guangyuan">
                            <?php if(is_array($sguangyuan)): $i = 0; $__LIST__ = $sguangyuan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xiala2): $mod = ($i % 2 );++$i;?><option value="<?php echo ($xiala2["id"]); ?>"><?php echo ($xiala2["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                           <?php if(is_array($guangyuan)): $i = 0; $__LIST__ = $guangyuan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo2["id"]); ?>"><?php echo ($vo2["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="place">
                        <div class="label">选择用途分类：</div>
                        <select name="yongtu">
                            <?php if(is_array($syongtu)): $i = 0; $__LIST__ = $syongtu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xiala3): $mod = ($i % 2 );++$i;?><option value="<?php echo ($xiala3["id"]); ?>"><?php echo ($xiala3["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                           <?php if(is_array($yongtu)): $i = 0; $__LIST__ = $yongtu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo3["id"]); ?>"><?php echo ($vo3["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="place">
                        <div class="label">选择光通量：</div>
                        <select name="guangtongliang">
                            <?php if(is_array($sguangtongliang)): $i = 0; $__LIST__ = $sguangtongliang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xiala4): $mod = ($i % 2 );++$i;?><option value="<?php echo ($xiala4["id"]); ?>"><?php echo ($xiala4["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                            <?php if(is_array($guangtongliang)): $i = 0; $__LIST__ = $guangtongliang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo4): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo4["id"]); ?>"><?php echo ($vo4["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>   
                </div>

                        
                <div class="form-group">
                    <div class="place">
                        <div class="label">详细介绍：</div>
                        <?php if(is_array($show)): $i = 0; $__LIST__ = $show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voshow): $mod = ($i % 2 );++$i;?><textarea rows="5" cols="" name="jieshao"><?php echo ($voshow["jieshao"]); ?></textarea><?php endforeach; endif; else: echo "" ;endif; ?> 
                                 
                    </div>
                </div>
                <div class="form-group">
                    <div class="place">
                        <div class="label">使用说明：</div>
                        <!-- <textarea rows="5" cols=""></textarea>  -->
                        <?php if(is_array($show)): $i = 0; $__LIST__ = $show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voshow): $mod = ($i % 2 );++$i;?><textarea rows="5" cols="" name="shuoming"><?php echo ($voshow["shuoming"]); ?></textarea><?php endforeach; endif; else: echo "" ;endif; ?>        
                    </div>
                </div>
                <div class="form-group">
                    <div class="place">
                        <div class="label">注意事项：</div>
                        <!-- <textarea rows="5" cols=""></textarea> --> 
                        <?php if(is_array($show)): $i = 0; $__LIST__ = $show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voshow): $mod = ($i % 2 );++$i;?><textarea rows="5" cols="" name="zhuyi"><?php echo ($voshow["zhuyi"]); ?></textarea><?php endforeach; endif; else: echo "" ;endif; ?>        
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
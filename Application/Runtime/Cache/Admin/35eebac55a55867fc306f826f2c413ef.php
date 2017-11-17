<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/zhuoyue/Public/admin/css/admin.css">
    <link rel="stylesheet" href="/zhuoyue/Public/admin/css/font-awesome.css">
</head>
<body>
    <div class="panel">
        <div class="panel-head"><i class="fa fa-navicon"></i> 内容列表</div>
        <form name="myform" method="post" action="<?php echo U('admin/banner/addd');?>"> 
            <div class="padding">  
                <a href="<?php echo U('admin/Banner/ban_add');?>" target="right"><button type="button"><i class="fa fa-plus"></i> 添加图片</button></a>
                <button type="submit"><i class="fa fa-minus"></i> 批量删除</button>
            </div>     
            <div class="result-content">
                <table class="result-tab">
                    <tbody>
                        <tr>
                            <th width="5%"><input type="checkbox" id="all"></th>
                            <th>ID</th>
                            <th>轮播图片</th>
                            <th>图片地址</th>
                            <th>上传时间</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td><input type="checkbox" name="items[]" value="<?php echo ($vo["id"]); ?>"></td>
                                <td><?php echo ($vo["id"]); ?></td>                            
                                <td><img class="ban_img" src="<?php echo U($vo['src']);?>" /></td>
                                <td><?php echo ($vo["src"]); ?></td>
                                <td><?php echo ($vo["time"]); ?></td>
                                <td>
                                    <a href="<?php echo U('Admin/banner/destory');?>/id/<?php echo ($vo["id"]); ?>">删除</a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>         
                    </tbody>
                </table>
            </div>
        </form>
    </div>
    <script src="/zhuoyue/Public/admin/js/jquery.min.js"></script>
    <script>
        $("#all").click(function(){
            $("input[type='checkbox']").attr("checked",this.checked);
        });
    </script>
</body>
</html>
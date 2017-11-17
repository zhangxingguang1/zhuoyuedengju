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
        <div class="padding">  
        <form name="myform" method="post" action="<?php echo U('admin/Procate/procate_delete');?>">  
            <a href="<?php echo U('admin/Procate/procate_add');?>" target="right"><button type="button"><i class="fa fa-plus"></i> 添加分类</button></a>
            <button type="submit"><i class="fa fa-minus"></i> 批量删除</a></button>
        </div>
                 
            <div class="result-content">
                <table class="result-tab">
                    <tbody>
                        <tr>
                            <th width="5%"><input type="checkbox" id="all"></th>
                            <th>ID</th>
                            <th>所属分类类别</th>
                            <th>所属分类id</th>
                            <th>分类名称</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($show)): $i = 0; $__LIST__ = $show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td><input type="checkbox" name="check[]" value="<?php echo ($vo["id"]); ?>"></td>
                                <td><?php echo ($vo["id"]); ?></td>
                                <td><?php echo ($vo["fa_class"]); ?></td>
                                <td><?php echo ($vo["fa_class_id"]); ?></td>
                                <td><?php echo ($vo["name"]); ?></td>          
                                <td>
                                    <a href="<?php echo U('admin/Procate/procate_edit');?>/id/<?php echo ($vo["id"]); ?>">编辑</a> /
                                    <a href="<?php echo U('admin/Procate/procate_delete');?>/id/<?php echo ($vo["id"]); ?>">删除</a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        <!-- <tr>
                            <td><input type="checkbox"></td>
                            <td>22</td>
                            <td>一级</td>
                            <td>一级分类22</td>
                            <td>一级分类22</td>          
                            <td>
                                <a href="">编辑</a> /
                                <a href="">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>22</td>
                            <td>一级</td>
                            <td>一级分类22</td>
                            <td>一级分类22</td>          
                            <td>
                                <a href="">编辑</a> /
                                <a href="">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>22</td>
                            <td>一级</td>
                            <td>一级分类22</td>
                            <td>一级分类22</td>          
                            <td>
                                <a href="">编辑</a> /
                                <a href="">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>22</td>
                            <td>一级</td>
                            <td>一级分类22</td>
                            <td>一级分类22</td>          
                            <td>
                                <a href="">编辑</a> /
                                <a href="">删除</a>
                            </td>
                        </tr>   -->
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
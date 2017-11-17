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
        <form name="myform" method="post" action="<?php echo U('admin/News/lot_del');?>">
            <div class="padding">  
                <a href="<?php echo U('admin/News/news_add');?>" target="right"><button type="button"><i class="fa fa-plus"></i> 添加内容</button></a>
                <button><i class="fa fa-minus"></i> 批量删除</button>
            </div>           
            <div class="result-content">
                <table class="result-tab">
                    <tbody>
                        <tr>
                            <th width="5%"><input type="checkbox" id="all"></th>
                            <th>ID</th>
                            <th>新闻分类</th>
                            <th>新闻标题</th>
                            <th>新闻图片</th>
                            <th>上传时间</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td><input type="checkbox" name="items[]" value="<?php echo ($vo["id"]); ?>"></td>
                                <td><?php echo ($vo["id"]); ?></td>
                                <td><?php echo ($vo["cate"]); ?></td>
                                <td><?php echo ($vo["title"]); ?></td>
                                <td><img class="news_img" src="<?php echo U($vo['src']);?>" /></td>
                                <td><?php echo ($vo["date"]); ?></td>
                                <td><a href="<?php echo U('Admin/News/news_edit');?>/id/<?php echo ($vo["id"]); ?>">编辑</a> /
                                    <a href="<?php echo U('Admin/News/destroy');?>/id/<?php echo ($vo["id"]); ?>">删除</a>
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
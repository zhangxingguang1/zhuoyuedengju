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
            <button><a href="<?php echo U('admin/Newscate/newscate_add');?>" target="right"><i class="fa fa-plus"></i> 添加分类</a></button>
            <button><a href=""><i class="fa fa-minus"></i> 批量删除</a></button>
        </div>
        <form name="myform" method="post">           
            <div class="result-content">
                <table class="result-tab">
                    <tbody>
                        <tr>
                            <th width="5%"><input type="checkbox"></th>
                            <th>ID</th>
                            <th>分类名称</th>
                            <th>操作</th>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>1</td>
                            <td>公司新闻</td>          
                            <td>
                                <a href="">编辑</a> /
                                <a href="">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>2</td>
                            <td>行业动态</td>          
                            <td>
                                <a href="">编辑</a> /
                                <a href="">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>3</td>
                            <td>常见问题</td>          
                            <td>
                                <a href="">编辑</a> /
                                <a href="">删除</a>
                            </td>
                        </tr> 
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</body>
</html>
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
            <button><a href="<?php echo U('admin/Classify/classify_add');?>" target="right"><i class="fa fa-plus"></i> 添加分类</a></button>
            <button><a href=""><i class="fa fa-minus"></i> 批量删除</a></button>
        </div>
        <form name="myform" method="post">           
            <div class="result-content">
                <table class="result-tab">
                    <tbody>
                        <tr>
                            <th width="5%"><input type="checkbox"></th>
                            <th>ID</th>
                            <th>分类级数</th>
                            <th>上级分类</th>
                            <th>分类名称</th>
                            <th>操作</th>
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
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</body>
</html>
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
            <button><a href="<?php echo U('admin/Product/pro_add');?>" target="right"><i class="fa fa-plus"></i> 添加产品</a></button>
            <button><a href=""><i class="fa fa-minus"></i> 批量删除</a></button>
        </div>
        <form name="myform" method="post">           
            <div class="result-content">
                <table class="result-tab">
                    <tbody>
                        <tr>
                            <th width="5%"><input type="checkbox"></th>
                            <th>ID</th>
                            <th>产品名称</th>
                            <th>图片</th>
                            <th>内容介绍</th>
                            <th>产品参数</th>
                            <th>操作</th>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>22</td>
                            <td>产品22</td>
                            <td><img class="pro_img" src="/zhuoyue/Public/admin/images/1.jpg" alt=""></td>
                            <td>产品22的一些介绍</td>
                            <td>../Public/uploads/2016-12-22/585b2a13dcd60.jpg</td>
                            <td>
                                <a href="">编辑</a> /
                                <a href="">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>22</td>
                            <td>产品22</td>
                            <td><img class="pro_img" src="/zhuoyue/Public/admin/images/1.jpg" alt=""></td>
                            <td>产品22的一些介绍</td>
                            <td>../Public/uploads/2016-12-22/585b2a13dcd60.jpg</td>
                            <td>
                                <a href="">编辑</a> /
                                <a href="">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>22</td>
                            <td>产品22</td>
                            <td><img class="pro_img" src="/zhuoyue/Public/admin/images/1.jpg" alt=""></td>
                            <td>产品22的一些介绍</td>
                            <td>../Public/uploads/2016-12-22/585b2a13dcd60.jpg</td>
                            <td>
                                <a href="">编辑</a> /
                                <a href="">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>22</td>
                            <td>产品22</td>
                            <td><img class="pro_img" src="/zhuoyue/Public/admin/images/1.jpg" alt=""></td>
                            <td>产品22的一些介绍</td>
                            <td>../Public/uploads/2016-12-22/585b2a13dcd60.jpg</td>
                            <td>
                                <a href="">编辑</a> /
                                <a href="">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>22</td>
                            <td>产品22</td>
                            <td><img class="pro_img" src="/zhuoyue/Public/admin/images/1.jpg" alt=""></td>
                            <td>产品22的一些介绍</td>
                            <td>../Public/uploads/2016-12-22/585b2a13dcd60.jpg</td>
                            <td>
                                <a href="">编辑</a> /
                                <a href="">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>22</td>
                            <td>产品22</td>
                            <td><img class="pro_img" src="/zhuoyue/Public/admin/images/1.jpg" alt=""></td>
                            <td>产品22的一些介绍</td>
                            <td>../Public/uploads/2016-12-22/585b2a13dcd60.jpg</td>
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
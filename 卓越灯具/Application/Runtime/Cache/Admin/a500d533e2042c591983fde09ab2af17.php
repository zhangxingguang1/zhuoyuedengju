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
            <button><a href="<?php echo U('admin/News/news_add');?>" target="right"><i class="fa fa-plus"></i> 添加内容</a></button>
            <button><a href=""><i class="fa fa-minus"></i> 批量删除</a></button>
        </div>
        <form name="myform" method="post">           
            <div class="result-content">
                <table class="result-tab">
                    <tbody>
                        <tr>
                            <th width="5%"><input type="checkbox"></th>
                            <th>ID</th>
                            <th>新闻标题</th>
                            <th>新闻内容</th>
                            <th>图片</th>
                            <th>图片地址</th>
                            <th>上传时间</th>
                            <th>操作</th>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>22</td>
                            <td>标题22</td>
                            <td>内容22</td>
                            <td><img class="news_img" src="/zhuoyue/Public/admin/images/1.jpg" alt=""></td>
                            <td>../Public/uploads/2016-12-22/585b2a13dcd60.jpg</td>
                            <td>2017-5-23</td>
                            <td><a href="">编辑</a> /
                                <a href="">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>22</td>
                            <td>标题22</td>
                            <td>内容22</td>
                            <td><img class="news_img" src="/zhuoyue/Public/admin/images/1.jpg" alt=""></td>
                            <td>../Public/uploads/2016-12-22/585b2a13dcd60.jpg</td>
                            <td>2017-5-23</td>
                            <td><a href="">编辑</a> /
                                <a href="">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>22</td>
                            <td>标题22</td>
                            <td>内容22</td>
                            <td><img class="news_img" src="/zhuoyue/Public/admin/images/1.jpg" alt=""></td>
                            <td>../Public/uploads/2016-12-22/585b2a13dcd60.jpg</td>
                            <td>2017-5-23</td>
                            <td><a href="">编辑</a> /
                                <a href="">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>22</td>
                            <td>标题22</td>
                            <td>内容22</td>
                            <td><img class="news_img" src="/zhuoyue/Public/admin/images/1.jpg" alt=""></td>
                            <td>../Public/uploads/2016-12-22/585b2a13dcd60.jpg</td>
                            <td>2017-5-23</td>
                            <td><a href="">编辑</a> /
                                <a href="">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>22</td>
                            <td>标题22</td>
                            <td>内容22</td>
                            <td><img class="news_img" src="/zhuoyue/Public/admin/images/1.jpg" alt=""></td>
                            <td>../Public/uploads/2016-12-22/585b2a13dcd60.jpg</td>
                            <td>2017-5-23</td>
                            <td><a href="">编辑</a> /
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
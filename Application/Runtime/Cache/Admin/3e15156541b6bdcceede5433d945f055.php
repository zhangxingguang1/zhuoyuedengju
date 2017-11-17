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
        <form name="myform" method="post" action="<?php echo U('Admin/Message/advadd');?>">
            <div class="padding">  
                <button type="submit"><i class="fa fa-minus"></i> 批量删除</button>
            </div>     
            <div class="result-content">
                <table class="result-tab">
                    <tbody>
                        <tr>
                            <th width="5%"><input class="allChoose" id="all" type="checkbox"></th>
                            <th>ID</th>
                            <th>用户名</th>
                            <th>留言内容</th>
                            <th>联系方式</th>
                            <th>留言时间</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td><input name="item[]" value="<?php echo ($vo["id"]); ?>" type="checkbox"></td>
                                <td><?php echo ($vo["id"]); ?></td>
                                <td><?php echo ($vo["user"]); ?></td>
                                <td><?php echo ($vo["content"]); ?></td>
                                <td><?php echo ($vo["link"]); ?></td> 
                                <td><?php echo ($vo["date"]); ?></td>                        
                                <td>
                                    <!-- <a href="/C2C/index.php/Admin/adv/destory/id/22">编辑</a> / -->
                                    <a href="<?php echo U('Admin/message/destory');?>/id/<?php echo ($vo["id"]); ?>">删除</a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        <!-- <tr>
                            <td><input name="id[]" value="23}" type="checkbox"></td>
                            <td>23</td>
                            <td>用户名23</td>
                            <td>留言内容23</td> 
                            <td>2017-5-23</td>                           
                            <td>
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">编辑</a> /
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input name="id[]" value="24}" type="checkbox"></td>
                            <td>24</td>
                            <td>用户名24</td>
                            <td>留言内容24</td>
                            <td>2017-5-23</td>                            
                            <td>
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">编辑</a> /
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input name="id[]" value="25}" type="checkbox"></td>
                            <td>25</td>
                            <td>用户名25</td>
                            <td>留言内容25</td> 
                            <td>2017-5-23</td>                           
                            <td>
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">编辑</a> /
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input name="id[]" value="26}" type="checkbox"></td>
                            <td>26</td>
                            <td>用户名26</td>
                            <td>留言内容26</td> 
                            <td>2017-5-23</td>                           
                            <td>
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">编辑</a> /
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input name="id[]" value="27}" type="checkbox"></td>
                            <td>27</td>
                            <td>用户名27</td>
                            <td>留言内容27</td> 
                            <td>2017-5-23</td>                           
                            <td>
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">编辑</a> /
                                <a href="/C2C/index.php/Admin/adv/destory/id/22">删除</a>
                            </td>
                        </tr>             -->        
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
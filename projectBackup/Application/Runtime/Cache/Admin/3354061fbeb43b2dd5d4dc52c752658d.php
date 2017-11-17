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
        <div class="edit-head"><i class="fa fa-key"></i> 修改密码</div>
        <div class="edit-body">
            <form method="post" action="<?php echo U('Admin/Password/password');?>">
                <div class="form-group">
                    <div class="place">
                        <div class="label">管理员帐号：</div>
                        <span><?php echo ($_SESSION['username']); ?></span>
                    </div>
                </div>      
                <div class="form-group">
                    <div class="place">
                        <div class="label">原始密码：</div>
                        <input type="password" />       
                    </div>
                </div>      
                <div class="form-group">
                    <div class="place">
                        <div class="label">新密码：</div>
                        <input type="password" placeholder="请输入新密码" />         
                    </div>
                </div>
                <div class="form-group">
                    <div class="place">
                        <div class="label">确认新密码：</div>
                        <input type="password" placeholder="请再次输入新密码" />          
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
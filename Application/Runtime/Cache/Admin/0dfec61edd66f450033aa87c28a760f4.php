<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录后台管理中心</title>
    <link rel="stylesheet" href="/zhuoyue/Public/admin/css/admin.css">
    <link rel="stylesheet" href="/zhuoyue/Public/admin/css/font-awesome.css">  
</head>
<body>
<div class="container">
    <form class="myform" action="<?php echo U('Login/login');?>" method="post">
        <div class="login-panel">
            <div class="login-panel-head">
                <h1>后台管理中心</h1>
            </div>

            <div class="login-panel-body">
                <div class="form-group">
                    <div class="field">
                        <input type="text" name="username" placeholder="登录账号" required="required" />
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="form-group">
                    <div class="field">
                        <input type="password" name="password" placeholder="登录密码" required="required" />
                        <i class="fa fa-key"></i>
                    </div>
                </div>
                <div class="form-group">
                    <div class="field">
                        <input type="text" name="verify" placeholder="填写右侧的验证码" required="required" />
                        <img id="ver" src="<?php echo U('Admin/Login/verify');?>" alt="verify_code" onclick="this.src='<?php echo U('Admin/Login/verify');?>'" />
                    </div>
                </div>
            </div>

            <div class="login-panel-footer">
                <input type="submit" value="登录">
            </div>
        </div>
    </form>          
</div>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
    <div>
        <form action="" style="padding:20px">
            <div class="man_add_top">
                <div>
                    <div class="man_add_left">
                        <span><span class="c-red">*</span>管理员：</span>
                    </div>
                    <div class="man_add_right"><input type="text" class="input-text" value="" placeholder="" id="adminName" name="adminName"></div>
                </div>
                <div>
                    <div class="man_add_left"><span class="c-red">*</span>初始密码：</div>
                    <div class="man_add_right"><input type="password" class="input-text" autocomplete="off" value="" placeholder="密码" id="password" name="password"></div>
                </div>
                <div>
                    <div class="man_add_left"><span class="c-red">*</span>确认密码：</div>
                    <div class="man_add_right"><input type="password" class="input-text" autocomplete="off"  placeholder="确认新密码" id="password2" name="password2"></div>
                </div>
                <div>
                    <div class="man_add_left"><span class="c-red">*</span>性别：</div>
                    <div class="man_add_right">
                        <div class="radio-box">
                            <input name="sex" type="radio" id="sex-1" checked>
                            <span>男</span>
                        </div>
                        <div class="radio-box">
                            <input type="radio" id="sex-2" name="sex">
                            <span>女</span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="man_add_left"><span class="c-red">*</span>手机：</div>
                    <div class="man_add_right"><input type="text" class="input-text" value="" placeholder="" id="phone" name="phone"></div>
                </div>
                <div>
                    <div class="man_add_left"><span class="c-red">*</span>邮箱：</div>
                    <div class="man_add_right"><input type="text" class="input-text" placeholder="@" name="email" id="email"></div>
                </div>
                <div>
                    <div class="man_add_left">角色：</div>
                    <div class="man_add_right">
                        <span class="select-box" style="width:150px;">
                        <select class="select" name="adminRole" size="1">
                            <option value="0">超级管理员</option>
                            <option value="1">总编</option>
                            <option value="2">栏目主辑</option>
                            <option value="3">栏目编辑</option>
                        </select>
                        </span>
                    </div>
                </div>
                <div>
                    <div class="man_add_left">备注：</div>
                    <div class="man_add_right">
                        <textarea name="" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="textarealength(this,100)"></textarea>
                    </div> 
                </div>     
            </div>                
            
            <div class="man_add_btn"><input class="but_sub" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;"></div>
        </form>
    </div>
</body>
</html>
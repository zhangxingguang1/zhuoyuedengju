<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/zhuoyue/Public/admin/css/admin.css">
    <link rel="stylesheet" href="/zhuoyue/Public/admin/css/font-awesome.css">
    <!-- <style>
        .cla_add_top{
            height: 250px;
        }
        .cla_add_left{
            width: 20%;
            float: left;
            text-align: right;
            height: 30px;
            line-height: 30px;
        }
        .cla_add_right{
            padding-left: 3%;
            height: 50px;
            width: 77%;
            float: left;
        }
        .c-red{
            color:red;
        }
        input, textarea, keygen, select, button{
            padding: 4px;
            line-height: 21px;
            border: 1px solid #ddd;
        }
        .input-text:hover,.textarea:hover{
            border: solid 1px #3bb4f2;
        }
        input[type=text],input[type=password],textarea{
            width: 96%;
        }
        input[type=text]:focus, input[type=password]:focus {
           /*border:solid 1px #0f9ae0 \9;*/
           border-color:rgba(82,168,236,0.8);
           box-shadow:0 1px 1px rgba(0,0,0,0.075) inset,0 0 8px rgba(102,175,233,0.6);
        }
        .radio-box{
            padding:7px;
            width: 10%;
            display: block;
            float: left;
        }
        .radio-box input{
            height: 20px;
            width: 50%;
            display: block;
            float: left;
        }
        .radio-box span{
            width: 50%;
            display: block;
            float: left;
        }
        .cla_add_top textarea{
            height: 100px;
        }
        .cla_add_btn{
            margin-top: 10px;
            width: 100%;
            height: 40px;
        }
        .but_sub{
            width: 6%;
            margin-left: 23%;
            color: #fff;
            background-color: #5a98de;
            border-color: #5a98de;
            border-radius: 4px;
        }
        .but_sub:hover{
            color: #fff;
            background-color: #0a6999;
            border-color: #0a6999;
        }     
        .cla_inp{
            width: 30%;
        }  
        .cla_add_top select{
            width: 10%;
        }
    </style> -->
</head>
<body>
    <!-- <div>
        <form action="" style="padding:20px">
            <div class="cla_add_top">
                <div>
                    <div class="cla_add_left">
                        <span>分类级别：</span>
                    </div>
                    <div class="cla_add_right">
                        <span class="select-box" style="width:150px;">
                        <select class="select" name="adminRole" size="1">
                            <option value="0">一级分类</option>
                            <option value="1">二级分类</option>
                            <option value="2">三级分类</option>
                        </select>
                        </span>
                    </div>
                </div>
                <div>
                    <div class="cla_add_left">
                        <span>一级分类：</span>
                    </div>
                    <div class="cla_add_right">
                        <span class="select-box" style="width:150px;">
                        <select class="select" name="adminRole" size="1">
                            <option value="0">一级分类1</option>
                            <option value="1">一级分类2</option>
                            <option value="2">一级分类3</option>
                        </select>
                        </span>
                    </div>
                </div>
                <div>
                    <div class="cla_add_left">
                        <span>二级分类：</span>
                    </div>
                    <div class="cla_add_right">
                        <span class="select-box" style="width:150px;">
                        <select class="select" name="adminRole" size="1">
                            <option value="0">二级分类1</option>
                            <option value="1">二级分类2</option>
                            <option value="2">二级分类3</option>
                        </select>
                        </span>
                    </div>
                </div>
                <div>
                    <div class="cla_add_left">
                        <span>分类名称：</span>
                    </div>
                    <div class="cla_add_right cla_inp"><input type="text" class="input-text" value="" placeholder="" id="adminName" name="adminName"></div>
                </div>

            </div>                
            
            <div class="cla_add_btn"><input class="but_sub" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;"></div>
        </form>
    </div> -->
    <div class="edit">
        <div class="edit-head"><i class="fa fa-edit"></i> 添加分类</div>
        <div class="edit-body">
            <form method="post" action="">  
                <div class="form-group">
                    <div class="place">
                        <div class="label"><span class="require-red">*</span>分类级数：</div>
                        <select>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>         
                    </div>
                </div>    
                <div class="form-group">
                    <div class="place">
                        <div class="label"><span class="require-red">*</span>上级分类：</div>
                        <select>
                            <option value="无">无</option>
                            <option value="高杆灯系列">高杆灯系列</option>
                            <option value="中杆灯系列">中杆灯系列</option>
                            <option value="LED灯系列">LED灯系列</option>
                        </select>         
                    </div>
                </div>        
                <div class="form-group">
                    <div class="place">
                        <div class="label">分类名称：</div>
                        <input type="text" />         
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
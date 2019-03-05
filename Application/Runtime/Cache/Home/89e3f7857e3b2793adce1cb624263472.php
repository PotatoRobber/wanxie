<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .a{
            display: block;
            width: 160px;
            padding: 5px 0;
            margin: 10px auto 0 auto;
            background-color: #c53e3b;
            text-decoration: none;
            color: whitesmoke;
        }
        .container{
            width: 100%;
            margin-top: 20px;
        }
        .lefta,.right{
            float: left;
        }
        .lefta{
            width: 15%;
            height: 600px;
            background-color: #181818;
        }
        .right{
            width: 84%;
            height: 600px;

        }

        .circle{
            margin: 10px auto 0 auto;
            border: 1px solid whitesmoke;
            height: 100px;
            width: 100px;
            border-radius: 100px;
            background-image: url("/zxx/wanxie/Public/images/tx.jpg");
            background-repeat: no-repeat;
            background-size: 200px;
            background-position: center;
        }

    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/zxx/wanxie/Public/css/countstyle.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
<div class="headertop_desc">
    <div class="wrap">
        <div class="nav_list">
            <ul>
                <li><a href="../Index/index">首页</a></li>
                <li><a href="/">导航</a></li>
                <li><a href="/">联系我们</a></li>
            </ul>
        </div>
        <div class="account_desc">

            <ul>
                <li><a href="../Register/Register">注册</a></li>
                <li><a href="../Userinfo/loginout" onclick="return confirm('确认注销登录吗?')">退出登录</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>

<div class="container" >
    <div class="lefta" style="text-align: center">
        <div class="circle">
        </div>
        <h2 style="color: whitesmoke; font-size: 24px; margin-top: 10px">欢迎,<?php echo ($_SESSION['user']['username']); ?></h2>
        <div style="margin-top: 50px">
            <a href="allorder" class="a" target="myframe">我的订单</a>
            <a href="countinfo" class="a" target="myframe">地址管理</a>
        </div>
    </div>

    <div class="right">
        <iframe name="myframe" src="allorder" width="100%" height="650px" ></iframe>
    </div>
</div>
</body>
</html>
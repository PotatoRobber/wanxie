<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .box404{
            width: 100%;
            position: relative;
        }
        .box404>div{
            width: 22.85%;
            height: 75px;
            text-align: center;
            line-height: 75px;
            background-color: #bd432f;
            border-radius: 10px;
            border: solid 3px #ffffff;
            position: absolute;
            bottom: 20%;
            left: 40%;
        }
        .box404>div>a{
            width: 6.73%;
            height: 29px;
            font-size: 30px;
            font-weight: normal;
            font-stretch: normal;
            letter-spacing: 0;
            color: #ffffff;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="box404">
    <div>
        <a href="/zxx/wanxie/index.php/Home/index/index">去首页找</a>
    </div>
    <img width="100%" src="/zxx/wanxie/Public/images/error/404.png" alt="错误"/>
</div>
</body>
</html>
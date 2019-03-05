<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>详情页</title>
    <!--<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">-->
    <link rel='stylesheet' href='/zxx/wanxie/Public/tab/css/jquery.cardtabs.css'>
    <script src="http://cdn.bootcss.com/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="/zxx/wanxie/Public/tab/js/jquery-1.11.0.min.js"><\/script>')</script>
    <script type='text/javascript' src='/zxx/wanxie/Public/tab/js/jquery.cardtabs.js'></script>


    <style>

        body{
            width: 100%;

        }
        ul{
            list-style: none;
        }
        .main-container{
            position: relative;
            width: 73%;
            min-width: 1100px;
            margin: 0 auto;
            /*margin-top: 5px;*/
        }
        .littleNav{
            width: 100%;
            height: 25px;
            line-height: 25px;
        }
        .littleNav>ul{
            list-style: none;
        }
        .littleNav>ul li{
            float: left;

            cursor: pointer;
        }
        .Rarrow{
            float: left;
            margin: 0 5px;
        }

        .littleNav a,span{
            text-decoration: none;
            color: #ce3d3a;
            font-size: 14px;

        }
        hr{
            width: 100%;
            border: 0.7px solid #d9dbdb;
        }
        .topPart{

        }
        .leftPart{

            display: inline-block;
            width: 650px;
        }
        .rightPart{


            display: inline-block;
            width: 39%;

        }
        .photoList{
            display: inline-block;
            margin-top: 80px;
            margin-left: 15px;
            margin-right: 25px;

        }
        .photoList li{
            margin-bottom: 20px;

            border: 1px solid #fff;

        }
        .photoList li:hover{
            border: 1px solid #ce3d3a;
        }
        .bigPhoto{
            display: inline-block;
            margin-top: 80px;
            /*margin-right: 50px;*/
            /*float: right;*/
        }
        .commodityBuy>div{
            display: inline-block;
        }
        .commodityTitle{
            width: 100%;
            font-family: MicrosoftYaHei;
            font-size: 36px;
            font-weight: normal;
            font-stretch: normal;
            letter-spacing: 0;
            color: #333333;
        }
        .s-commodityTitle{
            width: 200px;
            height: 17px;
            font-family: MicrosoftYaHei;
            font-size: 18px;
            font-weight: normal;
            font-stretch: normal;
            letter-spacing: 0;
            color: #888888;
            margin: 5px 0 15px 0;
        }
        .commodityPrice>span:first-child{
            width: 16px;
            height: 19px;
            font-family: SFProDisplay-Regular;
            font-size: 26px;
            font-weight: normal;
            font-stretch: normal;
            letter-spacing: 0;
            color: #888888;
        }
        .commodityPrice>span:nth-child(2){
            width: 54px;
            height: 25px;
            font-family: MicrosoftYaHei;
            font-size: 32px;
            font-weight: normal;
            font-stretch: normal;
            letter-spacing: 0;
            color: #ce3d3a;

        }
        .commodityPrice{
            margin-top: 15px;

        }
        .redBox{
            display: inline-block;
            height: 16px;
            background: #ce3d3a ;
            font-family: MicrosoftYaHei;
            font-size: 12px;
            font-weight: normal;
            font-stretch: normal;
            letter-spacing: 0;
            color: #ffffff;
            margin-right: 5px;
            margin-left: 30px;

        }
        .width36{
            width: 36px;
        }
        .width25{
            width: 25px;
        }
        .commodityActivity{
            margin-top: 20px;
            margin-bottom: 25px;
        }
        .commodityActivity>ul>li>span:nth-child(2){
            width: 39px;
            height: 13px;
            font-family: MicrosoftYaHei;
            font-size: 12px;
            font-weight: normal;
            font-stretch: normal;
            letter-spacing: 1px;
            color: #666666;
        }
        .commodityColor>div{
            width: 28px;
            height: 14px;
            font-family: MicrosoftYaHei;
            font-size: 14px;
            font-weight: normal;
            font-stretch: normal;
            letter-spacing: 0px;
            color: #666666;
            margin-bottom: 15px;
        }
        .commodityColor>ul>li{
            width: 42px;
            height: 32px;
            border: solid 1px #ce3d3a;
            font-family: MicrosoftYaHei;
            font-size: 14px;
            font-weight: normal;
            font-stretch: normal;
            letter-spacing: 0px;
            color: #333333;
            line-height: 29px;
            text-align: center;
            cursor: pointer;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .commodityRule{
            margin-top: 10px;
        }
        .grayText{
            width: 28px;
            height: 12px;
            font-family: MicrosoftYaHei;
            font-size: 14px;
            font-weight: normal;
            font-stretch: normal;
            letter-spacing: 0px;
            color: #666666;
        }
        .commodityRule>div{
            margin-bottom: 15px;
        }
        .commodityRule li{
            width: 42px;
            height: 32px;
            border: solid 1px #ce3d3a;
            font-family: MicrosoftYaHei;
            font-size: 14px;
            font-weight: normal;
            font-stretch: normal;
            letter-spacing: 0px;
            color: #333333;
            display: inline-block;
            text-align: center;
            line-height: 32px;
            margin-right: 5px;
            margin-bottom: 15px;
            cursor: pointer;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .commodityNumber{
            position: relative;
            margin-top: 5px;
            margin-bottom: 15px;

        }
        .commodityInteraction{
            margin-bottom: 20px;
        }
        .commodityInteraction>span:nth-child(2n-1){
            margin-right: 10px;
        }
        .commodityInteraction>span:nth-child(2){
            margin-right: 25px;
        }
        .commodityBuy>div:first-child{
            width: 190px;
            height: 40px;
            border: solid 1px #ce3d3a;
            font-family: MicrosoftYaHei;
            font-size: 18px;
            font-weight: normal;
            font-stretch: normal;
            letter-spacing: 0px;
            color: #ce3d3a;
            text-align: center;
            line-height: 40px;
            margin-right: 15px;
        }
        .commodityBuy>div:nth-child(2){
            width: 190px;
            height: 40px;
            background-color: #ce3d3a;
            border: solid 1px #ce3d3a;
            font-family: MicrosoftYaHei;
            font-size: 18px;
            font-weight: normal;
            font-stretch: normal;
            letter-spacing: 0px;
            color: #ffffff;
            text-align: center;
            line-height: 40px;
        }
        .calButton{
            display: inline-block;
            width: 36px;
            height: 32px;
            border: 1px solid #666;
            border-radius: 2px;
            background: #ffffff;
            color: #666666;
            font-size: 30px;
            text-align: center;
            line-height: 27px;
        }
        .commodityNumber>div:nth-child(1){
            position: absolute;
            left: 0%;
        }
        .commodityNumber>div:last-child{
            position: absolute;
            left: 31.5%;
            border-left-width: 0;
        }
        .commodityNumber input{
            position: absolute;
            left:15.5%;
            width: 70px;
            height: 32px;
            outline: none;
            z-index: 2;
            border: 1px solid #666;
        }

        input::-webkit-outer-spin-button,input::-webkit-inner-spin-button{
            -webkit-appearance: none !important;
        }

    </style>
</head>
<body>

<head>
    <link rel="stylesheet" type="text/css" href="/zxx/wanxie/Public/css/headerStyle.css">

    <script src="/zxx/wanxie/Public/js/header-js.js"></script>

</head>

<div class="header">
    <div class="top">
        <div id="options">
            <a href="../Userinfo/userlogin" class="login"><span class="denglv">登录</span><span id="user" style="display: none">欢迎,<?php echo ($_SESSION['user']['username']); ?></span></a><span id="divide" style="color: white">&nbsp;/&nbsp;</span><a id="register" href="../Register/Register">注册</a>
            <a id="d">订单</a>
            <a>收藏</a>
            <a>帮助中心</a>
            <a href="../Userinfo/loginout" id="exit" style="visibility: hidden" onclick="return confirm('确认注销登录吗？')">退出登录</a>
        </div>
    </div>
    <div class="bottom">
          <div class="logo">
            <img src="/zxx/wanxie/Public/images/logo.png"/>
          </div>

        <div id="nav">
            <a href="../Index/index" class="active">首页</a>
            <a href="../Index/fenlei?catename=男鞋">男鞋</a>
            <a href="../Index/fenlei?catename=女鞋">女鞋</a>
            <a href=" ../Customized/Customized">私人订制</a>
            <a href="">WanXie APP</a>
        </div>

        <div class="search">
            <input id="search-box" type="text" name="search"/><input type="submit" id="button" value="搜索">
        </div>
    </div>
</div>
<hr>

    <div class="main-container">
        <div class="littleNav">
            <ul>
                <a href="#" id="catename"><li><?php echo ($p["catename"]); ?></li></a><span class="Rarrow">&gt;</span>
                <a href="#"><li><?php echo ($p["typename"]); ?></li></a><span class="Rarrow">&gt;</span>
                <a href="#"><li><?php echo ($p["productname"]); ?></li></a>
            </ul>
        </div>
        <div class="topPart">
            <div class="leftPart">
                <ul class="photoList">
                    <li>
                        <img src="/zxx/wanxie<?php echo ($p["productimg"]); ?>" width="70px"/>
                    </li>
                    <li>
                        <img src="/zxx/wanxie<?php echo ($p["productimg"]); ?>" width="70px"/>
                    </li>
                    <li>
                        <img src="/zxx/wanxie<?php echo ($p["productimg"]); ?>" width="70px"/>
                    </li>
                    <li>
                        <img src="/zxx/wanxie<?php echo ($p["productimg"]); ?>" width="70px"/>
                    </li>
                    <li>
                        <img src="/zxx/wanxie<?php echo ($p["productimg"]); ?>" width="70px"/>
                    </li>
                </ul>
                <div class="bigPhoto">
                    <img src="/zxx/wanxie<?php echo ($p["productimg"]); ?>" width="500px" height="430px"/>
                </div>

            </div>
            <div class="rightPart">
                <div class="commodityTitle"><?php echo ($p["productname"]); ?></div>
                <div class="s-commodityTitle"><?php echo ($p["brandname"]); ?>/<?php echo ($p["catename"]); ?>/<?php echo ($p["typename"]); ?></div>
                <div class="commodityPrice"><span>￥</span><span><?php echo ($p["productprice"]); ?></span></div>
                <div class="commodityActivity">
                    <ul>
                        <li><span class="redBox width36">免运费</span><span>免运费</span></li>
                        <li><span class="redBox width25">满减</span><span>满699-20元</span></li>
                        <li><span class="redBox width25">满减</span><span>满1400-200元</span></li>
                    </ul>
                </div>
                <div class="commodityColor">
                    <div>颜色</div>
                    <ul>
                        <li>黑色</li>
                    </ul>
                </div>
                <div class="commodityRule">
                    <div class="grayText">尺码</div>
                    <ul>
                        <li>40</li>
                        <li>40.5</li>
                        <li>41</li>
                        <li>42</li>
                        <li>42.5</li>
                        <li>43</li>
                    </ul>
                </div>

                 <form method="post" action="../Index/addtomycar" id="mycar">
                    <div class="commodityNumber">
                        <input type="hidden" name="productid" value="<?php echo ($p["productid"]); ?>">
                       <span class="grayText">数量</span>
                       <div class="calButton" id="substract" style="cursor: pointer">-</div>
                       <input id="num" type="number" value="1" name="pnumber" min="0" max="<?php echo ($p["productcount"]); ?>" style="text-align: center">
                       <div class="calButton" id="add" style="cursor: pointer">+</div>
                    </div>
                  </form>
                <div class="commodityInteraction">
                    <span class="grayText">收藏</span><span class=""><img src="/zxx/wanxie/Public/images/Detail/pic6.png"/></span>
                    <span class="grayText">分享</span><span class=""><img src="/zxx/wanxie/Public/images/Detail/pic2.png"/></span>
                </div>
                <div class="commodityBuy">
                    <div style="cursor: pointer">立即购买</div>
                    <div onclick="subform()" style="cursor: pointer">加入购物车</div>
                    <script>
                        function subform() {
                            if (confirm("确认加入购物车？")) {
                                document.getElementById('mycar').submit();
                            }
                        }
                    </script>
                </div>


            </div>
        </div>
            <div class="Detailcontainer" style="width:960px;background:#fff;margin:20px auto;padding:20px;">
                <div class='tabsholder1'>
                    <div data-tab="商品详情">
                        <img src="/zxx/wanxie/Public/images/Detail/pic13.png" width="1000px"/></div>
                    <div data-tab="&nbsp;用户评价">
                        评价
                    </div>
                </div>
            </div>



        <script type='text/javascript'>
            $(function () {
                var arg=$("#catename").text();
                if (arg=='男鞋') {
                    $(".nanxie").css("color","#c53e3b");
                }
                else {
                    $(".nvxie").css("color","#c53e3b");
                }

                $("#substract").click(function () {
                    var num=parseInt($("#num").val());
                    if (num>0) {
                        $("#num").val(num-1);
                    }
                });

                $("#add").click(function () {
                    var max= $("#num").prop("max");
                    var num=parseInt($("#num").val());
                    if (num<max){
                        $("#num").val(num+1);
                    }
                });

                $('.tabsholder1').cardTabs();
                $('.tabsholder2').cardTabs({theme: 'inset'});
                $('.tabsholder3').cardTabs({theme: 'graygreen'});
                $('.tabsholder4').cardTabs({theme: 'wiki'});

                //点击小图，换大图换相应的src
                $('.photoList>li>img').mousemove(function () {
                    var clickSrc = this.src;

                    $('.bigPhoto>img').attr('src',clickSrc);
                });

                //点击选中，选项边框变色
                $('.commodityColor>ul>li').click(function () {
                    $('.commodityColor>ul>li').css('border','2px solid #c53e3b');

                });
                $('.commodityRule>ul>li').click(function () {
                    $('.commodityRule>ul>li').css('border','1px solid #c53e3b');
                    $(this).css('border','2px solid #c53e3b');

                });
            });

        </script>
    </div>

<head>
    <link rel="stylesheet" type="text/css" href="/zxx/wanxie/Public/css/headerStyle.css">
</head>

<footer class="full_footer" id="footer">
    <div class="nav_links">
        <div class="nav_block">
            <ul>
                <li class="footer_category_title">关于 wanxie</li>
                <li><a href="#" title="关于我们" target="_blank">关于我们</a></li>
                <li><a href="#" title="新闻" target="_blank">新闻</a></li>
                <li><a href="#" title="合作伙伴" target="_blank">合作伙伴</a></li>
                <li><a href="#" title="招贤纳士" target="_blank">招贤纳士</a></li>
                <li><a href="#" title="新品预览" target="_blank">新品预览</a></li>
            </ul>
        </div>
        <div class="nav_block">
            <ul>
                <li class="footer_category_title">帮助中心</li>
                <li><a href="#" title="获取帮助" target="_blank">获取帮助</a></li>
                <li><a href="#" title="订单状态" target="_blank">订单状态</a></li>
                <li><a href="#" title="配送方式" target="_blank">配送方式</a></li>
                <li><a href="#" title="退换贷" target="_blank">退换贷</a></li>
                <li><a href="#" title="付款选项" target="_blank">付款选项</a></li>
                <li><a href="#" title="联系我们" target="_blank">联系我们</a></li>
            </ul>
        </div>
        <div class="nav_block" >
            <ul>
                <li class="footer_category_title">了解更多</li>
                <li><a href="#" title="电子礼品卡" target="_blank">电子礼品卡</a></li>
                <li><a href="#" title="附近商店" target="_blank">附近商店</a></li>
                <li><a href="#" title="订阅电子邮件" target="_blank">订阅电子邮件</a></li>
                <li><a href="#" title="注册NIKE会员" target="_blank">注册NIKE会员</a></li>
                <li><a href="#" title="网站反馈" target="_blank">网站反馈</a></li>
            </ul>
        </div>
        <div class="nav_block" style="width: 16%">
            <div>
                <span style="font-size: 20px;width:200px;overflow:hidden;display: block;color: rgba(255,255,255,0.80);text-align: center">下载WanXie官方APP</span>
                <span style="font-size: 12px;display: block;color: rgba(255,255,255,0.80);margin-top: 20px;text-align: center">进一步了解我们</span>
            </div>
                <img style="margin:20px auto 0 auto;display: block" class="footer_logo" alt="www.wanxie.com" src="/zxx/wanxie/Public/images/code.png">
        </div>
        <div class="nav_block">
            <ul>
                <li class="footer_category_title">客服中心</li>
                <li>
                    <a class="tel" ><img  src="/zxx/wanxie/Public/images/tel.png"><span class="contactSpan">438-438-4388</span></a>
                    <a class="tel" ><img  src="/zxx/wanxie/Public/images/wechat.png"><span class="contactSpan">gao134969</span></a>
                    <a class="tel" ><img  src="/zxx/wanxie/Public/images/weibo.png"><span class="contactSpan">蜡笔小新</span></a>
                </li>
            </ul>
        </div>

    </div>
    <div class="more">
        <img src="/zxx/wanxie/Public/images/more.png" alt="">
    </div>
</footer>
</body>
</html>
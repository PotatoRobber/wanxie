<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>私人订制</title>
    <style>
        body{
            width: 100%;
        }
        .customizedBanner{
            width: 100%;
        }
        .customizedBanner>img{
            width: 100%;
            display: block;
        }
        .secondFloor{
            position: relative;
            width: 100%;
            height: 350px;
            background-color: #e6e8e8;
            text-align: center;
        }
        .secondFloor>img{
            margin-top: 5%;
        }
        .sm-search{
            width: 26%;
            margin: 0 auto;
            margin-top: 50px;
        }
        .sm-search input{
            border: 1px #c53e3b solid;
            width: 55%;
            height: 30px;
            outline: none;
            font-size: 16px;
            text-indent: 5px;
            vertical-align: middle;
        }
        .sm-search button{
            width: 13%;
            height: 32.1px;
            color: #FFFFFF;
            background-color: #c53e3b;
            border: none;
            outline: none;
            vertical-align: middle;
            cursor: pointer;
        }
        .bigLunboCard{
            position: absolute;
            bottom: 0;
            width: 100%;


        }
        .lunboCard{
            display: inline-block;
            width: 21%;
            height: 80px;
            /*border: 1px solid sandybrown;*/
            line-height: 80px;
            text-align: center;
            font-size: 23px;
        }
        .thirdFloor{
            width: 100%;
            height: 800px;
            /*子元素水平居中*/
            justify-content:center;
            /*子元素垂直居中*/
            align-items:center;
            /*flex布局,写在要居中元素的父元素*/
            display:-webkit-flex;
        }

        .bigLunboCard>div{
            display: inline-block;


        }
        .bigLunbo{
            width: 80%;
            height: 520px;
            margin:  auto;


        }
        .forthFloor{
            width: 100%;
            height: 350px;
            background-color: #e6e8e8;
            text-align: center;
            line-height: 370px;
        }
        .fifthFloor{
            width: 100%;
        }
        .fifthFloor img{
            display: block;
            width: 100%;
        }
        /*轮播*/
        #carousel {
            width:100%;
            /* border:1px solid #222; */
            /*height:300px;*/

            clear:both;
            overflow:hidden;
            background:#FFF;
            height: 500px;
            margin: 0 auto;
        }
        #carousel img {
            visibility:hidden; /* hide images until carousel can handle them */
            cursor:pointer; /* otherwise it's not as obvious items can be clicked */
            width: 50%;
        }

        .container{
            position: relative;
            width: 100%;
        }
        .htmleaf-container{
            width: 100%;
        }
        #lunboCard1{
            background: white;
        }
        .lArrow{
            position: absolute;
            top: 42%;
            left: 3%;
            z-index: 2;
        }
        .rArrow{
            position: absolute;
            top: 42%;
            right: 3%;
            z-index: 2;
        }

    </style>
    <!--<link rel="stylesheet" href="/zxx/wanxie/Public/css/bootstrap.css">-->
    <!--<link rel="stylesheet" type="text/css" href="/zxx/wanxie/Public/lunbo/css/htmleaf-demo.css">-->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://cdn.bootcss.com/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="/zxx/wanxie/Public/lunbo/js/jquery-1.11.0.min.js"><\/script>')</script>
    <script type="text/javascript" src="/zxx/wanxie/Public/lunbo/js/jquery.waterwheelCarousel.js"></script>
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
        <script>
            $(function () {
               $(".cus").css("color","#ce3d3a");
            });
        </script>

        <div class="customizedBanner">
            <img src="/zxx/wanxie/Public/images/Customized/pic1.png"/>
        </div>

        <div class="secondFloor">
            <img src="/zxx/wanxie/Public/images/Customized/pic2.png"/>
            <div class="sm-search">
                <form action="#">
                    <input type="text" name="search"><button>搜索</button>
                </form>
            </div>
            <div class="bigLunboCard"><div class="lunboCard" id="lunboCard3">篮球鞋</div><div class="lunboCard" id="lunboCard1">跑鞋</div><div class="lunboCard" id="lunboCard2">休闲鞋</div></div>
        </div>
        <div class="thirdFloor">
            <div class="bigLunbo">
                <!--<div class="htmleaf-container">-->
                    <div class="container">
                        <div class="lArrow arrow fa fa-chevron-left fa-4x"></div>
                        <div class="rArrow arrow fa fa-chevron-right fa-4x"></div>
                        <div id="carousel">
                            <img src="/zxx/wanxie/Public/images/Customized/pic4.png" id="item-1"/>
                            <img src="/zxx/wanxie/Public/images/Customized/pic10.png" id="item-2"/>
                            <img src="/zxx/wanxie/Public/images/Customized/pic11.png" id="item-3"/>
                        </div>
                        <br>

                    </div>

                <!--</div>-->


            </div>

        </div>
        <div class="forthFloor">
            <img src="/zxx/wanxie/Public/images/Customized/pic7.png"/>
        </div>
        <div class="fifthFloor">
            <img src="/zxx/wanxie/Public/images/Customized/pic3.png"/>
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
<script type="text/javascript">
    $(document).ready(function () {
        var carousel = $("#carousel").waterwheelCarousel({
            separation:450,
            // autoPlay:300
            movingToCenter: function ($item) {
                // $('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '');
                var centerID =  $item.attr('id');
                if(centerID==="item-1"){
                    $('#lunboCard2').css("background","#e6e8e8");
                    $('#lunboCard3').css("background","#e6e8e8");
                    $('#lunboCard1').css("background","#fff");
                }else if (centerID==="item-2"){
                    $('#lunboCard1').css("background","#e6e8e8");
                    $('#lunboCard3').css("background","#e6e8e8");
                    $('#lunboCard2').css("background","#fff");
                }else {
                    $('#lunboCard1').css("background","#e6e8e8");
                    $('#lunboCard2').css("background","#e6e8e8");
                    $('#lunboCard3').css("background","#fff");
                }
            },
            });
        $('#prev').bind('click', function () {
            carousel.prev();
            return false
        });
        $('#next').bind('click', function () {
            carousel.next();
            return false;
        });
        $('#reload').bind('click', function () {
            newOptions = eval("(" + $('#newoptions').val() + ")");
            carousel.reload(newOptions);
            return false;
        });


    });
</script>
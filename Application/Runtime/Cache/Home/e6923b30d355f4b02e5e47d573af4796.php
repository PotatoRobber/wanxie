<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://cdn.bootcss.com/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="/zxx/wanxie/Public/tab/js/jquery-1.11.0.min.js"><\/script>')</script>
    <title>注册</title>
    <style>
        body{
            width: 100%;
        }
        .registerBg{
            width: 100%;
            position: relative;
        }
        .container{
              width: 100%;
          }
        .row{
            width: 100%;
        }
        .registerBg img{
            width: 100%;
            display: block;
        }
        .regBox{
            width: 25.21%;
            height: 520px;
            border: 1px solid white;
            position: absolute;
            top: 5%;
            left: 35%;
            background: #fff;
            border-radius: 4px;

        }
        .text-wel{
            height: 17px;
            width: 20%;
            color: black;
            font-size: 16px;
            font-family: "Microsoft Himalaya";

        }
        .textLogo{
            width: 46%;
            height: 24px;
            display: inline-block;
        }
        .smallRegbox{
            width: 70%;
            height: 330px;
            margin: 0 auto;
            margin-top: 80px;
            /*border: 1px solid orangered;*/
        }
        .getCode{
            display: inline-block;
            width: 35%;
            height: 32px;
            border: 1px solid orangered;
            position: absolute;
            right: -1%;
            top: 19.5%;
            background: #ce3d3a;
            box-sizing: content-box;
            color: #fff;
            font-size: 15px;
            text-align: center;
            line-height: 32px;
        }
        .smallRegbox a{
            text-decoration: none;
        }
        .smallRegbox a:link{
            color: #333333;
        }
        .smallRegbox a:visited {
            color: #111111;
        }
        .reg-1-row{
            text-align: center;
        }
        .fullinput{
            width: 100%;
            position: relative;
        }
        .reginput{
            height: 30px;
            margin: 10px 0;
        }
        .phoneCode{
            width: 65%;
        }
        .regNow{
            height: 35px;
            background: #ce3d3a;
            border-radius: 4px;
            border: 1px solid #ce3d3a;
            color: #fff;
            font-size: 15px;
            margin: 20px 0;
        }
        .toLogin{
            margin-top: 10px;
            text-align: center;
        }
        .bgimg{
            height: 100%;
        }
        .cue{
            /*display: inline-block;*/
            margin: 0;
            padding: 0;
            font-size: 5px;
            width: 30px;
            height: 15px;
            color:#ce3d3a ;
        }






    </style>
    <!--<link rel="stylesheet" href="../../../../Public/js/bootstrap-3.3.7-dist/css/bootstrap.css">-->

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
<head>
    <link rel="stylesheet" type="text/css" href="/zxx/wanxie/Public/css/headerStyle.css">
    <script src="/zxx/wanxie/Public/js/jquery.2.2.2.min.js"></script>
    <script src="/zxx/wanxie/Public/js/header-js.js"></script>

</head>

<div class="header">
    <div class="top">
        <div id="options">
            <a href="../Userinfo/userlogin" class="login"><span class="denglv">登录</span><span id="user" style="display: none">欢迎,<?php echo ($_SESSION['user']['username']); ?></span></a><span id="divide" style="color: white">&nbsp;/&nbsp;</span><a id="register" href="../Register/Register">注册</a>
            <a id="d">订单</a>
            <a>收藏</a>
            <a href="../HelpCenter/index">帮助中心</a>
            <a href="../Userinfo/loginout" id="exit" style="visibility: hidden" onclick="return confirm('确认注销登录吗？')">退出登录</a>
        </div>
    </div>
    <div class="bottom">
          <div class="logo">
            <img src="/zxx/wanxie/Public/images/logo.png"/>
          </div>

        <div id="nav">

            <a href="../Index/index" class="index">首页</a>
            <a href="../Index/fenlei?catename=男鞋" class="nanxie">男鞋</a>
            <a href="../Index/fenlei?catename=女鞋" class="nvxie">女鞋</a>
            <a href=" ../Customized/Customized" class="cus">私人订制</a>
            <a href="../APP/index" class="app">WanXie APP</a>

        </div>

        <div class="search">
            <input id="search-box" type="text" name="search"/><input type="submit" id="button" value="搜索">
        </div>
    </div>
</div>

            </div>
        </div>

        <div class="row">
            <div class="registerBg col-md-12">
                <div class="col-md-3 regBox">
                    <div class="smallRegbox">
                        <div class="reg-1-row">
                            <span class="text-wel">欢迎加入&nbsp;&nbsp;&nbsp;</span>
                            <div class="textLogo">
                                <img  src="/zxx/wanxie/Public/images/Register/textlogo.png"/>
                            </div>
                        </div>
                        <form id="regForm" class="regForm" action="submitForm" method="post" onsubmit="return checkForm()" >
                            <!--onsubmit="return checkForm()"-->
                            <input name="phoneNumber" id="phoneNumber" type="text" placeholder="&nbsp;手机号" class="fullinput reginput isFillin">
                            <input  name="pwd" id="inputPassword" type="password" placeholder="&nbsp;密码" class="fullinput reginput isFillin">
                            <input id="confirmPassword" type="password" placeholder="&nbsp;确认密码" class="fullinput reginput isFillin">
                            <div class="fullinput"><input type="text" placeholder="&nbsp;手机验证码" class="phoneCode reginput"><div class="getCode">获取验证码</div></div>
                            <div>
                            <input id="agree" type="checkbox" >同意会员注册条款
                            </div>
                            <input id="submit" type="submit" value="立即注册" class="fullinput regNow" onclick="checkForm()">
                        </form>
                        <div class="toLogin"><a href="../Index/index">已有账号，立即登录</a></div>
                    </div>
                </div>
                <img class="bgimg" src="/zxx/wanxie/Public/images/Register/registerbg.png"/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                
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
            </div>
        </div>
    </div>
</body>
</html>
<script>
    $(function () {
        //验证两次密码输入是否一致
        $('#confirmPassword').blur(function () {
    var inputPassword = $('#inputPassword').val();
    var confirmPassword =$('#confirmPassword').val();
    if (inputPassword!==confirmPassword){
        $('#confirmPassword+span').remove();
        $('#confirmPassword').after('<span class="cue">两次密码输入不一致</span>');
        $('#confirmPassword').val('');
    }else{
            $('#confirmPassword+span').remove();
        }

        });

        //验证手机号是否正确
        $('#phoneNumber').blur(function () {

            var phoneNumber = $('#phoneNumber').val();
            var reg=/^1[34578]\d{9}$/;
            var flag =  reg.test(phoneNumber);
            if (flag===false) {

                $('#phoneNumber+span').remove();
                $('#phoneNumber').after('<span class="cue">请输入正确的手机号</span>');
                $("#phoneNumber").val('');
            }else {
                $('#phoneNumber+span').remove();
            }


        });

        //检验密码是否合规
        $('#inputPassword').blur(function () {
            var pwd = $("#inputPassword").val();
            var reg = /^[\w]{6,12}$/;

            if(!reg.test(pwd)){
                $('#inputPassword+span').remove();
                $('#inputPassword').after('<span class="cue">密码必须由 6-16位字母、数字组成</span>');
                $("#inputPassword").val('');

            }
        });



        //短信验证码注册
        $('.getCode').click(function () {
            sendcode();
        });


        // 短信验证码60S倒计时及AJAX POST提交手机号
        var countdown=60;
        function sendcode(){
            var obj = $(".getCode");
            settime(obj);
            $.ajax({
                type: 'POST',
                url: "sendCode",
                data: {"iphone":$("#phoneNumber").val()},
                dataType:'json',
                success: function(data){
                    alert('返回数据：'+data);
                    console.log("提交成功");
                },
                error: function(data){
                    console.log("提交失败");
                }
            });
        }
        function settime(obj) { //发送验证码倒计时
            if (countdown == 0) {
                obj.attr('disabled',false);
                obj.val("发送验证码");
                countdown = 60;
                return;
            } else {
                obj.attr('disabled',true);
                obj.val("重新发送(" + countdown + "s)");
                countdown--;
            }
            setTimeout(function() {
                    settime(obj) }
                ,1000)
        }



    });







    //判断所有项是否都填了
    function isFillin() {
        for (i=0;i<$('.isFillin').length;i++) {
            var input =$('.isFillin').get(i);
            if (input.value==''||input.value==null) {
                alert('请填写所有选项再提交');
                return false;
            }else {
                return true;
            }
        }

    }
    //js提交表单
    function checkForm() {
        var isAgree = $('#agree').is(':checked');
        if (isAgree) {
            if (isFillin()){
                return true;
            }
            else {
                return false;
            }
        }else {
            alert('未勾选同意或者未填完');
            return false;
        }
    }
</script>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
    <head>
         <meta charset="utf-8">
         <title>wanxie首页</title>
         <link rel="stylesheet" href="/zxx/wanxie/Public/css/font-awesome.css">
         <link rel="stylesheet" href="/zxx/wanxie/Public/css/indexStyle.css">
         <script src="/zxx/wanxie/Public/js/jquery.2.2.2.min.js"></script>
         <script src="/zxx/wanxie/Public/js/index-js.js"></script>
    </head>
<body id="pagetop" >
<div class="erupt-box">
    <div class="erupt">
        <input class="close" type="image" src="/zxx/wanxie/Public/images/弹窗图片/close.png">
        <img src="/zxx/wanxie/Public/images/弹窗图片/erupt.png" width="100%"/>
        <a href="#" class="buy">前往抢购</a>
    </div>
</div>
<!--头部-->

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

<!--头部-->

<!--banner-top-->
<div class="banner-top">
    <a href="#"><img src="/zxx/wanxie/Public/images/首页图片/index1.png" width="100%"></a>
</div>

<div class="new-shoes-container">
    <div class="new-shoes-group">
        <div class="new-shoes-text1">新品球鞋</div>
        <div class="new-shoes-text2">NEW SHOES</div>
        <?php if(is_array($newproducts)): $i = 0; $__LIST__ = $newproducts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?><div class="new-shoes-grid">
             <div class="new-shoes-pic">
                 <a href="../Detail/Detail?productid=<?php echo ($n["productid"]); ?>"><img src="/zxx/wanxie<?php echo ($n["productimg"]); ?>" width="100%" height="240px" ></a>
               </div>
               <div class="new-shoes-name">
                   <a href="../Detail/Detail?productid=<?php echo ($n["productid"]); ?>" class="spf"><?php echo ($n["productname"]); ?></a>
               </div>
              <div class="new-shoes-type simsun">
                  <?php echo ($n["catename"]); ?>&nbsp;<?php echo ($n["typename"]); ?>
              </div>
              <div class="new-shoes-price font-18px-333">
                  ¥<?php echo ($n["productprice"]); ?>
              </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>

<div class="tool-bar">
    <ul class="tools">
        <li><a class="cart" href="cart"><img src="/zxx/wanxie/Public/images/首页图片/shape3.png"></a></li>
        <li><a class="contact" href="../HelpCenter/index"><img src="/zxx/wanxie/Public/images/首页图片/shape1.png"></a></li>
        <li><a class="backtop" href="#pagetop"><img src="/zxx/wanxie/Public/images/首页图片/shape2.png"></a></li>
    </ul>
</div>
<!--banner-top-->

<!--banner-middle-->
<div class="banner-middle">
    <a href="#"><img src="/zxx/wanxie/Public/images/首页图片/index2.png" width="100%"/></a>
</div>

<div class="hot-shoes-container">
    <div class="hot-shoes-group">
        <div class="hot-shoes-text1">畅销商品</div>
        <div class="hot-shoes-text2">BEST SELLER</div>
        <?php if(is_array($hotproducts)): $i = 0; $__LIST__ = $hotproducts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?><div class="hot-shoes-grid">
                <div class="new-shoes-pic">
                    <a href="../Detail/Detail?productid=<?php echo ($n["productid"]); ?>"><img src="/zxx/wanxie<?php echo ($n["productimg"]); ?>" width="100%" height="240px" ></a>
                </div>
                <div class="new-shoes-name">
                    <a href="../Detail/Detail?productid=<?php echo ($n["productid"]); ?>" class="spf"><?php echo ($n["productname"]); ?></a>
                </div>
                <div class="new-shoes-type simsun">
                    <?php echo ($n["catename"]); ?>&nbsp;<?php echo ($n["typename"]); ?>
                </div>
                <div class="new-shoes-price font-18px-333">
                    ¥<?php echo ($n["productprice"]); ?>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<!--banner-middle-->

<!--banner-bottom-->
<div class="banner-bottom">
    <img src="/zxx/wanxie/Public/images/首页图片/index3.png" width="100%"/>
    <button class="btn">开始定制<span class="fa-chevron-circle-down"></span></button>
</div>
<!--banner-bottom-->

<!--底部-->

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
<!--底部-->
</body>
</html>
<script>
    $(function () {
        $(".index").css("color","#c53e3b");
    })
</script>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/zxx/wanxie/Public/css/bootstrap.css">
    <style>
        .mycontainer{
            width: 100%;
        }
        .cart-box{
            width: 70%;
            margin: 0 auto;
        }
    </style>
    <script src="/zxx/wanxie/Public/js/jquery.2.2.2.min.js"></script>
</head>
<body>
<!--头部 !-->

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

<!--头部 !-->
<div class="mycontainer">
   <h2 style="text-indent: 100px; margin-top: 0; padding: 20px 0 20px 0;  color: #c53e3b; border-top: 1px solid #888888; ">我的购物车</h2>
    <div class="cart-box">
     <table class="table table-striped table-bordered table-hover" style="text-align: center">
        <tr>
            <th width="3%" style="text-align: center">序号</th>
            <th width="10%" style="text-align: center">商品名称</th>
            <th width="10%" style="text-align: center">商品图片</th>
            <th width="5%" style="text-align: center">商品价格</th>
            <th width="5%" style="text-align: center">购买数量</th>
            <th width="5%" style="text-align: center">小计</th>
            <th width="10%" style="text-align: center">操作</th>
        </tr>
         <?php if(is_array($mygoods)): $i = 0; $__LIST__ = $mygoods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?><input type="hidden" value="<?php echo ($m["productid"]); ?>" name="pid[]">
            <td style="height: 70px; line-height: 70px"><?php echo ($i); ?></td>
            <td style="height: 70px; line-height: 70px"><?php echo ($m["productname"]); ?></td>
            <td style="height: 70px; line-height: 70px"><img src="/zxx/wanxie/<?php echo ($m["productimg"]); ?>" width="70px" style="vertical-align: middle"></td>
            <td style="height: 70px; line-height: 70px">¥<?php echo ($m["productprice"]); ?></td>
            <td style="height: 70px; line-height: 70px"><?php echo ($m["pnumber"]); ?>件</td>
            <td style="height: 70px; line-height: 70px">¥<?php echo ($m["xj"]); ?></td>

            <td style="padding-top: 35px">
              <div class="updatenum" style="display: none">
               <form method="post" action="updatenum">
                 <input type="number"  width="50px" name="pnumber" min="1" max="<?php echo ($m["productcount"]); ?>" value="<?php echo ($m["pnumber"]); ?>">
                 <input type="hidden" name="index" value="<?php echo ($i); ?>">
                 <input class="btn btn-default" type="submit" value="确认" >
               </form>
              </div>

                <a href="#" id="bbb">修改购买数量</a>|
                <script>
                    $("#bbb").click(function () {
                        $(".updatenum").toggle();
                    });
                </script>
                <a href="todelete?index=<?php echo ($i); ?>" onclick="return confirm('确定删除该商品吗？')">删除</a></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
     </table>

        <h2 style="text-align: right; color: #181818; width: 100%   ; font-weight: bold; font-size: 26px; margin: 24px 0 30px 0;" >
            总计:&nbsp;&nbsp;&nbsp;<?php echo ($total); ?>元
        </h2>
        <div style="width: 100%; text-align: right; padding-bottom: 50px">
            <a href="index" style="text-decoration: none; display: inline-block; width: 120px; padding: 10px 20px; background-color: rgba(128,128,128,0.52); color: white; text-align: center; font-size: 18px">继续购物</a>
            <a href="order" style="text-decoration: none; display: inline-block; width: 120px; padding: 10px 20px; background-color: #c53e3b; color: white; text-align: center; font-size: 18px" >提交订单</a>

        </div>
    </div>
</div>
<!--底部 !-->

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
<!--底部 !-->
</body>
</html>
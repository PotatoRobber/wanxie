<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>

        .container{
            margin: 20px auto 20px auto;
            width: 80%;
            border: 2px solid #c53e3b;
            border-radius: 5px;
        }
        .write{
            background-color: #c53e3b;
            color: whitesmoke;
            font-size: 30px;
            text-align: center;
            padding: 3px 0;
        }

        .one{
            margin-top: 10px;
            padding-left: 4%;
        }

        span{
            background-color: #c53e3b;
            color: whitesmoke;
            padding: 5px 7px;
            margin-right: 5px;
        }
        input{
            font-size: 16px;
            text-indent: 5px;
            outline: none;
        }


        .way{
            outline: none;
            margin-top: 10px;
            width: 100%;
            height: 50px;
            color: white;
            font-size: 20px;
            background-color: #c53e3b;
        }
        .box{
            width: 300px;
            height: 151px;
            float: left;
            margin: 0 28px 0 28px;
            padding: 10px 10px 0 20px;
            border: 2px solid #888888;
            cursor: pointer;
            position: relative;
        }
        .box input{
            border: none;
            cursor: pointer;
        }
        #buyeraddress{
            border: none;
            font-size: 13px;
            font-family: 微软雅黑;
            outline: none;
            cursor: pointer;
        }
        .add{
            width: 300px;
            height: 150px;
            float: left;
            margin: 30px 28px 0 28px;
            padding: 10px 10px 0 20px;
            border: 2px solid #888888;
            cursor: pointer;
            text-align: center;
            line-height: 100px;
            color: #181818;
        }
        .add:hover{
            border: 2px solid #c53e3b;
        }
        .new{
            display: inline-block;
            vertical-align: middle;
        }

        .box:hover{
            border: 2px solid #c53e3b;
        }

    </style>
    <script src="/zxx/wanxie/Public/js/jquery.2.2.2.min.js"></script>
</head>
<body>
 <div class="container">
    <div class="write">填写订单</div>

       <div class="one">
        <h3>选择收货地址:</h3>

           <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><form  method="post" >
                   <div class="box">
                       <input type="hidden" name="username" value="<?php echo ($_SESSION['user']['username']); ?>">
                       <input id="addressid" type="hidden" name="username" value="<?php echo ($d["addressid"]); ?>">
                       <label for="buyername">收货人:</label><input id="buyername" type="text" name="buyername" value="<?php echo ($d["buyername"]); ?>" readonly><p></p>
                       <label for="buyerphone">联系方式:</label><input id="buyerphone" type="tel" name="buyerphone" value="<?php echo ($d["buyerphone"]); ?>" readonly><p></p>
                       <label for="buyeraddress">收货地址:</label><br><textarea id="buyeraddress"  name="buyeraddress" cols="41" rows="3"  readonly><?php echo ($d["buyeraddress"]); ?></textarea><p></p>
                   </div>
               </form><?php endforeach; endif; else: echo "" ;endif; ?>

           <a href="../userinfo/addnewaddress?target=0" >
               <div class="add">
                   <h3 class="new">点击新增地址</h3>
               </div>
           </a>
        </div>
        <select class="way" name="howtopay">
            <option value="在线支付">在线支付</option>
            <option value="货到付款" selected>货到付款</option>
            <option value="公司转账">公司转账</option>
        </select>

    <div class="order">
        <h3 style="color: whitesmoke; background-color: #c53e3b; width: 150px; margin: 20px 0; padding: 5px 0; text-align: center">商品信息</h3>
        <table width="100%" style="text-align: center">
            <tr>
                <th width="20%">商品名称</th>
                <th width="30%">商品图片</th>
                <th width="16%">商品价格</th>
                <th width="16%">购买数量</th>
                <th width="16%">小计</th>
            </tr>
            <?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($d["productname"]); ?></td>
                    <td><img src="/zxx/wanxie<?php echo ($d["productimg"]); ?>" width="100px"></td>
                    <td>¥<?php echo ($d["productprice"]); ?></td>
                    <td><?php echo ($d["counts"]); ?>件</td>
                    <td><?php echo ($d["xj"]); ?>元</td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <h2 style="text-align: right; margin-bottom: 10px">总计:<?php echo ($total); ?>元&nbsp;&nbsp;</h2>
     </div>
</div>
<div style="text-align: center">
    <a  id="notfinish" style="text-decoration: none; background-color: #a5a5a5; padding: 5px 10px; color: white; font-size: 20px; border-radius: 3px; cursor: pointer" onclick="return confirm('确定离开订单页面吗?')">狠心离开</a>
    <input id="tj" type="button"  style="outline: none; background-color: #c53e3b; padding: 5px 10px; color: white; font-size: 20px; border: none; border-radius: 3px;  cursor: pointer" value="立即付款" onclick="return confirm('确定下单吗?')">
</div>
</body>
</html>
<script>
    $(function () {
        $("form:first").attr("id","info");
        $(".box:first").css({"border":"2px solid #c53e3b","boxShadow":"5px 5px 3px #c53e3b"});

        $(".one").on("click",".box",function () {
            $(".box").css({"border":"2px solid #888888","boxShadow":"0 0 0 #ffffff"});
            $(this).css({"border":"2px solid #c53e3b","boxShadow":"5px 5px 3px #c53e3b"});
        });

        $(".one").on("click","form",function () {
           $("form").removeAttr("id");
           $(this).attr("id","info");
        });




        $("#notfinish").click(function () {
            $("#info").attr("action","notfinish?oid=<?php echo (session('oid')); ?>");
            $("#info").submit();
        });

        $("#tj").click(function () {
            $("#info").attr("action","payment?oid=<?php echo (session('oid')); ?>");
            $("#info").submit();
        });
    });
</script>
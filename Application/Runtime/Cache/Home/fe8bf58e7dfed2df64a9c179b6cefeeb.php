<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/zxx/wanxie/Public/css/bootstrap.css">
    <script src="/zxx/wanxie/Public/js/jquery.2.2.2.min.js"></script>
</head>
<body>
<div style="width: 95%; margin: 0 auto">
    <table class="table table-striped table-bordered table-hover" style="text-align: center;table-layout: fixed">
        <tr>
            <th style="text-align: center" width="13%">订单号</th>
            <th style="text-align: center" width="13%">下单时间</th>
            <th style="text-align: center">商品名称</th>
            <th style="text-align: center">购买数量</th>
            <th style="text-align: center" width="10%">共计</th>
            <th style="text-align: center">收货人</th>
            <th style="text-align: center">收货地址</th>
            <th style="text-align: center" width="13%">操作</th>
        </tr>
    <?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($d["orderid"]); ?></td>
            <td><?php echo ($d["orderdate"]); ?></td>
            <td title="<?php echo ($d["productnames"]); ?>" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis"><?php echo ($d["productnames"]); ?>...</td>
            <td><?php echo ($d["pnumber"]); ?>,共计<?php echo ($d["productnum"]); ?>件</td>
            <td>¥<?php echo ($d["ordermoney"]); ?></td>
            <td><?php echo ($d["buyername"]); ?></td>
            <td title="<?php echo ($d["buyeraddress"]); ?>" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis"><?php echo ($d["buyeraddress"]); ?>...</td>
            <td>
                <a href="withdraw?oid=<?php echo ($d["orderid"]); ?>&state=0" onclick="return confirm('确认取消订单吗?')">取消订单</a>
                <a href="../Index/order?oid=<?php echo ($d["orderid"]); ?>" target="_blank">继续支付</a>
            </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
    <h1><?php echo ($tips); ?></h1>
</div>

</body>
</html>
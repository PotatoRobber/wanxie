<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/zxx/wanxie/Public/css/bootstrap.css">
    <style>
        .form-box{
            margin:30px auto 0 auto;
            width: 60%;
        }
    </style>
</head>
<body>
<h3 style="margin-left: 200px">新增地址</h3>
<div class="form-box">
    <form role="form" method="post" action="addtheaddress">
        <div class="form-group">
            <input type="hidden" class="form-control"  name="userid" value="<?php echo ($_SESSION['user']['userid']); ?>" style="width:200px"  required>
        </div>

        <div class="form-group">
            <label for="buyername">收货人</label>
            <input type="text" class="form-control" id="buyername" name="buyername" placeholder="请输入收货人" style="width:200px"  required>
        </div>

        <div class="form-group">
            <label for="buyerphone">联系方式</label>
            <input type="tel" class="form-control" id="buyerphone" name="buyerphone" placeholder="请输入电话号码" style="width:200px" required>
        </div>

        <div class="form-group">
            <label for="buyeraddress">收货地址</label>
            <input type="text" class="form-control" id="buyeraddress" name="buyeraddress" placeholder="请输入收货地址" style="width:500px" required>
        </div>

        <button type="submit" class="btn btn-default">添加</button>
    </form>
</div>
</body>
</html>
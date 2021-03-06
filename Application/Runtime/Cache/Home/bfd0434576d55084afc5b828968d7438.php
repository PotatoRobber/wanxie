<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .box{
           width: 300px;
            height: 150px;
            float: left;
            margin: 30px 28px 0 28px;
            padding: 10px 10px 0 20px;
            border: 2px solid #888888;
            cursor: pointer;
            position: relative;
        }
        .box input{
            border: none;
        }
        #buyeraddress{
            border: none;
            font-size: 13px;
            font-family: 微软雅黑;
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
            border: 2px solid #888888;
            box-shadow: 5px 5px 3px #888888;
        }

        #mask{
            background-color: rgba(0, 0, 0, 0.62);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            text-align: center;
            line-height: 150px;
            display: none;
        }

        #mask a{
            margin: 0 10px;
            color: white;
            text-decoration: none;
        }

        #mask a:hover{
            color: #c53e3b;
        }
    </style>
    <script src="/zxx/wanxie/Public/js/jquery.2.2.2.min.js"></script>
</head>
<body>
<div class="box-container">
    <h2>管理收货地址</h2>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><form action="savecountinfo" method="post" >
            <div class="box">
                <input type="hidden" name="username" value="<?php echo ($_SESSION['user']['username']); ?>">
                <input id="addressid" type="hidden" name="username" value="<?php echo ($d["addressid"]); ?>">
                <label for="buyername">收货人:</label><input id="buyername" type="text" name="buyername" value="<?php echo ($d["buyername"]); ?>" readonly><p></p>
                <label for="buyerphone">联系方式:</label><input id="buyerphone" type="tel" name="buyerphone" value="<?php echo ($d["buyerphone"]); ?>" readonly><p></p>
                <label for="buyeraddress">收货地址:</label><br><textarea id="buyeraddress"  name="buyeraddress" cols="41" rows="3"  readonly><?php echo ($d["buyeraddress"]); ?></textarea><p></p>
                <div id='mask'>
                    <a href='getaddress?addressid=<?php echo ($d["addressid"]); ?>'>编辑</a>
                    <a href='deladdress?addressid=<?php echo ($d["addressid"]); ?>' >删除</a>
                </div>
            </div>
        </form><?php endforeach; endif; else: echo "" ;endif; ?>

    <a href="addnewaddress?target=1" target="myframe">
    <div class="add">
        <h3 class="new">点击新增地址</h3>
    </div>
    </a>
</div>
</body>
</html>
<script>
    $(".box-container").on("mouseenter",".box",function () {
      $(this).get(0).lastElementChild.style.display="block";
    });
    $(".box-container").on("mouseleave",".box",function () {
        $(this).get(0).lastElementChild.style.display="none";
    })
</script>
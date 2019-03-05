<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>高奇鹏</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://127.0.0.1/zxx/wanxie/Application/Admin/Public/style/bootstrap.css" rel="stylesheet">
    <link href="http://127.0.0.1/zxx/wanxie/Application/Admin/Public/style/font-awesome.css" rel="stylesheet">
    <link href="http://127.0.0.1/zxx/wanxie/Application/Admin/Public/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="http://127.0.0.1/zxx/wanxie/Application/Admin/Public/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="http://127.0.0.1/zxx/wanxie/Application/Admin/Public/style/demo.css" rel="stylesheet">
    <link href="http://127.0.0.1/zxx/wanxie/Application/Admin/Public/style/typicons.css" rel="stylesheet">
    <link href="http://127.0.0.1/zxx/wanxie/Application/Admin/Public/style/animate.css" rel="stylesheet">

</head>
<body>
<!-- 头部 -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="http://127.0.0.1/zxx/wanxie/Application/Admin/Public/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="http://127.0.0.1/zxx/wanxie/Application/Admin/Public/images/photo.png">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo (session('username')); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/zxx/wanxie/index.php/Admin/Admin/loginout">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/zxx/wanxie/index.php/Admin/Admin/edit/id/<?php echo (session('uid')); ?>">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">商品模块</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
<<<<<<< .mine
                    <a href="/zxx/wanxie/index.php/Admin/cate/lst">
||||||| .r58
                    <a href="/zxx/wanxie/index.php/Admin/Cate/lst">
=======
                    <a href="/zxx/wanxie/index.php/Admin/typeInfo/lst">
>>>>>>> .r61
                        <span class="menu-text">分类管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/zxx/wanxie/index.php/Admin/Brand/lst">
                        <span class="menu-text">品牌管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/zxx/wanxie/index.php/Admin/Productinfo/showproduct">
                        <span class="menu-text">商品管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/zxx/wanxie/index.php/Admin/Type/lst">
                        <span class="menu-text">商品类型</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">会员模块</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="#">
                        <span class="menu-text">会员管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/zxx/wanxie/index.php/Admin/MemberLevel/lst">
                        <span class="menu-text">会员等级</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">订单管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="#">
                        <span class="menu-text">订单列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">管理员管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/zxx/wanxie/index.php/Admin/Admin/lst">
                        <span class="menu-text">管理员列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <!--Dashboard-->
    </ul>
    <!-- /Sidebar Menu -->
</div>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <a href="/zxx/wanxie/index.php/Admin">系统</a>
                    </li>
                    <li>
                        <a href="/zxx/wanxie/index.php/Admin/Productinfo/lst">商品管理</a>
                    </li>
                    <li class="active">新增商品</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-header bordered-bottom bordered-blue">
                                <span class="widget-caption">新增商品</span>
                            </div>
                            <div class="widget-body">
                                <div id="horizontal-form">
                                    <form class="form-horizontal" role="form" action="addproduct" method="post">
                                        <div class="form-group">
                                            <label for="adminname" class="col-sm-2 control-label no-padding-right">商品名称</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="adminname" placeholder="请输入商品名称" name="adminname" required="" type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <div class="form-group">
                                            <label  for="cate-first" class="col-sm-2 control-label no-padding-right">一级商品类型</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" id="cate-first" name="cateid" >
                                                        <option value="null">请选择一级商品类型
                                                        </option>
                                                    <?php if(is_array($allfirsttype)): $i = 0; $__LIST__ = $allfirsttype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?><option value="<?php echo ($t["id"]); ?>"><?php echo ($t["catename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                                </select>
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <div class="form-group">
                                            <label  for="cate-second" class="col-sm-2 control-label no-padding-right">二级商品类型</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" id="cate-second" name="typeid" >
                                                    <option value="null">请选择二级商品类型
                                                    </option>
                                                    <?php if(is_array($alltype)): $i = 0; $__LIST__ = $alltype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i; endforeach; endif; else: echo "" ;endif; ?>
                                                </select>
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <div class="form-group">
                                            <label  for="brand" class="col-sm-2 control-label no-padding-right">商品品牌</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" id="brand" name="brandid" >
                                                    <option value="null">请选择商品品牌</option>
                                                    <?php if(is_array($allbrand)): $i = 0; $__LIST__ = $allbrand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?><option value="<?php echo ($b["brandid"]); ?>"><?php echo ($b["brandname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                                </select>
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>


                                        <div class="form-group">
                                            <label for="productimg" class="col-sm-2 control-label no-padding-right">商品图片</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="productimg" name="productimg" type="file">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label no-padding-right">商品价格</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" placeholder="请输入商品价格" name="productprice"  type="number" min="0">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label no-padding-right">商品简介</label>
                                            <div class="col-sm-6">
                                               <textarea name="productdetail" cols="103" rows="3" style="resize: none"></textarea>
                                            </div>
                                            <p class="help-block col-sm-4 green">* 选填</p>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label no-padding-right">是否显示</label>
                                            <div class="col-sm-6">
                                                <select class="form-control"  name="isshow">
                                                    <option value="1">是</option>
                                                    <option value="0">否</option>
                                                </select>
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label no-padding-right">是否推荐</label>
                                            <div class="col-sm-6">
                                                <select class="form-control"  name="isrecommend">
                                                    <option value="1">是</option>
                                                    <option value="0">否</option>
                                                </select>
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default" onclick="return confirm('确认添加商品？')">新增商品</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
</div>

<!--Basic Scripts-->
<script src="http://127.0.0.1/zxx/wanxie/Application/Admin/Public/style/jquery_002.js"></script>
<script src="http://127.0.0.1/zxx/wanxie/Application/Admin/Public/style/bootstrap.js"></script>
<script src="http://127.0.0.1/zxx/wanxie/Application/Admin/Public/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="http://127.0.0.1/zxx/wanxie/Application/Admin/Public/style/beyond.js"></script>
<script>
    $(function () {
        $("#cate-first").change(function () {
            $.ajax({
                url: "getsecondcate",
                type: 'get',
                data: {cateid: $("#cate-first").val()},
                success: function (result) {
                    $("#cate-second").empty();
                    var dataarray = eval("(" + result + ")");
                    for (var i = 0; i < dataarray.length; i++) {
                        var new_option=$("<option></option>");
                        new_option.html(dataarray[i].typename);
                        $("#cate-second").append(new_option);
                    }
                }

            });
        });
    });
</script>


</body></html>
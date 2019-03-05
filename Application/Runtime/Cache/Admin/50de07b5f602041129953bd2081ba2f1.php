<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>wanxie</title>

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
    <style>
        .thumb-box{
        position:absolute;
        left:130px;
        top:30px;
        width:220px;
        background:#fff;
        display:none;
        border:2px solid #ccc;
        }
        .thumb-box img{
            width: 216px;
            padding: 10px;
        }
        .showpic:hover+.thumb-box{
            display: block;
        }
    </style>
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
                <i class="menu-icon fa fa-gift"></i>
                <span class="menu-text">商品模块</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/zxx/wanxie/index.php/Admin/cate/lst">
                        <i class="menu-icon fa fa-gear"></i>
                        <span class="menu-text">分类管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/zxx/wanxie/index.php/Admin/Brand/lst">
                        <i class="menu-icon fa fa-gear"></i>
                        <span class="menu-text">品牌管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/zxx/wanxie/index.php/Admin/Productinfo/showproduct">
                        <i class="menu-icon fa fa-gear"></i>
                        <span class="menu-text">商品管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-shopping-cart"></i>
                <span class="menu-text">订单管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/zxx/wanxie/index.php/Admin/Orderinfo/showorder">
                        <span class="menu-text">订单列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-users"></i>
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
                        <a href="/zxx/wanxie/index.php/Admin/Admin/lst">系统</a>
                    </li>
                    <li class="active">商品模块</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <button type="button" class="btn btn-sm btn-azure btn-addon" onClick="window.location.href = '/zxx/wanxie/index.php/Admin/Productinfo/showadd'"> <i class="fa fa-plus"></i> Add
                </button>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="flip-scroll">
                                    <table class="table table-bordered table-hover" style="table-layout: fixed;">
                                        <thead class="">
                                        <tr>
                                            <th class="text-center" width="3%">序号</th>
                                            <th class="text-center" width="5%">商品编号</th>
                                            <th class="text-center" width="6%">顶级分类</th>
                                            <th class="text-center" width="6%">二级分类</th>
                                            <th class="text-center" width="6%">商品品牌</th>
                                            <th class="text-center" width="10%">商品名称</th>
                                            <th class="text-center" width="7%">商品价格</th>
                                            <th class="text-center" width="12%">商品简介</th>
                                            <th class="text-center" width="5%">商品库存</th>
                                            <th class="text-center" width="5%">是否显示</th>
                                            <th class="text-center" width="5%">是否推荐</th>
                                            <th class="text-center" width="10%">操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(is_array($allproduct)): $i = 0; $__LIST__ = $allproduct;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?><tr>
                                                <td align="center"><?php echo ($i); ?></td>
                                                <td align="center"><?php echo ($p["productid"]); ?></td>
                                                <td align="center"><?php echo ($p["catename"]); ?></td>
                                                <td align="center"><?php echo ($p["typename"]); ?></td>
                                                <td align="center"><?php echo ($p["brandname"]); ?></td>
                                                <td align="center" style="position: relative">
                                                    <?php echo ($p["productname"]); ?> <span  class="green thumb showpic"  style="cursor:pointer;">[图]</span>&nbsp;
                                                    <div class="thumb-box">
                                                        <img src="/zxx/wanxie<?php echo ($p["productimg"]); ?>">
                                                    </div>

                                                </td>
                                                <td align="center">¥<?php echo ($p["productprice"]); ?></td>
                                                <td align="center" title="<?php echo ($p["productdetail"]); ?>" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo ($p["productdetail"]); ?></td>
                                                <td align="center"><?php echo ($p["productcount"]); ?>件</td>
                                                <td align="center">
                                                    <?php if($p["isshow"] == 0): ?><span class="red">未显示</span>
                                                        <?php elseif($p["isshow"] == 1): ?><span class="green">已显示</span><?php endif; ?>
                                                </td>
                                                <td align="center">
                                                    <?php if($p["isrecommend"] == 0): ?><span class="red">未推荐</span>
                                                        <?php elseif($p["isrecommend"] == 1): ?><span class="green">已推荐</span><?php endif; ?>
                                                </td>


                                                <td align="center">
                                                    <a href="updateproduct?productid=<?php echo ($p["productid"]); ?>" class="btn btn-primary btn-sm shiny">
                                                        <i class="fa fa-edit"></i> 编辑
                                                    </a>
                                                    <a  href="delproduct?productid=<?php echo ($p["productid"]); ?>" onclick="return confirm('确实要删除吗');" class="btn btn-danger btn-sm shiny">
                                                        <i class="fa fa-trash-o"></i> 删除
                                                    </a>
                                                </td>
                                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </tbody>
                                    </table>

                                    <!--分页-->
                                    <div style="width: 100%; height: 20px" ></div>
                                    <nav aria-label="Page navigation" style="text-align: center; z-index: -1">
                                        <ul class="pagination">
                                            <li>
                                                <a href="showproduct?page=1" aria-label="Previous">
                                                    <span aria-hidden="true">首页</span>
                                                </a>
                                            </li>

                                            <?php $__FOR_START_14432__=1;$__FOR_END_14432__=$pages+1;for($i=$__FOR_START_14432__;$i < $__FOR_END_14432__;$i+=1){ ?><li><a href="showproduct?page=<?php echo ($i); ?>"><?php echo ($i); ?></a></li><?php } ?>

                                            <li>
                                                <a href="showproduct?page=<?php echo ($pages); ?>" aria-label="Next">
                                                    <span aria-hidden="true">末页</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>

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



</body></html>
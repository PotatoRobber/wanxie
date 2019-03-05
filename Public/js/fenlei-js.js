$(function () {
    $("#button").click(function () {
        var blank=' ';
        $.ajax({
            url: "searchproduct",
            type: "get",
            data: {catename: $(".text-left1").text(), keywords: $("#search-box").val()},
            success: function (result) {
                $(".shoes-group").empty();
                var array = eval("(" + result + ")");
                if (array.length > 0) {
                    for (var i = 0; i < array.length; i++) {
                        var newsrc = "/zxx/wanxie" + array[i].productimg;
                        $(".shoes-group").append("<div class='shoes-grid'><div class='shoes-pic'><a href='../Detail/Detail?productid="+array[i].productid+"'><img title='" + newsrc + "' src='" + newsrc + "' width='98%' /></a> </div><div class='shoes-name'><a href='#' class='spf'>" + array[i].productname + "</a></div><div class='shoes-type simsun'>" + array[i].brandname + "&nbsp;" + array[i].typename + "</div><div class='shoes-price font-18px-333'>¥" + array[i].productprice + "</div></div>");
                    }
                }
                else {
                    $(".shoes-group").append("<h2>抱歉，未找到相关商品！</h2>")
                }
                $(".left-text").empty();
                $(".left-text").text("共找到"+array.length+"件相关商品,商品如下:");

            }
        });
    });

    $(".brand").on('click', "#a", function () {
        $(".brand a").css("color", "#888888");
        $(this).css("color", "#c53e3b");
    });

    $(".type").on('click', "#type", function () {
        $(".type a").css("color", "#888888");
        $(this).css("color", "#c53e3b");
    });

    //按品牌类型搜索
    $(".brand").on("click", "#a", function () {
        var blank=' ';
        var brand=$(this).text();
        $.ajax({
            url: "getproductbybrand",
            type: "get",
            data: {catename: $(".text-left1").text(), brandname: $(this).text()},
            success: function (result) {
                $(".shoes-group").empty();
                var array = eval("(" + result + ")");
                if (array.length > 0) {
                    for (var i = 0; i < array.length; i++) {
                        var newsrc = "/zxx/wanxie" + array[i].productimg;
                        $(".shoes-group").append("<div class='shoes-grid'><div class='shoes-pic'><a href='../Detail/Detail?productid="+array[i].productid+"'><img title='" + newsrc + "' src='" + newsrc + "' width='98%' /></a> </div><div class='shoes-name'><a href='#' class='spf'>" + array[i].productname + "</a></div><div class='shoes-type simsun'>" + array[i].brandname + "&nbsp;" + array[i].typename + "</div><div class='shoes-price font-18px-333'>¥" + array[i].productprice + "</div></div>");
                    }
                }
                else {
                    $(".shoes-group").append("<h2>抱歉，该品牌下暂无商品！</h2>")
                }
                $(".left-text").empty();
                $(".left-text").text($('.text-left1').text() + blank + '/' + blank + brand + blank + '/' + blank + '(' + array.length + ')');

            }
        });
    });

    //按二级分类搜索
    $(".type").on("click", "#type", function () {
        $.ajax({
            url: "getproductbytype",
            type: "get",
            data: {catename: $(".text-left1").text(), typename:$(this).text()},
            success: function (result) {
                $(".shoes-group").empty();
                var array = eval("(" + result + ")");
                if (array.length > 0) {
                    for (var i = 0; i < array.length; i++) {
                        var newsrc = "/zxx/wanxie" + array[i].productimg;
                        $(".shoes-group").append("<div class='shoes-grid'><div class='shoes-pic'><a href='../Detail/Detail?productid="+array[i].productid+"'><img title='" + newsrc + "' src='" + newsrc + "' width='98%' /></a> </div><div class='shoes-name'><a href='#' class='spf'>" + array[i].productname + "</a></div><div class='shoes-type simsun'>" + array[i].brandname + "&nbsp;" + array[i].typename + "</div><div class='shoes-price font-18px-333'>¥" + array[i].productprice + "</div></div>");
                    }
                }
                else {
                    $(".shoes-group").append("<h2>抱歉，该分类下暂无商品！</h2>")
                }
            }
        });
    });

    //按价格区间搜索商品
    $("#min,#max").blur(function () {
        $.ajax({
            url: "getproductbypricearea",
            type: "get",
            data: {catename: $(".text-left1").text(),minprice:$("#min").val(),maxprice:$("#max").val()},
            success: function (result) {
                $(".shoes-group").empty();
                var array = eval("(" + result + ")");
                if (array.length > 0) {
                    for (var i = 0; i < array.length; i++) {
                        var newsrc = "/zxx/wanxie" + array[i].productimg;
                        $(".shoes-group").append("<div class='shoes-grid'><div class='shoes-pic'><a href='../Detail/Detail?productid="+array[i].productid+"'><img title='" + newsrc + "' src='" + newsrc + "' width='98%' /></a> </div><div class='shoes-name'><a href='#' class='spf'>" + array[i].productname + "</a></div><div class='shoes-type simsun'>" + array[i].brandname + "&nbsp;" + array[i].typename + "</div><div class='shoes-price font-18px-333'>¥" + array[i].productprice + "</div></div>");
                    }
                }
                else {
                    $(".shoes-group").append("<h2>抱歉，该价格区间内暂无商品！</h2>")
                }
            }
        });

    });



    //按价格升序搜索商品
    $("#priceAsc").click(function () {
        $.ajax({
            url: "getproductbypriceAsc",
            type: "get",
            data: {catename: $(".text-left1").text()},
            success: function (result) {
                $(".shoes-group").empty();
                var array = eval("(" + result + ")");
                if (array.length > 0) {
                    for (var i = 0; i < array.length; i++) {
                        var newsrc = "/zxx/wanxie" + array[i].productimg;
                        $(".shoes-group").append("<div class='shoes-grid'><div class='shoes-pic'><a href='../Detail/Detail?productid="+array[i].productid+"'><img title='" + newsrc + "' src='" + newsrc + "' width='98%' /></a> </div><div class='shoes-name'><a href='#' class='spf'>" + array[i].productname + "</a></div><div class='shoes-type simsun'>" + array[i].brandname + "&nbsp;" + array[i].typename + "</div><div class='shoes-price font-18px-333'>¥" + array[i].productprice + "</div></div>");
                    }
                }
                else {
                    $(".shoes-group").append("<h2>抱歉，该品牌下暂无商品！</h2>")
                }
            }
        });
    });

    //按价格降序搜索商品
    $("#priceDesc").click(function () {
        $.ajax({
            url:"getproductbypriceDesc",
            type:"get",
            data:{catename:$(".text-left1").text()},
            success:function (result) {
                $(".shoes-group").empty();
                var array = eval("(" + result + ")");
                if (array.length > 0) {
                    for (var i = 0; i < array.length; i++) {
                        var newsrc="/zxx/wanxie"+array[i].productimg;
                        $(".shoes-group").append("<div class='shoes-grid'><div class='shoes-pic'><a href='../Detail/Detail?productid="+array[i].productid+"'><img title='"+newsrc+"' src='"+newsrc+"' width='98%' /></a> </div><div class='shoes-name'><a href='#' class='spf'>"+array[i].productname+"</a></div><div class='shoes-type simsun'>"+array[i].brandname+"&nbsp;"+array[i].typename+"</div><div class='shoes-price font-18px-333'>¥"+array[i].productprice+"</div></div>");
                    }
                }
                else {
                    $(".shoes-group").append("<h2>抱歉，该品牌下暂无商品！</h2>")
                }

            }
        });
    });

    $(".dropdown-menu").on('click',"li",function () {
        var blank=' ';
        $("#dropdownMenu1").html($(this).text()+blank+'<span class="caret"></span>');
    });

    //鼠标选中商品效果
    $(".shoes-group").on("mouseenter",".shoes-grid",function () {
        $(this).css({"border":"1px solid #b1b1b1","padding":"10px 10px 0 10px","boxShadow":"3px 3px 2px #888888","transition":"all 0.3s"});
    });

    $(".shoes-group").on("mouseleave",".shoes-grid",function () {
        $(".shoes-grid").css({"border":"none","padding":"0 0","boxShadow":"0 0 0 #000000"});
    });


});
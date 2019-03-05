$(function () {
    window.onload=function (){
        setTimeout(function () {
            $(".erupt-box").show();
        }, 2000);
    };

    $(".erupt-box").delay(5000).hide(0);

   $(".close").click(function () {
       $(".erupt-box").remove();
   });

    //鼠标选中商品效果
    // $(".hot-shoes-group").on("mouseenter",".hot-shoes-grid",function () {
    //     $(this).css({"border":"1px solid #b1b1b1","padding":"10px 10px 0 10px","boxShadow":"3px 3px 2px #888888","transition":"all 0.3s"});
    // });
    //
    // $(".hot-shoes-group").on("mouseleave",".hot-shoes-grid",function () {
    //     $(".hot-shoes-grid").css({"border":"none","padding":"0 0","boxShadow":"0 0 0 #000000"});
    // });
});


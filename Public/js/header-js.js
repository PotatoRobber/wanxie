$(document).ready(function () {
   $.ajax({
       url:"../Userinfo/getstatue",
       type:'get',
       success:function (result) {
           if (result==1){
               $("#user").css({"display":"inline-block","margin-right":"40px"});
               $(".denglv").css("display","none");
               $("#register").remove();
               $("#divide").remove();
               $("#exit").css("visibility","visible");
           }
       }
   })
});
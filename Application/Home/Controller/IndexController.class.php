<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {

    public function index(){
        $pdao=M('productview');
        $newdatas=$pdao->where('isshow=1')->order('productid DESC')->limit(4)->select();
        $hotdatas=$pdao->where('isshow=1')->order('productcount DESC')->limit(8)->select();

        $this->assign("newproducts",$newdatas);
        $this->assign("hotproducts",$hotdatas);
        $this->display();
    }

    public function getpagecount(){
        $catename=I('get.catename');
        $pdao=M('productview');
        $productcounts=count($pdao->where("catename='$catename'")->select());
        return $productcounts;
    }

    public function getthispageproduct($page){
        $catename=I('get.catename');
        $pdao=M('productview');
        $productdatas=$pdao->where("catename='$catename' and isshow=1 ")->order('productid ASC')->page("$page,10")->select();
        return $productdatas;
    }

    public function getbrand(){
        $pdao=M('brandinfo');
        $branddatas=$pdao->getField('brandname',true);
        return $branddatas;
    }

    public function gettypebycatename($catename){
        $pdao=M('typeinfo');
        $cdao=M('cate');
        $typedatas=$pdao->where('cateid ='.($cdao->where("catename='$catename'")->getField('id')).'')->getField('typename',true);
        return $typedatas;
    }
    public function gettotalbycatename(){
        $catename=I('get.catename');
        $pdao=M('productview');
        $total=count($pdao->where("catename='$catename' and isshow=1 ")->select());
        return $total;
    }

    public function getproductbybrand(){
        $catename=I('get.catename');
        $brandname=I('get.brandname');
        $pdao=M('productview');
        $thedatas=$pdao->where("catename='$catename' and brandname='$brandname' and isshow=1 ")->select();
        $typeproduct=json_encode($thedatas);
        echo $typeproduct;
    }

    public function getproductbytype(){
        $catename=I('get.catename');
        $typename=I('get.typename');
        $pdao=M('productview');
        $thedatas=$pdao->where("catename='$catename' and typename='$typename' and isshow=1 ")->select();
        $typeproduct=json_encode($thedatas);
        echo $typeproduct;
    }


    public function getfenleititle(){
        $catename=I('get.catename');
        $brandname=I('get.brandname');
        $pdao=M('productview');
        $counts=count($pdao->where("catename='$catename' and brandname='$brandname' and isshow=1 ")->select());
        echo json_encode($counts);
    }

    public function getproductbypriceAsc(){
        $catename=I('get.catename');
        $pdao=M('productview');
        $datas=$pdao->where(" catename= '$catename' and isshow=1 ")->order('productprice ASC')->limit(10)->select();
        echo json_encode($datas);
    }

    public function getproductbypriceDesc(){
        $catename=I('get.catename');
        $pdao=M('productview');
        $datas=$pdao->where(" catename= '$catename' and isshow=1 ")->order('productprice DESC')->limit(10)->select();
        echo json_encode($datas);
    }

    public function searchproduct(){
        $catename=I('get.catename');
        $keywords=I('get.keywords');
        $key['productname']=array('like',"%$keywords%");
        $key['catename']= $catename;
        $key['isshow']='1';
        $pdao=M('productview');
        $datas=$pdao->where($key)->limit(10)->select();
        echo json_encode($datas);
    }

    public function getproductbypricearea(){
        $catename=I('get.catename');
        $minprice=I('get.minprice');
        $maxprice=I('get.maxprice');

        $key['productprice']=array(array('gt',$minprice),array('lt',$maxprice)) ;
        $key['catename']= $catename;
        $key['isshow']='1';
        $pdao=M('productview');
        $datas=$pdao->where($key)->limit(10)->select();
        echo json_encode($datas);
    }

    public function fenlei(){
        $catename=I('get.catename');
        $counts=$this->getpagecount();
        $totalpages=ceil($counts/10);

        //获取分页状态下当前页数据
        $page=I('get.page');
        if ($page){
            $productdatas=$this->getthispageproduct($page);
        }
        else{
            $page=1;
            $productdatas=$this->getthispageproduct($page);
        }
        $this->assign('pages',$totalpages);
        $this->assign("allproduct",$productdatas);

        //根据顶级类型来获取当前顶级类型里的所有品牌和所有二级类型
        $branddatas=$this->getbrand();
        $typedatas=$this->gettypebycatename($catename);
        $this->assign('branddatas',$branddatas);
        $this->assign('typedatas',$typedatas);
        //获取当前顶级类型
        $this->assign('catename',$catename);
        //获取该顶级分类下的所有商品总数
        $total=$this->gettotalbycatename();
        $this->assign('total',$total);

        $this->display();
    }

    //购物车开始===================================
    //购物车开始===================================
    //购物车开始===================================

    public function getproductbyid($productid){
        $pdao=M('productview');
        $data=$pdao->where('productid='.$productid)->find();
        return $data;
    }

    public function getproductbyids($pids){
        $pdao=M('productview');
        $data=$pdao->where("productid in (".$pids.")")->select();
        return $data;
    }

    public function addtomycar(){
        $pnumber=I('post.pnumber');//购买数量
        $pid=I('post.productid');//商品编号
        session_start();
        //先判断购物车是否存在
        $mycar=null;
        if (isset($_SESSION['buycar'])){
            $mycar=$_SESSION['buycar'];//已经存在购物车
        }
        else {
            $mycar=array();
        }
        if (count($mycar)==0){
            //若购物车为空
            $pdata=array("productid"=>$pid,"pnumber"=>$pnumber);
            $mycar[]=$pdata;
        }
        else{
            //购物车中有商品，首先要判断购物车中是否存在当前要购买的商品
            $flag=false;
            for($i=0;$i<count($mycar);$i++){
                $data=$mycar[$i];
                if ($data['productid']==$pid){
                    //购物车中存在当前商品
                    $mycar[$i]['pnumber']=$mycar[$i]['pnumber']+$pnumber;
                    $flag=true;
                    break;
                }
            }
            if ($flag==false){
                $pdata=array("productid"=>$pid,"pnumber"=>$pnumber);
                $mycar[]=$pdata;
            }
        }
        $_SESSION['buycar']=$mycar;
        //$mycar数组中只有商品的编号和购买数量，需要显示商品编号，商品图片，商品名称，购买数量，商品价格，小计
        $this->cart();
    }

    public function cart(){
        $proid=I('get.proid');
        if ($_SESSION['buycar']){
            $mycar=$_SESSION['buycar'];
            //$mycar数组中只有商品的编号和购买数量，需要显示商品编号，商品图片，商品名称，购买数量，商品价格，小计
            $pagedata=array(); //存储页面需要的数据的数组
            $totalmoney=0;
            for($i=0;$i<count($mycar);$i++){
                $data=$mycar[$i];
                if ($data['productid']){
                    //购物车中存在的商品
                    $thedata=$this->getproductbyid($data['productid']); //查询每个购物车中的商品信息
                    $thedata['pnumber']=$data['pnumber']; //在商品信息数组中添加一个购买数量的元素
                    $thedata['xj']=$data['pnumber']*$thedata['productprice'];
                    $totalmoney=$totalmoney+$thedata['xj'];
                    $pagedata[]=$thedata;
                }
            }
            $this->assign("total",$totalmoney);
            $this->assign("mygoods",$pagedata);
            $this->display('cart');
        }
        else{
            $this->error('购物车为空!');
        }
        if ($proid){
            $totalmoney=0;
            $goodsinfo=$_SESSION['buycar'];
            for ($i=0;$i<count($goodsinfo);$i++){
                $pidarr[]=$goodsinfo[$i]['productid'];
                $pnumbers[]=$goodsinfo[$i]['pnumber'];
            }
            $pids=implode(',',$pidarr);
            $pnumber=implode(',',$pnumbers);
            $datas=$this->getproductbyids($pids);
            for ($i=0;$i<count($goodsinfo);$i++){
                $datas[$i]['counts']=$goodsinfo[$i]['pnumber'];
                $datas[$i]['xj']=$goodsinfo[$i]['pnumber']*$datas[$i]['productprice'];
                $allproductname[]=$datas[$i]['productname'];
                $totalmoney=$totalmoney+$datas[$i]['xj'];
            }
            $productname=implode(',',$allproductname);
            $orderdate=date('Y-m-d H:i:s');
            $userorderstate=0;
            $productnum=count($_SESSION['buycar']);
            $username=$_SESSION['user']['username'];
            $result=$this->addorderinfo($orderdate,$pids,$productname,$pnumber,$totalmoney,$userorderstate,$productnum,$username);
            if ($result){
                $pro=$this->getorderbyorderdate($orderdate);
                $_SESSION["nofinish"]=$pro;
            }
        }
    }

    public function getorderbyorderdate($orderdate){
        $odao=M("orderinfo");
        $data=$odao->where("orderdate='".$orderdate."'and userorderstate=0")->select();
        return $data;
    }

    public function todelete(){
        $index=I('get.index')-1;
        $mycar=$_SESSION['buycar'];
        array_splice($mycar,$index,1);
        $_SESSION['buycar']=$mycar;
        if (count($_SESSION['buycar'])>0){
            $this->cart();
        }
        else{
            $this->error('购物车为空!','index');
        }
    }

    public function updatenum(){
        $index=I('post.index')-1;
        $pnumber=I('post.pnumber');
        $mycar=$_SESSION['buycar'];
        $mycar[$index]['pnumber']=$pnumber;

        $_SESSION['buycar']=$mycar;
        $this->cart();
    }

    //订单开始===================================================
    //订单开始===================================================
    //订单开始===================================================

    public function order(){
        $totalmoney=0;
        if (isset($_SESSION['user'])){
            $goodsinfo=$_SESSION['buycar'];
            for ($i=0;$i<count($goodsinfo);$i++){
                $pidarr[]=$goodsinfo[$i]['productid'];
            }
            $pids=implode(',',$pidarr);
            $datas=$this->getproductbyids($pids);
            for ($i=0;$i<count($goodsinfo);$i++){
                $datas[$i]['counts']=$goodsinfo[$i]['pnumber'];
                $datas[$i]['xj']=$goodsinfo[$i]['pnumber']*$datas[$i]['productprice'];
                $totalmoney=$totalmoney+$datas[$i]['xj'];
            }
            $oid=I('get.oid');

            if (!empty($oid)) {
                $_SESSION["oid"]=$oid;
            }

            $userid=$_SESSION['user']['userid'];
            $adao=M('addressinfo');
            $data=$adao->where('userid='.$userid)->select();

            $this->assign('data',$data);
            $this->assign('total',$totalmoney);
            $this->assign('datas',$datas);
            $this->display();
        }
        else{
            $this->error('请先登录！','../Userinfo/userlogin');
        }
    }

    public function getorderbyoid($oid){
        $odao=M("orderinfo");
        $order=$odao->where("orderid='$oid'")->find();
        return $order;
    }


    public function addorderinfo($orderid,$orderdate,$productids,$productnames,$pnumber,$ordermoney,$userorderstate,$howtopay,$productnum,$username,$buyername,$buyerphone,$buyeraddress){
        $odao=M("orderinfo");
        $datas['orderid']=$orderid;
        $datas['orderdate']=$orderdate;
        $datas['productids']=$productids;
        $datas['productnames']=$productnames;
        $datas['pnumber']=$pnumber;
        $datas['productnum']=$productnum;
        $datas['ordermoney']=$ordermoney;
        $datas['userorderstate']=$userorderstate;
        $datas['orderstate']=0;
        $datas['howtopay']=$howtopay;
        $datas['username']=$username;
        $datas['buyername']=$buyername;
        $datas['buyerphone']=$buyerphone;
        $datas['buyeraddress']=$buyeraddress;
        $result=$odao->add($datas);
        return $result;
    }

    public function payment(){
        unset($_SESSION["oid"]);
        $oid=I('get.oid');
        if (empty($oid))
        {
            $totalmoney=0;
            $goodsinfo=$_SESSION['buycar'];
            for ($i=0;$i<count($goodsinfo);$i++){
                $pidarr[]=$goodsinfo[$i]['productid'];
                $pnumbers[]=$goodsinfo[$i]['pnumber'];
            }
            $productids=implode(',',$pidarr);
            $pnumber=implode(',',$pnumbers);
            $datas=$this->getproductbyids($productids);
            for ($i=0;$i<count($goodsinfo);$i++){
                $datas[$i]['counts']=$goodsinfo[$i]['pnumber'];
                $datas[$i]['xj']=$goodsinfo[$i]['pnumber']*$datas[$i]['productprice'];
                $totalmoney=$totalmoney+$datas[$i]['xj'];
                $allproductname[]=$datas[$i]['productname'];
            }
            $productnames=implode(',',$allproductname);
            $orderdate=date('Y-m-d H:i:s');
            $userorderstate=1;
            $productnum=count($_SESSION['buycar']);
            $username=$_SESSION['user']['username'];
            $orderid="AFCSL".time();
            $buyername=I('post.buyername');
            $buyerphone=I('post.buyerphone');
            $buyeraddress=I('post.buyeraddress');
            $howtopay="货到付款";
            $result1=$this->addorderinfo($orderid,$orderdate,$productids,$productnames,$pnumber,$totalmoney,$userorderstate,$howtopay,$productnum,$username,$buyername,$buyerphone,$buyeraddress);
            if ($result1){
                $this->success("下单成功！请货到付款!",'index');
                unset( $_SESSION['buycar']);
            }

            else{
                $this->error('下单失败!');
            }
        }
        else{
            $result=$this->updatestate($oid);
            if ($result){
                $this->success("下单成功！请货到付款!",'index');
                unset( $_SESSION['buycar']);
            }
            else{
                $this->error('下单失败!');
            }
        }
    }

    public function notfinish(){
        unset($_SESSION["oid"]);
        $oid=I('get.oid');
        if (empty($oid))
        {
            $totalmoney=0;
            $goodsinfo=$_SESSION['buycar'];
            for ($i=0;$i<count($goodsinfo);$i++){
                $pidarr[]=$goodsinfo[$i]['productid'];
                $pnumbers[]=$goodsinfo[$i]['pnumber'];
            }
            $productids=implode(',',$pidarr);
            $pnumber=implode(',',$pnumbers);
            $datas=$this->getproductbyids($productids);
            for ($i=0;$i<count($goodsinfo);$i++){
                $datas[$i]['counts']=$goodsinfo[$i]['pnumber'];
                $datas[$i]['xj']=$goodsinfo[$i]['pnumber']*$datas[$i]['productprice'];
                $totalmoney=$totalmoney+$datas[$i]['xj'];
                $allproductname[]=$datas[$i]['productname'];
            }
            $productnames=implode(',',$allproductname);
            $orderdate=date('Y-m-d H:i:s');
            $userorderstate=0;
            $productnum=count($_SESSION['buycar']);
            $username=$_SESSION['user']['username'];
            $orderid="AFCSL".time();
            $buyername=I('post.buyername');
            $buyerphone=I('post.buyerphone');
            $buyeraddress=I('post.buyeraddress');
            $howtopay=I('post.howtopay');
            $result1=$this->addorderinfo($orderid,$orderdate,$productids,$productnames,$pnumber,$totalmoney,$userorderstate,$howtopay,$productnum,$username,$buyername,$buyerphone,$buyeraddress);
            if ($result1){
                $this->cart();
            }
        }
    }

    public function updatestate($oid){
        $odao=M("orderinfo");
        $mystate['userorderstate']=1;
        $result=$odao->where("orderid='$oid'")->save($mystate);
        return $result;
    }
}
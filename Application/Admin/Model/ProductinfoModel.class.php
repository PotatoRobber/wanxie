<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/1 0001
 * Time: 下午 4:09
 */

namespace Admin\Model;
use Think\Model;

class ProductinfoModel extends Model{

    public function getpagecount(){
        $pdao=M('productinfo');
        $productcounts=count($pdao->select());
        return $productcounts;
    }

    public function getthispageproduct($page){
        $getall=M('productview');
        $data=$getall->order('productid ASC')->page("$page,10")->select();
        return $data;
    }


       public function getallproduct(){
           $pdao=M('productview');
           $datas=$pdao->order('productid ASC')->select();
           return $datas;
       }

       public function addtheproduct(){
           $pdao=M('productinfo');
           $pdao->create();
           $result=$pdao->add();
           return $result;
       }

    public function saveimg($productname,$imgsrc){
        $pdao=M('productinfo');
        $img['productimg']=$imgsrc;
        $pdao->where("productname='$productname'")->save($img);
    }

       public function checkrepeat($productname){
           $pdao=M('productinfo');
           $data=$pdao->where("productname='$productname'")->find();
           return $data;
       }

       public function deltheproduct($productid){
           $pdao=M('productinfo');
           $result=$pdao->where('productid='.$productid)->delete();
           return $result;
       }

       public function getproductbyid($productid){
           $pdao=M('productinfo');
           $data=$pdao->where('productid='.$productid)->find();
           return $data;
       }

    public function updatehavepic($productid,$productname,$cateid,$typeid,$brandid,$imgsrc,$productprice,$productdetail,$productcount,$isshow,$isrecommend){
        $pdao=M('productinfo');
        $myarr['productname']=$productname;
        $myarr['cateid']=$cateid;
        $myarr['typeid']=$typeid;
        $myarr['brandid']=$brandid;
        $myarr['productimg']=$imgsrc;
        $myarr['productprice']=$productprice;
        $myarr['productdetail']=$productdetail;
        $myarr['productcount']=$productcount;
        $myarr['isshow']=$isshow;
        $myarr['isrecommend']=$isrecommend;
        $data=$pdao->where("productid='$productid'")->save($myarr);
        return $data;
    }

    public function updatenopic($productid,$productname,$cateid,$typeid,$brandid,$productprice,$productdetail,$productcount,$isshow,$isrecommend)
    {
        $pdao = M('productinfo');
        $myarr['productname'] = $productname;
        $myarr['cateid'] = $cateid;
        $myarr['typeid'] = $typeid;
        $myarr['brandid'] = $brandid;
        $myarr['productprice'] = $productprice;
        $myarr['productdetail'] = $productdetail;
        $myarr['productcount'] = $productcount;
        $myarr['isshow'] = $isshow;
        $myarr['isrecommend'] = $isrecommend;
        $data = $pdao->where("productid='$productid'")->save($myarr);
        return $data;
    }
}
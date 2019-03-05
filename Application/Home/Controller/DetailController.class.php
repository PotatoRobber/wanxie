<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/6 0006
 * Time: 下午 7:11
 */

namespace Home\Controller;


use Think\Controller;

class DetailController extends Controller
{
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

    public function Detail(){
        $productid=I('get.productid');
        $data=$this->getproductbyid($productid);

        $this->assign("p",$data);
        $this->display();
    }

}


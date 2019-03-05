<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/8 0008
 * Time: 下午 2:14
 */

namespace Admin\Model;


use Think\Model;

class OrderinfoModel extends Model
{
    public function getpagecount(){
        $pdao=M('orderinfo');
        $productcounts=count($pdao->select());
        return $productcounts;
    }

    public function getthispageproduct($page){
        $getall=M('orderinfo');
        $data=$getall->order('orderdate ASC')->page("$page,10")->select();
        return $data;
    }

    public function deltheorder($orderid){
        $pdao=M('orderinfo');
        $result=$pdao->where("orderid='$orderid'")->delete();
        return $result;
    }

    public function getorderbyid($orderid){
        $pdao=M('orderinfo');
        $data=$pdao->where("orderid='$orderid'")->find();
        return $data;
    }

    public function updatestate($orderid,$orderstate)
    {
        $pdao = M('orderinfo');
        $myarr['orderstate'] = $orderstate;
        $data = $pdao->where("orderid='$orderid'")->save($myarr);
        return $data;
    }
}
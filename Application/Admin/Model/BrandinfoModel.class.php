<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/1 0001
 * Time: 下午 7:57
 */

namespace Admin\Model;


use Think\Model;

class BrandinfoModel extends Model
{
    public function getAll(){
        $bdao=D('brandinfo');
        $data = $bdao->select();
        return $data;
    }
    public function getbrandbybrandname($bname){
        $bdao=D('brandinfo');
        $data = $bdao->where("brandname='"."$bname"."'")->find();
        return $data;
    }
    public function addbrand($data){
        $bdao=D('brandinfo');
        $bdao->data($data)->add();
    }
    public function getproductbybrandid($bid){
        $bdao=D('brandinfo');
        $data = $bdao->where("brandid='"."$bid"."'")->find();
        return $data;
    }
    public function editBrand($data){
        $bdao=D('brandinfo');
        $result = $bdao->where("brandid=".$data['brandid'])->save($data);
        return $result;
    }
    public function isbrandhaveproduct($brandid){
        $pdao=D('productinfo');
        $data = $pdao->where("brandid='"."$brandid"."'")->find();
        if ($data){
            return true;
        }else{
            return false;
        }
    }

}
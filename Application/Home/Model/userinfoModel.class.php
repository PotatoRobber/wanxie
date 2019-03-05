<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/8 0008
 * Time: 下午 4:24
 */
namespace Home\Model;
class userinfoModel extends \Think\Model
{
    public function addUser($data){
        $udao = M("userinfo");

        $udao->data($data)->add();
    }

    public function numberRepeat($phoneNumber){
        $udao = M("userinfo");
        $data = $udao->where("username='"."$phoneNumber"."'")->find();

        return $data;
    }
}
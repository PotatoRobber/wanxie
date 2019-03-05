<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/5 0005
 * Time: 下午 2:08
 */

namespace Home\Controller;

use Think\Controller;
use Home\Model\userinfoModel;
use Common\Controller\AlismsController;//注意

class RegisterController extends Controller
{
    //短信验证码注册
    public function sendCode(){

        $iphone=I('post.iphone');

        $code = new AlismsController(); //此类存放在Common\Controller\
       $a = $code->code($iphone,$msg);


        echo $a;

    }
//判断验证码是否正确
    public function checkCode(){
        dump($_SESSION['iphonecode']);
        return;
    }



    //展示注册页面
    public function Register(){
        $this->display();

    }

    public function submitForm(){
        $this->Register();

        $umodel = new userinfoModel();
        $phoneNumber=I('post.phoneNumber');
        $this->numberRepeat();
        $pwd=I('post.pwd');
        $pwd=md5($pwd);
        $data=array('username'=>$phoneNumber,'userpsw'=>$pwd);
        $umodel->addUser($data);
        $this->success('注册成功',Register);
    }

    public function numberRepeat(){
        $umodel = new userinfoModel();
        $phoneNumber=I('post.phoneNumber');
        $data = $umodel->numberRepeat($phoneNumber);
        if ($data){
            $this->error('该手机号已被注册');
        }
    }

}
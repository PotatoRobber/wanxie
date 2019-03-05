<?php
namespace Common\Controller;
use Think\Controller;
use Aliyun\DySDKLite\SignatureHelper;
require_once "__ROOT__/Api/SignatureHelper.php"; //第一步中阿里云接口存放SignatureHelper.php的路径
class AlismsController extends Controller {

    public function _initialize(){
        $this->accessKeyId = "LTAInm471jG7dII9"; //AccessKeyId
        $this->accessKeySecret = "SbGfrd7k6McDFia8cEEuxiIYFcH2am"; //AccessKeySecret
        $this->SignName = "玩鞋wanxie"; //签名
        $this->CodeId = "SMS_151231101"; //验证码模板ID
    }

    //发送验证码
    public function code($phone,&$msg){

        if(!isphone($phone)){
            $msg = "手机号不正确";
            return false;
        }

        $params["PhoneNumbers"] = $phone;
//        $params["TemplateCode"] = $this->CodeId; //模板
        $params["TemplateCode"] = "SMS_151231101";
        //记录存储验证码
        $code = rand(100000,999999);
        session("iphonecode",$phone.$code);//session存储手机号+验证码
        $params['TemplateParam'] = ["code" => $code]; //验证码

        return '10';
//        return $this->send($params,$msg);
    }

    //验证手机号是否正确
　　private function isphone($phone){
    if (!is_numeric($phone)) {
        return false;
    }
    return preg_match("/^1[34578]{1}\d{9}$/", $phone) ? true : false;
}

    //发送短信消息
    private function send($params=[],&$msg){

        $params["SignName"] = $this->SignName;

        if(!empty($params["TemplateParam"]) && is_array($params["TemplateParam"])) {
            $params["TemplateParam"] = json_encode($params["TemplateParam"], JSON_UNESCAPED_UNICODE);
        }
        $helper = new SignatureHelper();
        $content = $helper->request(
            $this->accessKeyId,
            $this->accessKeySecret,
            "dysmsapi.aliyuncs.com",
            array_merge($params, array(
                "RegionId" => "cn-hangzhou",
                "Action" => "SendSms",
                "Version" => "2017-05-25",
            ))
        );

        if($content===false){
            $msg = "发送异常";
            return false;
        }else{
            $data = (array)$content;
            if($data['Code']=="OK"){
                $msg = "发送成功";
                return true;
            }else{
                $msg = "发送失败 ".$data['Message'];
                return false;
            }
        }
    }
}
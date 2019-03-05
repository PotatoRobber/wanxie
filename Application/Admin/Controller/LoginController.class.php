<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $admin=D('admin');
        if (IS_POST){
            if ($admin->create($_POST,4)){
                if ($admin->login()){
                    $this->success('登录成功,请稍候',U('Index/index'));
                }else{
                    $this->error('用户名或密码错误');
                }
            }else{
                $this->error($admin->getError());
            }
            return;
        }
        $this->display();
    }
    public function verify(){
        $config = array(
            'fontSize' => 30, // 验证码字体大小
            'length' => 3, // 验证码位数
            'useNoise' => false, // 关闭验证码杂点
            );
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }
}
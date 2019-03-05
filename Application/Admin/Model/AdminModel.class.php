<?php
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model {
    protected $_validate=array(
        array('username','require','管理员名称不能为空',1),
        array('password','require','管理员密码不能为空',1,'regex',1),
        array('username','','管理员名称已经存在！',1,'unique',3),
        array('verify','check_verify','验证码错误',1,'callback',4),
    );
    public function login(){
        $password=$this->password;
        $info=$this->where(array('username'=>$this->username))->find();
        if ($info){
            if (md5($password)==$info['password']){
                session('uid',$info['id']);
                session('username',$info['username']);
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    public function check_verify($code, $id = ''){
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }
    protected function _before_delete($option)
    {
        if ($option['where']['id'] == 1||$option['where']['id'] == 2||$option['where']['id'] == 3) {
            return FALSE;
        }
        else{
            return true;
        }
    }
}
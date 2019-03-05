<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/7 0007
 * Time: 下午 3:07
 */

namespace Home\Controller;

use Think\Controller;

class UserinfoController extends Controller
{
    public function userlogin(){
        if (isset($_SESSION['user'])){
            $this->redirect('usercount');
        }
        else{
            $this->display();
        }
    }

    public function getstatue(){
        if (isset($_SESSION['user'])){
            echo 1;
        }
        else{
            echo 0;
        }
    }

    public function checkpsw($username,$userpsw){
        $udao=M('userinfo');
        $result=$udao->where("username='".$username."'and userpsw='".$userpsw."'")->find();
        return $result;
    }

    public function checklogin(){
        $username=I('post.username');
        $userpsw=I('post.userpsw');
        $result=$this->checkpsw($username,md5($userpsw));
        if ($result==null){
            $this->error('账号或密码错误，请重新登录！');
        }
        else if ($result==false){
            $this->error('数据库错误！');
        }
        else{
            $_SESSION['user']=$result;
            $this->redirect('usercount');
        }
    }

    public function loginout(){
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
            $this->redirect('Index/index');
        }
        else{
            $this->error('当前处于未登录状态!','../Index/index');
        }
    }

    public function getorderbyusername($username,$userorderstate){
        $odao=M("orderinfo");
        $datas=$odao->where("username='".$username."'and userorderstate=".$userorderstate)->select();
        return $datas;
    }

    public function waitmygoods(){
        $username=$_SESSION['user']['username'];
        $userorderstate=1;
        $datas=$this->getorderbyusername($username,$userorderstate);
        if (count($datas)>0){
            $this->assign('datas',$datas);
            $this->display();
        }
        else{
            $tips="当前暂无已完成订单!";
            $this->assign("tips",$tips);
            $this->display();
        }
    }

    public function waittopay(){
        $username=$_SESSION['user']['username'];
        $userorderstate=0;
        $datas=$this->getorderbyusername($username,$userorderstate);
        if (count($datas)>0){
            $this->assign('datas',$datas);
            $this->display();
        }
        else{
            $tips="当前暂无已完成订单!";
            $this->assign("tips",$tips);
            $this->display();
        }
    }

    public function delorder($oid){
        $odao=M("orderinfo");
        $result=$odao->where("orderid='$oid'")->delete();
        return $result;
    }

    public function withdraw()
    {
        $oid=I('get.oid');
        $state=I('get.state');
        $result=$this->delorder($oid);
        if ($result && $state==1){
            $this->success('订单取消成功!','waitmygoods');
        }
        else if ($result && $state==0){
            $this->success('订单取消成功!','waittopay');
        }
    }

    public function getaddressinfobyid($userid){
        $adao=M('addressinfo');
        $data=$adao->where('userid='.$userid)->select();
        return $data;
    }

    public function countinfo(){
        $userid=$_SESSION['user']['userid'];
        $data=$this->getaddressinfobyid($userid);
        $this->assign('data',$data);
        $this->display();
    }

    public function savecountinfo(){
        $udao=M('userinfo');
        $username=I('post.username');
        $buyername=I('post.buyername');
        $buyerphone=I('post.buyerphone');
        $buyeraddress=I('post.buyeraddress');

        $userinfo['buyername']=$buyername;
        $userinfo['buyerphone']=$buyerphone;
        $userinfo['buyeraddress']=$buyeraddress;
        $data=$udao->where("username='".$username."'")->save($userinfo);
        if ($data){
            $this->success('信息保存成功！','allorder');
        }
    }

    public function addtheaddress(){
        $target=I('get.target');
        $adao=M('addressinfo');
        $adao->create();
        $result=$adao->add();
        if ($target==1){
            if ($result){
                $this->success('添加成功！','countinfo');
            }
            else{
                $this->error('添加失败!');
            }
        }
        else{
            if ($result){
                $this->success('添加成功！','../Index/order');
            }
            else{
                $this->error('添加失败!');
            }
        }

    }

    public function  addnewaddress(){
        $this->display();
    }

    public function deladdress(){
        $addressid=I('get.addressid');
        $adao=M('addressinfo');
        $result=$adao->where('addressid='.$addressid)->delete();
        if ($result){
            $this->success("删除成功!");
        }
        else{
            $this->error('删除失败!');
        }
    }

    public function getaddress(){
        $addressid=I('get.addressid');
        $adao=M('addressinfo');
        $data=$adao->where('addressid='.$addressid)->find();
        $this->assign('data',$data);
        $this->display();
    }

    public function updatetheaddress(){
        $addressid=I('post.addressid');
        $myarr['buyername']=I('post.buyername');
        $myarr['buyerphone']=I('post.buyerphone');
        $myarr['buyeraddress']=I('post.buyeraddress');

        $adao=M('addressinfo');
        $result=$adao->where('addressid='.$addressid)->save($myarr);
        if($result){
            $this->success('编辑成功','countinfo');
        }
        else{
            $this->error('编辑失败!');
        }
    }

    public function updatestate($oid){
        $odao=M("orderinfo");
        $mystate['userorderstate']=1;
        $result=$odao->where("orderid='$oid'")->save($mystate);
        return $result;
    }

    public function getorderbyorderdate($orderdate){
        $odao=M("orderinfo");
        $data=$odao->where("orderdate='".$orderdate."'and userorderstate=0")->select();
        return $data;
    }

    //ajax获取等待收货与代付款商品个数====================
    public function havenofinish(){
        $username=$_SESSION['user']['username'];
        $userorderstate=0;
        $datas=$this->getorderbyusername($username,$userorderstate);
        echo count($datas);
    }

    public function wait(){
        $username=$_SESSION['user']['username'];
        $userorderstate=1;
        $datas=$this->getorderbyusername($username,$userorderstate);
        echo count($datas);
    }

}
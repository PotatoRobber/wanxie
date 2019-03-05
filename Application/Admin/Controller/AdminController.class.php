<?php
namespace Admin\Controller;
class AdminController extends CommonController {
    public function lst(){
        $admin=D('admin');
        $count = $admin->count();
        $Page = new \Think\Page($count,3);
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('first','首页');
        $Page->setConfig('last',"共%TOTAL_PAGE%页");
        $show = $Page->show();
        $adminres= $admin->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page',$show);
        $this->assign('adminres',$adminres);
        $this->display();
    }
    public function add(){
        $admin=D('admin');
        if (IS_POST){
            if ($admin->create()){
                $admin->password=md5($admin->password);
                if ($admin->add()){
                    $this->success('管理员添加成功!',U('lst'));
                }else{
                    $this->error('管理员添加失败!');
                }
            }
            else{
                $this->error($admin->getError());
            }
            return;
        }
        $this->display();
    }
    public function edit(){
        $admin=D('admin');
        $admins=$admin->where(array('id'=>I('id')))->find();
        $this->assign('admins',$admins);
        if (IS_POST){
            if($admin->create()){
                if (I('password')){
                    $admin->password=md5($admin->password);
                }else{
                    $admin->password=$admins['password'];
                }
                $save=$admin->save();
                if ($save !== false){
                    $this->success('修改管理员成功',U('lst'));
                }else{
                    $this->error('修改管理员失败');
                }
            }
            else{
            $this->error($admin->getError());
        }
        return;
        }
        $this->display();
    }
    public function del(){
        $admin=D('admin');
        if ($admin->delete(I('id'))){
            $this->success('删除管理员成功',U('lst'));
        }else{
            $this->error('超级管理员不能删除');
        }
    }
    public function loginout(){
        session(null);
        $this->success('退出成功',U('Login/index'));
    }
}
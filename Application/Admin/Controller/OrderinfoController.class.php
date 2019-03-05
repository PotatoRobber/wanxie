<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/8 0008
 * Time: 下午 2:00
 */

namespace Admin\Controller;


use Admin\Model\OrderinfoModel;

class OrderinfoController extends CommonController
{
    public function showorder(){
        $pmodel=new OrderinfoModel();
        $counts=$pmodel->getpagecount();
        $totalpages=ceil($counts/10);

        $page=I('get.page');
        if ($page){
            $data=$pmodel->getthispageproduct($page);
        }
        else{
            $page=1;
            $data=$pmodel->getthispageproduct($page);
        }
        $this->assign('pages',$totalpages);
        $this->assign("allorder",$data);
        $this->display();
    }

    public function delorder(){
        $orderid=I('get.orderid');
        $pmodel=new OrderinfoModel();
        $result=$pmodel->deltheorder($orderid);
        if ($result){
            $this->success("删除成功!");
        }
        else{
            $this->error("删除失败!");
        }
    }

    public function updateorder(){
        $orderid=I('get.orderid');
        $pmodel=new OrderinfoModel();
        $data=$pmodel->getorderbyid($orderid);

        $this->assign("data",$data);
        $this->display();
    }

    public function updatetheorder(){
        $orderid=I('post.orderid');
        $orderstate=I('post.orderstate');

        $pmodel=new OrderinfoModel();
            $bool=$pmodel->updatestate($orderid,$orderstate);
            if ($bool){
                $this->success("商品编辑成功！","showorder");
            }
            else{
                $this->error("商品编辑失败！","showorder");
            }
    }
}
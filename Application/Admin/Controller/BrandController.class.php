<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/1 0001
 * Time: 下午 7:56
 */

namespace Admin\Controller;
use Admin\Model\BrandinfoModel;

class BrandController extends CommonController
{
    public function lst()
    {
        $bmodel = new BrandinfoModel();
        $data = $bmodel->getAll();
        $this->assign("branddata", $data);
        $this->display();

    }
    public function add(){
        $this->display();
    }
    public function addBrand()
    {
//        $this->islogin();
        $brandname=I("post.brandname");
        $brandnote=I("post.brandnote");

//上传图片
        $filename = $_FILES['brandimg']['name'];//获取到上传的文件的名称
        $filetype = $_FILES['brandimg']['type'];
        $filesize = $_FILES['brandimg']['size'];
        $fileTmp = $_FILES['brandimg']['tmp_name']; //文件临时存放的名字
        $newfilename =(time()*3+35);
        $filearray = (explode(".",$filename));
        $filepath="public/images/uploadfiles/".$newfilename.'.'.$filearray[count($filearray)-1];
        move_uploaded_file($fileTmp,$filepath);


        $pmodel = new BrandinfoModel();
        $result = $pmodel->getbrandbybrandname($brandname);
        if($result){
            $this->error("商品名称 $brandname 已经存在");
        }else{
            $data=array('brandname'=>$brandname,'brandnote'=>$brandnote,'brandlogo'=>$filepath);
            $pmodel->addbrand($data);
            $this->success("添加成功",'lst');
        }
    }
    public function del(){
        $bdao=D('brandinfo');
        $brandid =I('get.brandid');

        $bmodel = new BrandinfoModel();
        $flag = $bmodel->isbrandhaveproduct($brandid);
        if ($flag){
            $this->error('该品牌下还存在商品，请先删除相应商品','lst');
        }else{
            $bdao->where('brandid='.$brandid)->delete();
            $this->success('删除成功','lst');
        }


    }
    public function edit(){
        $bmodel = new BrandinfoModel();
        $bid=I('get.brandid');

        $data = $bmodel->getproductbybrandid($bid);
//        $_SESSION['updatedata']=$data;

//dump($data);
//return;
        $this->assign("branddata",$data);
        $this->display();
    }

    public function editBrand(){
        $brandid=I("post.brandid");
        $brandname=I("post.brandname");
        $brandnote=I("post.brandnote");

//上传图片
        $filename = $_FILES['brandimg']['name'];//获取到上传的文件的名称
        $filetype = $_FILES['brandimg']['type'];
        $filesize = $_FILES['brandimg']['size'];
        $fileTmp = $_FILES['brandimg']['tmp_name']; //文件临时存放的名字
        $newfilename =(time()*3+35);
        $filearray = (explode(".",$filename));
        $filepath="public/images/uploadfiles/".$newfilename.'.'.$filearray[count($filearray)-1];
        move_uploaded_file($fileTmp,$filepath);


        $pmodel = new BrandinfoModel();

        if($fileTmp){
            $data=array('brandid'=>$brandid,'brandname'=>$brandname,'brandnote'=>$brandnote,'brandlogo'=>$filepath);
        }else{
            $data=array('brandid'=>$brandid,'brandname'=>$brandname,'brandnote'=>$brandnote);
        }
        $pmodel->editBrand($data);
        $this->success("修改成功",'lst');
    }

}
<?php
namespace Admin\Controller;
use Admin\Model\ProductinfoModel;

class ProductinfoController extends CommonController {
      public function showproduct(){
            $pmodel=new ProductinfoModel();
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
            $this->assign("allproduct",$data);
            $this->display();
      }
      public function showadd(){
          //暂时! 获取所有商品类型，后期替换模型
          $tdao=M('cate');
          $allfirsttype=$tdao->select();
          //暂时! 获取所有品牌，后期替换模型
          $bdao=M('brandinfo');
          $allbrand=$bdao->select();
          $this->assign("allfirsttype",$allfirsttype);
          $this->assign("allbrand",$allbrand);
          $this->display();
      }

      public function getsecondcate(){
         $cateid=I('get.cateid');
         $tdao=M('typeinfo');
         $datas=$tdao->where("cateid=".$cateid)->select();
         $result=json_encode($datas);
         echo $result;
      }

      public function addproduct(){
          $productname=I('post.productname');
          $pmodel=new ProductinfoModel();
          $data=$pmodel->checkrepeat($productname);
          if ($data){
              $this->error("该商品名称已存在，无法添加！");
          }
          else{
              $upload=new \Think\Upload();
              $upload->maxSize=3145728;// 设置附件上传大小
              $upload->exts=array('jpg', 'gif', 'png', 'jpeg');//设置附件上传类型
              $upload->savePath = './Public/Uploads/'; // 设置附件上传目录
              // 上传文件
              $info=$upload->upload();
              if(!$info)
              {// 上传错误提示错误信息
                  $this->error($upload->getError());
              }
              else
              {// 上传成功
                  $str=$info['productimg']['savepath'];
                  $path=substr("$str",1);
                  $prevpath="/Uploads";
                  $imgsrc=$prevpath.$path.$info['productimg']['savename'];
                  $pmodel->addtheproduct();
                  $pmodel->saveimg($productname,$imgsrc);
                  $this->success("新增商品成功!","showproduct");
              }
          }
      }

      public function delproduct(){
          $productid=I('get.productid');
          $pmodel=new ProductinfoModel();
          $result=$pmodel->deltheproduct($productid);
          if ($result){
              $this->success("删除成功!","showproduct");
          }
          else{
              $this->error("删除失败!","showproduct");
          }
      }

      public function updateproduct(){
          $productid=I('get.productid');
          $pmodel=new ProductinfoModel();
          $data=$pmodel->getproductbyid($productid);

          //暂时! 获取所有商品类型，后期替换模型
          $cdao=M('cate');
          $cate=$cdao->select();
          //暂时! 获取所有品牌，后期替换模型
          $bdao=M('brandinfo');
          $brand=$bdao->select();
          //暂时! 获取所有类型，后期替换模型
          $tdao=M('typeinfo');
          $type=$tdao->select();

          $this->assign("cate",$cate);
          $this->assign("type",$type);
          $this->assign("brand",$brand);
          $this->assign("data",$data);

          $this->display();
      }

          public function updatetheproduct(){
              $productid=I('post.productid');
              $productname=I('post.productname');
              $cateid=I('post.cateid');
              $typeid=I('post.typeid');
              $brandid=I('post.brandid');
              $productimg=I('post.productimg');
              $productprice=I('post.productprice');
              $productdetail=I('post.productdetail');
              $productcount=I('post.productcount');
              $isshow=I('post.isshow');
              $isrecommend=I('post.isrecommend');


                  $pmodel=new ProductinfoModel();
                  $upload=new \Think\Upload();
                  $upload->maxSize=3145728;// 设置附件上传大小
                  $upload->exts=array('jpg', 'gif', 'png', 'jpeg');//设置附件上传类型
                  $upload->savePath = './Public/Uploads/'; // 设置附件上传目录
                  // 上传文件,判断是否有文件上传
                  $info=$upload->upload();
                  if(!$info)
                  {// 假如没有图片上传，直接修改
                      $pmodel=new ProductinfoModel();
                      $bool2=$pmodel->updatenopic($productid,$productname,$cateid,$typeid,$brandid,$productprice,$productdetail,$productcount,$isshow,$isrecommend);
                      if ($bool2){
                          $this->success("商品编辑成功！","showproduct");
                      }
                      else{
                          $this->error("商品编辑失败！","showproduct");
                      }
                  }
                  else
                  {// 有文件上传成功,加入图片地址，进行修改
                      $str=$info['productimg']['savepath'];
                      $path=substr("$str",1);
                      $prevpath="/Uploads";
                      $imgsrc=$prevpath.$path.$info['productimg']['savename'];
                      $bool=$pmodel->updatehavepic($productid,$productname,$cateid,$typeid,$brandid,$imgsrc,$productprice,$productdetail,$productcount,$isshow,$isrecommend);
                      if ($bool){
                          $this->success("商品编辑成功！","showproduct");
                      }
                      else{
                          $this->error("商品编辑失败！","showproduct");
                      }
                  }
              }

}
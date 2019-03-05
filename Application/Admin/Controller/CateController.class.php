<?php
namespace Admin\Controller;
class CateController extends CommonController {
    public function lst(){
        header("Content-type:text/html;charset=utf-8");
        $cate=D('cate');
        $cateres=$cate->catetree();
        $this->assign('cateres',$cateres);//获取栏目树
        $this->display();
       }
    public function add(){
        $cate=D('cate');
        if (IS_POST){
            if ($cate->create()){
                if ($cate->add()){
                    $this->success('添加栏目成功',U('lst'));
                }
                else{
                    $this->error('添加栏目失败');
                }
            }else{
                $this->error($cate->getError());
            }
            return;
        }
        $cateres=$cate->catetree();
        $this->assign('cateres',$cateres);
        $this->display();
    }
    public function edit(){
        $cate=D('cate');
        if (IS_POST){
            $data['catename']=I('catename');
            $data['pid']=I('pid');
            $data['id']=I('id');
            if ($cate->create($data)){
                $save=$cate->save();
                if ($save!==false){
                    $this->success('修改栏目成功',U('lst'));
                }
                else{
                    $this->error('修改栏目失败');
                }
            }else{
                $this->error($cate->getError());
            }
            return;
        }
        $cates=$cate->find(I('id'));
        $this->assign('cates',$cates);
        $cateres=$cate->catetree();
        $this->assign('cateres',$cateres);
        $this->display();
    }
    public function del(){
        $cate=D('cate');
        $childids=$cate->getchild(I('id'));
        $childids=implode(',',$childids);
        if ($cate->delete($childids)){
            $this->success('删除栏目成功',U('lst'));
        }
        else{
            $this->error('删除栏目失败');
        }
    }
}
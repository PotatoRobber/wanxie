<?php
namespace Admin\Model;
use Think\Model;
class CateModel extends Model {
    protected $_validate=array(
        array('catename','require','分类名称不能为空',1),
        array('catename','','分类名称已经存在！',1,'unique',2),
    );
    public function catetree(){
        $data=$this->order('id desc')->select();
        return $this->resort($data);
    }
    public function resort($data,$pid=0,$level=0){
        static $arr=array();
        foreach ($data as $k =>$v){
            if ($v['pid']==$pid){
                $v['level']=$level;
                $arr[]=$v;
                $this->resort($data,$v['id'],$level+1);
            }
        }
        return $arr;
    }
    public function getchild($cateid){
        $data=$this->select();
        return $this->getchildids($data,$cateid);
    }
    public function getchildids($data,$cateid){
        static $ret=array();
        $ret[]=$cateid;
        foreach ($data as $k => $v){
            if ($v['pid']==$cateid){
                $ret[]=$v['id'];
                $this->getchildids($data,$v['id']);
            }
        }
        return array_unique($ret);
    }
}
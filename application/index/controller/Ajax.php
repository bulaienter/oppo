<?php
namespace app\index\controller;
use think\Controller;

class Ajax extends Controller{
//检查串码是否已提交
    public function checkimei(){
        if(!request()->isAjax()) {$this->error('非法访问！');}
        $id=input('adjustid');
        //echo $id;
        $imei=input('imei');
        $typeid=input('mobiletypeid');
        $nid=input('mobilenid');
        
        $where_imei['imei']=array('eq',$imei);       
        $where_imei['typeid']=array('eq',$typeid);
        
        $where_adjust['imei'] = array('eq',$imei);
        $where_adjust['nid'] = array('eq',$nid);
        if($id){$where_adjust['id']=array('neq',$id);}
        
        if(!db('imei')->where($where_imei)->find() && 1==2)
            {
                echo 1;//1:此机型下不存在这个串码的手机;
            }
            elseif(db('adjust')->where($where_adjust)->find())
            {
                echo 2;//2：这个串码手机业务员已经提交过
            }
        else
            {
                echo 3;//3：正常情况 可以提交
            }

    }
 









}
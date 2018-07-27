<?php
namespace app\admin\controller;
use app\admin\model\Conf as ConfModel;
use app\admin\controller\Common;
class Conf extends Common
{



    public function conf(){
        if(request()->isPost()){
            $data=input('post.');
            $data['cp_manager'] = str_replace('，',',',$data['cp_manager']);
            $data['cp_address'] = str_replace('，',',',$data['cp_address']);
            $conf=new ConfModel;
            $save=$conf->where(array('id'=>'1'))->update($data);
            if($save){
                $this->success('修改配置成功！',url('conf'));
            }else{
                $this->error('修改配置失败！');
            }
            return;
        }
        $conf=new ConfModel;
        $confres=$conf->where(array('id'=>'1'))->find();
        
        $this->assign('confres',$confres);
        //var_dump($confres);die;
        return view();
    }
    
    public function conf_en(){
        if(request()->isPost()){
            $data=input('post.');
            $data['cp_manager_en'] = str_replace('，',',',$data['cp_manager_en']);
            $data['cp_address_en'] = str_replace('，',',',$data['cp_address_en']);
            $conf=new ConfModel;
            $save=$conf->where(array('id'=>'1'))->update($data);
            if($save){
                $this->success('修改配置成功！',url('conf'));
            }else{
                $this->error('修改配置失败！');
            }
            return;
        }
        $conf=new ConfModel;
        $confres=$conf->where(array('id'=>'1'))->find();
    
        $this->assign('confres',$confres);
        //var_dump($confres);die;
        return view();
    }



























}

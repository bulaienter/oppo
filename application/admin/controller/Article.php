<?php
namespace app\admin\controller;
use app\admin\model\PhoneBook as PhoneBookModel;
use app\admin\model\Adjust as AdjustModel;
use app\admin\controller\Common;
class Article extends Common
{
    public function lst(){
        $adjust=db('adjust')->field('a.*,b.sname,b.sarea')->alias('a')->join('mr_store b','a.sid=b.id')->order('a.id desc')->select();                 
        //手机型号名
        foreach ($adjust as $k=>$v) {
            $typename = db('mobiletype')->where(array('id'=>$v['typeid']))->find();
            $adjust[$k]['typename'] = $typename['m_mobile'];
        }
        //dump($adjust);exit();
        $this->assign('adjust',$adjust); 
        //业务员姓名
        $phonebook=new PhoneBookModel;
        $test = $phonebook->select();
        $this->assign('test',$test);
        return view();
    }
    public function article(){
        $id=input('id');                
        $article=db('adjust')->where(array('id'=>$id))->find();
        $mobiletype=db('mobiletype')->where(array('id'=>$article['typeid']))->find();
        $store=db('store')->where(array('id'=>$article['sid']))->find();
        $pname=db('phone_book')->where(array('id'=>$article['pid']))->find();
        $this->assign('mobiletype',$mobiletype);
        $this->assign('store',$store);
        $this->assign('pname',$pname);
        //var_dump($cate);die;
        $this->assign('article',$article);
        return view();
    }
    
    public function del(){
        if(AdjustModel::destroy(input('id'))){
            $this->success('删除成功！',url('lst'));
        }else{
            $this->error('删除失败！');
        }
    }
    
    public function pdel(){
        $pdel_id=input('pid');                      
        if(db('adjust')->delete($pdel_id)){
            echo 1;
        }else{
            echo -1;
        }
    }
    //修改状态
    public function state_edit(){
        if(!request()->isAjax()) {$this->error('非法访问！');}
        $id_adjust=input('id');
        $state=input('state');
        $desc = input('desc');
        $adjust_edit=db('adjust')->update(['id'=>$id_adjust,'state'=>$state,'desc'=>$desc]);

        if($adjust_edit){echo 1;}else {echo -1;}
    }

    





















}

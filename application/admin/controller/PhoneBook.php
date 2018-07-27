<?php
namespace app\admin\controller;
use app\admin\controller\Common;
class PhoneBook extends Common
{
public function index()
    {
        return view();
    }
    public function lst()
   {    $phonebook=db('phone_book')->order('id desc')->select();
        $count=db('phone_book')->count();
        $nickname=db('phone_book')->order('nickname desc')->field('nickname')->select() ;
        //var_dump($nickname);die;
        $this->assign('phonebook',$phonebook);
        $this->assign('count',$count);
        $this->assign('nickname',$nickname);

        return view();
    }

    public function add(){
    if(!request()->isAjax()) {$this->error('非法访问！');}
        $data['nickname']=input('nickname');
        $data['phonenum']=input('phonenum');
        $data['notes']=input('notes');



        if(!db('phone_book')->insert($data)){
            echo 1;
        }else{
            echo -1;
        }
    }

    public function edit(){
        if(!request()->isAjax()) {$this->error('非法访问！');}
        $data['nickname']=input('nickname');
        $data['phonenum']=input('phonenum');
        $data['notes']=input('notes');
        //$data['id']=input('id');


        if(!db('phone_book')->where(array('id'=>input('id')))->update($data)){
            echo 2;
        }else{
            echo 3;
        }
    }

    public function delete(){
        if(db('phone_book')->where('id',input('id'))->delete()){
            echo 1;
        }else{
           echo -1;
        }
    }
    public function pdel(){
        $pdel_id=input('pid');



        if(db('phone_book')->delete($pdel_id)){
            echo 1;
        }else{
            echo -1;
        }
    }

public function e_lst(){
        $onsale=input('onsl');
        //var_dump($onsale);die;
        $where=array('e_onsale'=>$onsale);
        if($onsale ==null){$where='';}
        $employee=db('employee')->where($where)->order('e_sort desc')->select();
        $count=db('employee')->where($where)->count();

        $this->assign('employee',$employee);
        $this->assign('count',$count);
        return view();
    }

    public function e_add(){
        if(request()->isPost()){
            $data=input('post.');
            $onsale=input('e_onsale');
            $recommend=input('e_recommend');

            if(!$onsale){$data['e_onsale']="0";}
            if(!$recommend){$data['e_recommend']="0";}
            $data['e_scope'] = rtrim($data['e_scope'], ',');

            $employee=db('employee')->insert($data);
            if($employee){
                $this->success('添加订单成功',url('e_lst'));
            }else{
                $this->error('添加订单失败！');
            }
            return;
        }
        return view();
    }
    public function e_edit(){
        if(request()->isPost()){
            $data=input('post.');
            $id=$data['id'];
            $onsale=input('e_onsale');
            $recommend=input('e_recommend');

        if(!$onsale){$data['e_onsale']="0";}
        if(!$recommend){$data['e_recommend']="0";}
            //var_dump($data);die;
        $data['e_scope'] = rtrim($data['e_scope'], ',');
            $employee=db('employee')->where(array('id'=>$id))->update($data);
            if($employee){
                $this->success('修改名单成功',url('e_lst'));
            }else{
                $this->error('修改名单失败！');
            }
            return;
        }

        $employee=db('employee')->where(array('id'=>input('id')))->find();

        $this->assign(array(
            'employee'=>$employee,

        ));
        return view();
    }

    public function e_del(){
        $employee=db('employee')->where(array('id'=>input('id')))->delete();
        if($employee){
            $this->success('删除订单成功！',url('e_lst'));
        }else{
            $this->error('删除订单失败！');
        }
    }

    //改变排序
    public function  changesort(){
        if(!request()->isAjax()) {$this->error('非法访问！');}
        $id_sort=input('id');
        $value_sort=input('sort');

        $save=db('employee')->update(['id'=>$id_sort,'e_sort'=>$value_sort]);
        if($save){echo 1;}else {echo -1;}

    }

    public function e_pdel(){
        $pdel_id=input('pid');



        if(db('employee')->delete($pdel_id)){
            echo 1;
        }else{
            echo -1;
        }
    }


}

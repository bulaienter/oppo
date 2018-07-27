<?php
namespace app\admin\controller;

use app\admin\model\Notice as NoticeModel;

use app\admin\controller\Common;
class Notice extends Common
{   


    public function lst(){
        $notice=db('notice')->order('sort desc')->select();
        $this->assign('notice',$notice);        
        $publish_time = 0;
        $this->assign('publish_time',$publish_time);
        return view();
    }
    

    public function add(){
        if(request()->isPost()){
            $data=input('post.');          
            $data['s_time'] = strtotime($data['s_time']);
            $data['e_time'] = strtotime($data['e_time']);           
            $data['type'] = rtrim($data['type'], ','); 
            $data['typeid'] = rtrim($data['typeid'], ','); 
            $data['desc'] = str_replace("{TYPE}",$data['type'],$data['desc']);
            $data['desc'] = str_replace("{TIME}",date('Y年m月d日', $data['e_time']),$data['desc']);
            //修改onsale等的状态
            $onsale=input('zhuangtai');              
            if(!$onsale){$data['zhuangtai']="0";}
            $notice=new NoticeModel;
            if($notice->save($data)){
                writelog(session('id'),session('name'),'用户【'.session('name').'】发布通知成功',1);
                $this->success('添加成功',url('lst'));
            }else{
                $this->error('添加失败！');
            }
            return;
        }   
        $mobiletype=db('mobiletype')->order('id desc')->select();
        $this->assign('mobiletype',$mobiletype);
        $publish_time = 0;
        $this->assign('publish_time',$publish_time);
        
        return view();
    }
    

    public function edit(){
        if(request()->isPost()){
        $data=input('post.');
        
            //dump($data);die;
            $data['s_time'] = strtotime($data['s_time']);
            $data['e_time'] = strtotime($data['e_time']);
            
            
            $data['type'] = rtrim($data['type'], ',');
            $data['typeid'] = rtrim($data['typeid'], ','); 
            $data['desc'] = str_replace("{TYPE}",$data['type'],$data['desc']);
            $data['desc'] = str_replace("{TIME}",date('Y年m月d日', $data['e_time']),$data['desc']);
            //dump($data['desc']);exit();
            
            //修改onsale等的状态
            $onsale=input('zhuangtai');
           

            if(!$onsale){$data['zhuangtai']="0";}



            $notice=new NoticeModel;
            $save=$notice->update($data);

            if($save){
                $this->success('修改成功！',url('lst'));
            }else{
                $this->error('修改失败！');
            }
            return;
        }
        //获取分类级联表
      
        $notice=db('notice')->where(array('id'=>input('id')))->find();
        $notice['desc'] = str_replace($notice['type'],"{TYPE}",$notice['desc']);
        $notice['desc'] = str_replace(date('Y年m月d日', $notice['e_time']),"{TIME}",$notice['desc']);
        //var_dump($notice);die;
        $mobiletype=db('mobiletype')->order('id desc')->select();
        $this->assign('mobiletype',$mobiletype);
        

        $this->assign(array(
            
            'notice'=>$notice,
            
            ));
        return view();
    }

    public function del(){
        if(NoticeModel::destroy(input('id'))){
            $this->success('删除成功！',url('lst'));
        }else{
            $this->error('删除失败！');
        }
    }

    public function pdel(){
        $pdel_id=input('pid');
        if(db('home')->delete($pdel_id)){
            echo 1;
        }else{
            echo -1;
        }
    }

    public function bdel()
    {       
        $data=input('post.');
        foreach ($data as $k => $v) {
            $test[]=$k;
        }
        if($data== null){$this->error('批量删除失败！');}
        if(in_array('itm',$test)){
            $ids=$data['itm'];
        }
        else{$this->error('未选中任何内容！');}

        if($ids){
            foreach ($ids as $k => $v) {

                  $del = db('notice')->where(array('id'=>$v))->delete();
                
            }

           
            if($del)
            {
                $this->success('批量删除成功！',url('lst'));
            }else
            {
                $this->error('批量删除失败！');
            }
        }
    }
    public function sortcate()
    {   
        if(request()->isPost()){

        $data=input('post.');
        if($data== null){$this->error('更新排序失败！');}
        $sorts=$data['sort'];
        foreach ($sorts as $k => $v) {
            db('notice')->update(['id'=>$k,'sort'=>$v]);
        }
        $this->success('更新排序成功！',url('lst'));
        return;
        }
    }

    //改变排序
    public function  changesort(){
        if(!request()->isAjax()) {$this->error('非法访问！');}
        $id_sort=input('id');
        $value_sort=input('sort');

        $save=db('home')->update(['id'=>$id_sort,'sort'=>$value_sort]);
        if($save){echo 1;}else {echo -1;}

    }






















}

<?php
namespace app\index\controller;
use think\Controller;

class Mobiletype extends Controller
{
    private $sid; 
    public function index(){
        //调用店铺api
        $pname = session('name');
        $pid = session('nameid');//业务员id
        $nid = input('nid'); //调价通知id
        $sid = input('sid');//店铺id
        //店铺id
        $notice=db('notice')->where('id',$nid)->find();
        $store=db('store')->where('id',input('sid'))->find();
        $notice_array = explode(",",$notice['typeid']);
        $notice_name_array = explode(",",$notice['type']);
        
        foreach ($notice_array as $k=>$v){
            $state[$k]['wait_num'] = self::test($nid,$sid,$v,1);
            $state[$k]['success_num'] = self::test($nid,$sid,$v,2);
            $state[$k]['fail_num'] = self::test($nid,$sid,$v,3);
            $state[$k]['totle_num'] = $state[$k]['wait_num']+$state[$k]['success_num']+$state[$k]['fail_num'];
            $state[$k]['name'] = $notice_name_array[$k];
            $state[$k]['id'] = $v;
        }
        /* $where['sid']=$sid;
        $where['state']=1;
        $wait_num=db('adjust')->where($where)->count(); */
        //dump($state);exit();
        //api机型
        
        $this->assign('notice',$notice);
        $this->assign('store',$store);
        $this->assign('state',$state);
        return view();
    }
    
    public function test($nid,$sid,$typeid,$state=1){
        $where['nid']=$nid;
        $where['sid']=$sid;
        $where['state']=$state;
        $where['typeid']=$typeid;
        $last_num=db('adjust')->where($where)->count(); 
        return $last_num;
    }
}

<?php
namespace app\index\controller;
use think\Controller;

class Store extends Controller
{
    public function index(){
        //调用店铺api
        //$pname = session('name');
        $pname = "张三";
        $pid= 1;
        $nid = input('nid');
        //调用api接口获取门市入口
        $store=db('store')->where('pid',$pid)->select();
        
        $notice=db('notice')->where('id',$nid)->find();
        
        $notice['typename'] = "A15".$notice['id'];
        
        $this->assign('store',$store);
        $this->assign('notice',$notice);
        return view();
    }
}

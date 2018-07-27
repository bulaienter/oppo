<?php
namespace app\index\controller;
use think\Controller;

class Notice extends Controller
{
    public function index(){
        $notice=db('notice')->order('id desc')->select();
        
        $new_time = time();
        //var_dump($notice[0]['e_time']);
        //var_dump($new_time);exit();
        $this->assign('notice',$notice);
        $this->assign('new_time',$new_time);
        return view();
    }
}

<?php
namespace app\admin\controller;
use app\admin\model\LogModel;
use think\Db;
use com\IpLocation;

class Log extends Common
{
    /**
     * [operate_log 操作日志]
     */
    public function lst()
    {
        $key = session('id');
        $map = [];
        if($key&&$key!==""){
            $map['admin_id'] =  $key;
        }
        $arr=Db::name("admin")->column("id,name"); //获取用户列表
        $lists = Db::name('log')->where($map)->order('add_time desc')->select();
        //dump($lists);exit();
        //$Ip = new IpLocation('UTFWry.dat'); // 实例化类 参数表示IP地址库文件
        foreach($lists as $k=>$v){
            $lists[$k]['add_time']=date('Y-m-d H:i:s',$v['add_time']);

        }
        $this->assign('lists', $lists); //当前页

        return $this->fetch();
    }

    /**
     * [del_log 删除日志]
     */
    public function del(){
        if(LogModel::destroy(input('id'))){
            $this->success('删除成功！',url('lst'));
        }else{
            $this->error('删除失败！');
        }
    }
    public function pdel(){
        $pdel_id=input('pid');
        if(db('log')->delete($pdel_id)){
            echo 1;
        }else{
            echo -1;
        }
    }
}
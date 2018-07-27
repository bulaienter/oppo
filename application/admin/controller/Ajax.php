<?php
namespace app\admin\controller;
use Think\Controller;

use think\Request;
use think\Url;
use think\Session;
use think\Config;
use think\Cache;
use think\Image;

class Ajax extends Common{
//检查标题是否已被使用
public function checktitle(){
        if(!request()->isAjax()) {$this->error('非法访问！');}
        $title=input('title');
        $id=input('id');
        if($id){$where['id']=array('neq',$id);}


        $where['title']=array('eq',$title);

        if(!db('article')->where($where)->find()){
            echo 1;
        }else{
            echo -1;
        }

    }
 public function checkexhibitiontitle_edit(){
        if(!request()->isAjax()) {$this->error('非法访问！');}
        $title=input('title');
        $id=input('id');
        if($id){$where['id']=array('neq',$id);}


        $where['title']=array('eq',$title);

        if(!db('exhibition')->where($where)->find()){
            echo 1;
        }else{
            echo -1;
        }
    }
    public function checkexhibitiontitle_insert(){
        if(!request()->isAjax()) {$this->error('非法访问！');}
        $title=input('title');

    
    
        $where['title']=array('eq',$title);
    
        if(!db('exhibition')->where($where)->find()){
            echo 1;
        }else{
            echo -1;
        }
    }
    //检查编号是否已被使用
    public function checksn(){
        if(!request()->isAjax()) {$this->error('非法访问！');}
        $order_sn=input('order_sn');
        if(input('id')){$id=input('id');}

        $where['order_sn']=array('eq',$order_sn);

        if(!db('article')->where($where)->find()){
            echo 1;
        }else{
            echo -1;
        }

    }
    //改变列表的小图标(onsale)
    public function change_status(){
        if(!request()->isAjax()) {$this->error('非法访问！');}
        $value_status=input('value_status');
        $id_status=input('id_status');

        if($value_status==0){
            //update(['onsale',1])
            db('version')->where('id',$id_status)->update(['status'=>1]);
            echo 1;
        }
        else{
            db('version')->where('id',$id_status)->update(['status'=>0]);
            echo 0;
        }
    }

    public function change_isforce(){
        if(!request()->isAjax()) {$this->error('非法访问！');}
        $value_isforce=input('value_isforce');
        $id_isforce=input('id_isforce');

        if($value_isforce==0){
            //update(['onsale',1])
            db('version')->where('id',$id_isforce)->update(['is_force'=>1]);
            echo 1;
        }
        else{
            db('version')->where('id',$id_isforce)->update(['is_force'=>0]);
            echo 0;
        }
    }
    //检查通讯录名字是否已被使用
    public function checknickname(){
        if(!request()->isAjax()) {$this->error('非法访问！');}
        $nickname=input('nickname');
        $id=input('id');
        if($id){$where['id']=array('neq',$id);}


        $where['nickname']=array('eq',$nickname);

        if(!db('phone_book')->where($where)->find()){
            echo 1;
        }else{
            echo -1;
        }

    }
    
//改变列表的小图标(onsale)
    public function changeonsale(){
        if(!request()->isAjax()) {$this->error('非法访问！');}
        $value_onsale=input('value_onsale');
        $id_onsale=input('id_onsale');

        if($value_onsale==0){

            //update(['onsale',1])
            db('home')->where('id',$id_onsale)->update(['zhuangtai'=>1]);
            echo 1;
        }
        else{

            db('home')->where('id',$id_onsale)->update(['zhuangtai'=>0]);

            echo 0;
        }

    }
    
    /**
     *  删除所有Runtime文件
     * 修改人 123
     * 时间 2017-09-14 21:39:01
     */
    public function delAllDir()
    {
        $request = Request::instance();
        //清楚缓存
        Cache::clear();
        $fileDel = ROOT_PATH.'runtime';
        	
        
        	
        if (file_exists($fileDel))
        {
            $this->delDir($fileDel);
            //$this->operating($request->path(),0,'清空站点缓存');
            return json(['s'=>'ok']);
        }
        else
        {
            return json(['s'=>'缓存目录不存在']);
        }	return json(['s'=>'非法请求']);
    }
    /**
     *  删除文件
     * 修改人 123
     * 时间 2017-09-14 21:39:01
     */
    public function delDir($dirName)
    {
        $dh = opendir($dirName);
        	
        //循环读取文件
        while ($file = readdir($dh))
        {
            if($file != '.' && $file != '..'){
                $fullpath = $dirName . '/' . $file;
                	
                if(!is_dir($fullpath)){
                    //判断是否是日志文件,不删除日志文件
                    $path = pathinfo($fullpath,PATHINFO_EXTENSION);
                    if($path!='log'){
                        //dump($path);die;
                        //如果不是,删除该文件
                        if(!unlink($fullpath)){
                            echo $fullpath . '无法删除,可能是没有权限!<br>';
                        }
                    }
                }else{
                    //如果是目录,递归本身删除下级目录
                    $this->delDir($fullpath);
                }
            }
        }
        //关闭目录
        closedir($dh);
    }









}
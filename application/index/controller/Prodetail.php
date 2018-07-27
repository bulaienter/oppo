<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Adjust as ProdetailModel;
use think\File;
use think\log;
use think\Image;
use think\Request;

class Prodetail extends Controller
{
    public function lst(){
        //调用店铺api
        $tid = input('tid');//手机型号id
        $sid = input('sid');//店铺id
        $nid = input('nid');//通知id
        $pid = 1;
        $where['typeid']=$tid;
        $where['pid']=$pid;
        $where['sid']=$sid;
        $where['nid']=$nid;
        $adjust=db('adjust')->where($where)->select();
        $adjust_count=db('adjust')->where($where)->count();
        $this->assign('tid',$tid);
        $this->assign('sid',$sid);
        $this->assign('nid',$nid);
        $this->assign('adjust',$adjust);
        $this->assign('adjust_count',$adjust_count);
        $mobiletype=db('mobiletype')->where('id',$tid)->find();        
        $this->assign('mobiletype',$mobiletype);
        return view();
    }
    public function del(){
        /* if(ProdetailModel::destroy(input('id'))){
         $this->success('删除成功！');
         }else{
         $this->error('删除失败！');
         } */
        $detail=new ProdetailModel;
        if($detail->where('id',input('id'))->delete()){
            echo 1;
        }else{
            echo -1;
        }
    }
    
    public function edit_info(){
        
        $detail=new ProdetailModel;
        $test = $detail->where('id',input('id'))->find();
        echo json_encode($test);
    }
    public function add(){
        if(request()->isAjax()){
            $data['imei'] = input('obj_imei');
            $data['typeid'] = input('obj_typeid');
            $data['sid'] = input('obj_sid');
            $data['nid'] = input('obj_nid');
            $data['imgurl'] = input('obj_imgurl');
            $data['time'] =time();
            //业务员id
            $pid = 1;
            $data['pid'] = $pid;
            $data['state'] = 1;
            $detail=new ProdetailModel;
            if($detail->save($data)){
                //writelog();日志
                echo 1;
            }else{
                echo -1;
            }
        }       
        /* $tid = input('typeid');
        //api调用机型接口
        $mobiletype='A15'.$tid;
        $this->assign('mobiletype',$mobiletype);
        return view(); */
    }
    
    public function edit(){
        if(request()->isAjax()){
            $data['imei'] = input('obj_imei');
            $data['typeid'] = input('obj_typeid');
            $data['sid'] = input('obj_sid');
            $data['nid'] = input('obj_nid');
            $data['imgurl'] = input('obj_imgurl');
            $data['time'] =time();
            $data['id'] =input('obj_id');
            //业务员id
            $pid = 1;
            $data['pid'] = $pid;
            $data['state'] = 1;
            $detail=new ProdetailModel;
            if($detail->update($data)){
                //writelog();日志
                echo 1;
            }else{
                echo -1;
            }
        }  
    }
    public function adjustdetail(){ 
        //$pname = session('name');//业务员
        //手机型号id
        $pname = "张三";
        $adjust=db('adjust')->where('id',input('aid'))->find();
        $this->assign('adjust',$adjust);
        //api调用机型借口
        $tid = $adjust['typeid'];
        $mobiletype=db('mobiletype')->where('id',$tid)->find();
        $this->assign('mobiletype',$mobiletype);

        $this->assign('pname',$pname);
        return view();
    }
    
    public function imageUp()
    {     
        //$test = $_POST["formData"];
        //$test = $_FILES;
        $test = request()->file();
        
        //var_dump($test);exit();
        //$info = $file->move('uploads/');
        //var_dump($_FILES);exit();
        foreach($test as $file){
            //var_dump($file);exit();
            $info = $file->move('uploads/img/');
            $state = '/uploads/img/'.$info->getSaveName();
            return json($state);
            //var_dump($file);exit();
            /* if ($info){
                $state = "成功";
            }
            else
            {
                $state = "失败";
            }
            return json($state); */
        }
              
        
    }
}

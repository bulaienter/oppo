<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Admin;
class Login extends Controller
{
    public function index()
    {
        if(request()->isPost()){
            $this->check(input('code'));
        	$admin=new Admin();
        	$num=$admin->login(input('post.'));
        	if($num==1){
        	    writelog(session('id'),session('name'),'用户【'.session('name').'】登陆失败',2);
        		$this->error('用户不存在！',url('Login/index'));
        	}
        	if($num==2){
        	    writelog(session('id'),session('name'),'用户【'.session('name').'】登陆成功',1);
        		$this->success('登录成功！',url('index/index'));
        	}
        	if($num==3){
        	    writelog(session('id'),session('name'),'用户【'.session('name').'】登陆密码错误',2);
        		$this->error('密码错误！',url('Login/index'));
        	}
        	return;
        }
        $confres=db('conf')->field('cp_name')->where(array('id'=>'1'))->find();
        $this->assign('confres',$confres);
        return view();
    }


    // 验证码检测
    public function check($code='')
    {
        if (!captcha_check($code)) {
            $this->error('验证码错误',url('Login/index'));
        } else {
            return true;
        }
    }

    public function logout(){
        writelog(session('id'),session('name'),'用户【'.session('name').'】退出登录成功',1);
        session(null);
        $this->success('退出成功！',url('Login/index'));
    }

}

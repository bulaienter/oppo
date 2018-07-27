<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Request;

class Index extends Common
{
    public function index()
    {
        $systeminfo['THINK_VERSION'] = THINK_VERSION;
        $systeminfo['SERVER_SOFTWARE'] = $_SERVER["SERVER_SOFTWARE"];
        $systeminfo['PHP_OS'] = PHP_OS;
        $mysql=\think\Db::query("select version() AS version");
        $systeminfo['mysql']['version'] =$mysql[0]['version'];       
        
        
        
       
        $request['domain'] = request()->domain();
        $systeminfo['domain'] = $request['domain'];
        
        $this->assign('systeminfo',$systeminfo);
        return view();
    }
}

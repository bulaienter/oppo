<?php


namespace app\admin\controller;
use app\admin\controller\Common;
use think\File;
use think\log;
use think\Image;
use think\Request;
/**
 * Class UeditorController
 * @package Admin\Controller
 */
class Ueditor_old extends Common
{
    private $sub_name = array('date', 'Y/m-d');
    private $savePath = 'temp/';

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set("Asia/Shanghai");

        $this->savePath = input('GET.savepath','temp').'/';

        error_reporting(E_ERROR | E_WARNING);
    }



    /**
     * @function imageUp
     */
    public function imageUp()
    {
        // 上传图片框中的描述表单名称，
        $pictitle = input('pictitle');
        $dir = input('dir');
        $savepath1=input('savepath');
        $savepath1 = str_replace("_","/",$savepath1);

        $savePath_n=$this->savePath;
        if($savepath1){
            $savePath_n=$savepath1;
        }

        $title = htmlspecialchars($pictitle , ENT_QUOTES);
        $path = htmlspecialchars($dir, ENT_QUOTES);

        //$input_file           ['upfile'] = $info['Filedata'];  一个是上传插件里面来的, 另外一个是 文章编辑器里面来的
        // 获取表单上传文件
                $file = request()->file('img');


                // 移动到框架应用根目录/public/uploads/ 目录下
            $this->savePath = $savePath_n;

            $info = $file->move('uploads/'.$this->savePath);


            if ($info){
                $state = "SUCCESS";}
            else
            {
                $state = "ERROR" . $file->getError();
            }

            $return_data['url'] = '/uploads/'.$this->savePath.'/'.$info->getSaveName();
            $return_data['title'] = $title;
            $return_data['original'] = ''; // 这里好像没啥用 暂时注释起来
            $return_data['state'] = $state;
            $return_data['path'] = $path;
            $return_data['url']=str_replace('"\"', '"/"', $return_data['url']);



       return json($return_data);

    }

}
<?php

namespace app\admin\controller;
use app\admin\controller\Common;
class Uploadify_old extends Common {

	public function upload(){
		$func = input('func');
		$path = input('path','temp');


		$upload="/index.php/admin/ueditor/imageup/savepath/".$path."/pictitle/banner/dir/logo.html";

		$info = array(
				'num'=> input('num'),
				'title' => '',
				'upload' =>$upload,

		        'savepath' =>$path,
				'size' => '300M',
				'type' =>'jpg,png,avi,mp4等',
				'input' => input('input'),
				'func' => empty($func) ? 'undefined' : $func,
		);

		$this->assign('info',$info);

	//var_dump($info);die;
		return $this->fetch();
	}



	/*
	 删除上传的图片
	*/
	public function delupload(){

		$action=isset($_GET['action']) ? $_GET['action'] : null;
		$filename= isset($_GET['filename']) ? $_GET['filename'] : null;
		$filename= str_replace('/uploads/','uploads/',$filename);

		//$filename=ADMINIMG.$filename;


		//var_dump($filename);die;
		//$filename= trim($filename,'.');
		//$filename= trim($filename,'/');
		 if($action=='del' && !empty($filename)){

		    $size = getimagesize($filename);
		    $filetype = explode('/',$size['mime']);
		    if($filetype[0]!='image'){
		        return false;
		        exit;
		    }

			unlink($filename);
			exit;
		}
	}
}
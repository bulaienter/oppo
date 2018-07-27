<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**
 * 通用化API接口数据输出
 * @param int $status 业务状态码
 * @param string $message 信息提示
 * @param [] $data  数据
 * @param int $httpCode http状态码
 * @return array
 */
function show($status, $message, $data=[], $httpCode=200) {

    $data_last = array(
        'status' => $status,
        'message' => $message,
        'data' => $data,
    );
    //print_r($data);exit();
    return json($data_last, $httpCode);
    //return json_encode($data_last);
}

//记录日志
function writelog($uid,$username,$description,$status)
{
    $data['admin_id'] = $uid;
    $data['admin_name'] = $username;
    $data['description'] = $description;
    $data['status'] = $status;
    $data['ip'] = request()->ip();
    $data['add_time'] = time();
    $log = db('Log')->insert($data);
}

//上传路径修改
function upload_pathedit($path){
    $savePath = 'temp/';
    $savepath1=$path;
    $savepath1 = str_replace("_","/",$savepath1);
    $savePath_n=$savePath;
    if($savepath1){
        $savePath_n=$savepath1;
    }
    $savePath = $savePath_n;
    $test = $savePath;
    return $test;
}

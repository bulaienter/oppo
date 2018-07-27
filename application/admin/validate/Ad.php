<?php
namespace app\admin\validate;
use think\Validate;
class Ad extends Validate
{

    protected $rule=[
        'title'=>'unique:ad|require|max:25',
         'url'=>'unique:ad|require|max:220',
        'desc'=>'require',
    ];


    protected $message=[
        'title.require'=>'广告标题不得为空！',
        'title.unique'=>'广告标题不得重复！',
         'url.unique'=>'广告地址不得重复！',
         'url.require'=>'广告地址不得为空！',

         'url.max'=>'广告地址不得大于220个字符！',
        'title.max'=>'广告标题长度大的大于25个字符！',
        'desc.require'=>'广告描述不得为空！',
    ];

    protected $scene=[
        'add'=>['title','url','desc'],
        'edit'=>['title','url'],
    ];



























}

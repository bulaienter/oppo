<?php
namespace app\admin\validate;
use think\Validate;
class Address extends Validate
{

    protected $rule=[
        'name'=>'unique:address|require|max:25',
    ];


    protected $message=[
        'name.require'=>'栏目名称不得为空！',
        'name.unique'=>'栏目名称不得重复！',
    ];

    protected $scene=[
        'address_add'=>['name'],
        'address_edit'=>['name'],
    ];



























}

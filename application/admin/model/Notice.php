<?php
namespace app\admin\model;
use think\Model;
class Notice extends Model
{

    protected static function init()
    {
        /* Notice::event('after_insert',function($res){

            //self::img_addedit($res);
          

        });
            Notice::event('after_update',function($res){

                self::img_addedit($res);
            }); */
    }

    
    protected static function img_addedit($res){
        $id=$res->id;
        // 商品图片相册  图册
        
            array_pop($_POST['exhibition_images']); // 弹出最后一个
            $goodsImagesArr = db('ExhibitionImages')->where("eid = $id")->delete(); // 查出所有已经存在的图片

          
            // 添加图片
            foreach($_POST['exhibition_images'] as $key => $val)
            {
                if($val == null)  continue;
                
                    $data = array(
                        'eid' => $id,
                        'imgurl' => $val,
                    );
                    db("ExhibitionImages")->insert($data); // 实例化User对象
                
            }

    }







}

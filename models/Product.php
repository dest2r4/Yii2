<?php
/**
 * Created by PhpStorm.
 * User: dest2
 * Date: 21.08.2017
 * Time: 16:18
 */

namespace app\models;
use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName(){
        return 'product';
    }
    public function getCategory(){
        return $this->hasOne(Category::className(),['id'=>'category_id']);


    }
}
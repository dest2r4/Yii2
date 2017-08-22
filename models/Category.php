<?php
/**
 * Created by PhpStorm.
 * User: dest2
 * Date: 21.08.2017
 * Time: 16:17
 */

namespace app\models;
use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName(){
        return 'category';
    }
    public function getProducts(){
        return $this->hasMany(Product::className(),['category_id'=>'id']);

    }
}
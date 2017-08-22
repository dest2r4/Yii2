<?php
/**
 * Created by PhpStorm.
 * User: dest2
 * Date: 21.08.2017
 * Time: 16:39
 */

namespace app\components;
use yii\base\Widget;

class CategoryMenuWidget extends Widget
{

    public $tpl;
    public function init(){
        parent::init();
        if($this->tpl===null){
            $this->tpl='CategoryMenu';

        }
        $this->tpl.=".php";

    }
    public function run(){
        #echo __CLASS__."<br>";
        return $this->tpl;
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: dest2
 * Date: 21.08.2017
 * Time: 14:17
 */

namespace app\assets;
use yii\web\AssetBundle;

/**
 * Class LtAppAsset
 * @package app\assets
 *
 * Класс  для подключения шаблонов к более низким версиям ИЕ
 */
class LtAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [
        'js/html5shiv.js',
        'js/respond.min.js',

    ];

    public $jsOptions=[
        'condition'=>'lte IE9',
        'position'=>\yii\web\View::POS_HEAD
        ];

}
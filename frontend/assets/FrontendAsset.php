<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class FrontendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/frontend/web/store';

    public $css = [

        //'css/bootstrap.css',
        'css/owl-slider.css',
        'css/style.css',
        'https://fonts.googleapis.com/css?family=Roboto',
    ];

    public $js = [

        'js/jquery-1.11.1.min.js',
        'js/bootstrap.min.js',
        'js/owl.carousel.min.js',
        'js/store.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'common\assets\Html5shiv',
    ];
}

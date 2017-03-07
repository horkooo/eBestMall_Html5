<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class EAsset extends AssetBundle
{
    public $sourcePath = '@vendor/hongyukeji/ebestmall-html/static';
    public $css = [
        'css/app.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}

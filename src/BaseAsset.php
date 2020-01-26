<?php
namespace kilyakus\library\base;

class BaseAsset extends \yii\web\AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
    }
    public $css = [
        'css/library-base.min.css',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}

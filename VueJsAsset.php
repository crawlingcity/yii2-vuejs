<?php

namespace crawlingcity\vuejs;

use yii\web\AssetBundle;

class VueJsAsset extends AssetBundle
{
    public function init()
    {
        parent::init();
        $this->sourcePath = __DIR__ . '/assets/';
        $this->js[] = YII_ENV_DEV ? 'vue.js':'vue.min.js';
    }

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}

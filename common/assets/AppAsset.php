<?php
namespace common\assets;

use common\bundles\FontsAssetBundle;

use yii\web\YiiAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

use yii\bootstrap\BootstrapAsset;
use yii\bootstrap\BootstrapPluginAsset;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $depends = [
        YiiAsset::class,
        JqueryAsset::class,
        BootstrapAsset::class,
        BootstrapPluginAsset::class,
        FontsAssetBundle::class
    ];
}

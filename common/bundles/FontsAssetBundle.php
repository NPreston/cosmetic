<?php
namespace common\bundles;

use rmrevin\yii\fontawesome\AssetBundle;

/**
 * Class FontsAssetBundle
 * @package common\bundles
 */
class FontsAssetBundle extends BaseAssetBundle
{
    /** @var array $css */
    public $css = [
        '//fonts.googleapis.com/css?family=Lato:300,300italic,400,400italic,700,700italic|Shadows+Into+Light'
    ];
    /** @var array $depends */
    public $depends = [
        AssetBundle::class
    ];
}

<?php
namespace common\bundles;

use rmrevin\yii\fontawesome\AssetBundle;

/**
 * Class ImagesLoadedAssetBundle
 * @package common\bundles
 */
class ImagesLoadedAssetBundle extends BaseAssetBundle
{
    /** @var string  */
    public $sourcePath = '@nodeModules/imagesloaded';
    /** @var array */
    public $js = [
        'imagesloaded.pkgd.min.js'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->depends[] = AssetBundle::class;
    }
}
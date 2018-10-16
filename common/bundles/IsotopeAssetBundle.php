<?php
namespace common\bundles;

use rmrevin\yii\fontawesome\AssetBundle;

/**
 * Class IsotopeAssetBundle
 * @package common\bundles
 */
class IsotopeAssetBundle extends BaseAssetBundle
{
    /** @var string  */
    public $sourcePath = '@nodeModules/isotope-layout';
    /** @var array */
    public $js = [
        'dist/isotope.pkgd.min.js'
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

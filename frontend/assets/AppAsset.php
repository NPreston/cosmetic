<?php
namespace frontend\assets;

use bupy7\flexslider\FlexSliderAsset;

use common\bundles\IsotopeAssetBundle;
use common\bundles\JqueryPackagesAssetBundle;
use common\bundles\ImagesLoadedAssetBundle;
use common\assets\AppAsset as CommonAppAsset;

/**
 * Class AppAsset
 * @package frontend\assets
 */
class AppAsset extends CommonAppAsset
{
    /** @var array */
    public $css = [
        'css/peterriver.css',
        'css/turquoise.css',
    ];
    /** @var array */
    public $js = [
        'js/site.js',
        'js/site-megamenu.js'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->depends[] = IsotopeAssetBundle::className();
        $this->depends[] = ImagesLoadedAssetBundle::className();
        $this->depends[] = JqueryPackagesAssetBundle::className();
        $this->depends[] = FlexSliderAsset::className();
    }
}
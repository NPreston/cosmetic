<?php
namespace common\bundles;

use rmrevin\yii\fontawesome\AssetBundle;

/**
 * Class JqueryPackagesAssetBundle
 * @package common\bundles
 */
class JqueryPackagesAssetBundle extends BaseAssetBundle
{
    /** @var string  */
    public $sourcePath = '@common/assets';
    /** @var array */
    public $js = [
        'js/jquery.cookie.js',
        'js/jquery.easing.min.js',
        'js/jquery.elevatezoom.js',
        'js/jquery.sharrre-1.3.5.js',
        'js/jquery-migrate-1.2.1.min.js',
        'js/jquery-ui-1.10.2.custom.js'
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

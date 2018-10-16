<?php
namespace common\bundles;

use yii\base\Exception;
use yii\web\AssetBundle;

/**
 * Class BaseAssetBundle
 * @package common\bundles
 */
class BaseAssetBundle extends AssetBundle
{
    public $publishOptions = [
        'forceCopy' => false
    ];

    public $isUseMinVersions = false;

    protected static $isCli = false;

    public function init()
    {
        $this->publishOptions['forceCopy'] = isset(\Yii::$app->params["forceAssetCopy"]) ? \Yii::$app->params["forceAssetCopy"] : false;

        if (YII_DEBUG) {
            foreach ((array) $this->depends as $dep) {
                if (strpos($dep, '\\')===0) {
                    throw new Exception('Invalid asset bundle depends: bundle depends can`t start with backslash.[class:'.get_called_class() .', depend:'.$dep.']');
                }
            }
        }

        self::$isCli = php_sapi_name() === "cli";

        if (self::$isCli && in_array('asset', $_SERVER['argv'])) {
            // forceCopy for combine compress cli command
            $this->publishOptions['forceCopy'] = true;
        }

        parent::init();
    }

    /**
     * @param string $filePath Путь относительно папки с ассетами
     * @return string
     */
    public static function getPublishedUrl($filePath)
    {
        $asset = new static;
        $assetManager = \Yii::$app->getAssetManager();
        return $assetManager->getPublishedUrl($asset->sourcePath) . DIRECTORY_SEPARATOR . $filePath;
    }
}
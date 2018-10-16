<?php
namespace common\widgets;

use common\components\Logger;

use yii\base\Widget;
use yii\web\IdentityInterface;

class BaseWidget extends Widget
{
    use Logger;

    const ADD_WIDGET_CLASS = 'additionalClasses';
    const VIEW_EXTENSION = '.view.php';

    /** @var array $options */
    public $options = [];
    /** @var array $additionalClasses */
    public $additionalClasses = [];

    /** @var string */
    protected $viewName;
    /** @var IdentityInterface */
    protected $visitor;

    /** @var $idHash */
    private static $idHash;
    /** @var int $_uniqueIndex */
    private static $_uniqueIndex = 0;
    /** @var null $_generatedId */
    private $_generatedId = null;

    public function init()
    {
        $this->visitor = \Yii::$app->getUser()->getIdentity();

        if (!$this->viewName) {
            $this->viewName = $this->buildViewName();
        }
    }

    public function run()
    {
        if (strstr($this->viewName, \Yii::getAlias('@root'))) {
            return $this->renderFile($this->viewName);
        } else {
            return $this->render($this->viewName);
        }
    }

    public function getAdditionalClasses()
    {
        return ($this->additionalClasses) ? implode(' ', $this->additionalClasses) : '';
    }

    public function getId($autoGenerate = true)
    {
        if ($this->_generatedId !== null) {
            return $this->_generatedId;
        }
        $id = parent::getId($autoGenerate);
        return $this->_generatedId = ($autoGenerate) ? self::uniqueId($id) : $id;
    }

    /**
     * @param string $id
     * @return string
     */
    public static function uniqueId($id)
    {
        if (self::$idHash === null) {
            self::$idHash = sprintf('%x', time());
        }
        return $id . '-' . self::$_uniqueIndex++ . '-' . self::$idHash;
    }

    protected function buildViewName($className = null)
    {
        if (is_null($className)) {
            $className = static::class;
        }

        return lcfirst(
            basename(
                str_replace('\\', '/', $className)
            )
        ) . static::VIEW_EXTENSION;
    }
}
<?php
namespace common\components;

use yii\log\Logger as YiiLogger;

trait Logger
{
    private $_hiddenHeaders = [
        'Authorization'
    ];

    protected function trace(array $trace, $msg = '')
    {
        $msg = $msg ? "{$msg}\n" : '';

        foreach ($trace as $key => $value) {
            $value = $this->hideProtectedHeaders($key, $value);
            $msg .= "{$key}: {$value}\n";
        }
        $this->log($msg, YiiLogger::LEVEL_TRACE);
    }

    /** @noinspection PhpDocSignatureInspection */
    /**
     * @see sprintf()
     * @param string $format
     * @param mixed... $args
     */
    protected function info()
    {
        $params = func_get_args();
        $msg = $this->buildMsg($params);
        $this->log($msg, YiiLogger::LEVEL_INFO);
    }

    /** @noinspection PhpDocSignatureInspection */
    /**
     * @see sprintf()
     * @param string $format
     * @param mixed... $args
     */
    protected function warning()
    {
        $params = func_get_args();
        $msg = $this->buildMsg($params);
        $this->log($msg, YiiLogger::LEVEL_WARNING);
    }

    /** @noinspection PhpDocSignatureInspection */
    /**
     * @see sprintf()
     * @param string $format
     * @param mixed... $args
     */
    protected function error()
    {
        $params = func_get_args();
        $msg = $this->buildMsg($params);
        $this->log($msg, YiiLogger::LEVEL_ERROR);
    }

    private function log($msg, $logLevel)
    {
        \Yii::$app->getLog()->getLogger()->log($msg, $logLevel, __CLASS__);
    }

    private function buildMsg(array $params)
    {
        $template = array_shift($params);
        return (count($params)) ? vsprintf($template, $params) : $template;
    }

    private function hideProtectedHeaders($key, $value)
    {
        if (YII_ENV == 'prod' && in_array($key, $this->_hiddenHeaders)) {
            return '*****';
        }

        return (is_scalar($value)) ? $value : implode(',', (array)$value);
    }
}

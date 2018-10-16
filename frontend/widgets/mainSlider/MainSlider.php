<?php
namespace frontend\widgets\mainSlider;

use bupy7\flexslider\FlexSlider;
use bupy7\flexslider\FlexSliderAsset;

use yii\helpers\Html;
use yii\helpers\Json;

use yii\web\View;
use yii\web\JsExpression;

/**
 * Slider on home page
 *
 * Class MainSlider
 * @package frontend\widgets\mainSlider
 */
class MainSlider extends FlexSlider
{
    /** @var array $options */
    public $options = ['class' => 'flexslider'];
    /** @var bool $jsInit */
    public $jsInit = true;

    /**
     * @inheritdoc
     */
    public function init()
    {
        FlexSliderAsset::register($this->view);

        $this->options = array_merge(['id' => $this->id], $this->options);

        $this->slidesOptions = array_merge([
            'class' => 'slides',
        ], $this->slidesOptions);

        // Encoding expression callback API.
        foreach ([
                     'start',
                     'before',
                     'after',
                     'end',
                     'added',
                     'removed',
                 ] as $callback) {
            if (isset($this->pluginOptions[$callback]) && !empty($this->pluginOptions[$callback])) {
                $this->pluginOptions[$callback] = new JsExpression($this->pluginOptions[$callback]);
            }
        }

        if ($this->jsInit) {
            $options = Json::encode(array_merge([
                'selector' => '.slides > li',
            ], $this->pluginOptions));

            $js = <<<JS
$('#{$this->id}').flexslider($options);             
JS;
            $this->view->registerJs($js, View::POS_READY);
        }
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        echo Html::beginTag('section', $this->options);
        echo Html::beginTag($this->tagSlides, $this->slidesOptions);
        foreach ($this->getItems() as $item) {
            if (is_string($item)) {
                echo Html::tag($this->tagItem, $item);
            }
            if (is_array($item) && !empty($item)) {
                echo Html::tag($this->tagItem, $item['content'], isset($item['options']) ? $item['options'] : []);
            }
        }
        echo Html::endTag($this->tagSlides);
        echo Html::endTag('section');
    }

    /**
     * Get items for slider
     * @return array
     */
    protected function getItems()
    {
        $items = [];
        for ($i = 1; $i <= 4; $i++) {
            $items[] = [
                'content' => $this->render("image{$i}.view.php")
            ];
        }

        return $items;
    }
}

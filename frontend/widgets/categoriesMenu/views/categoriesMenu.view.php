<?php

use yii\widgets\Menu;

/** @var frontend\widgets\categoriesMenu\CategoriesMenu $widget */
$widget = $this->context;
?>

<div class="widget Categories">
    <h3 class="widget-title widget-title">Categories</h3>
    <?= Menu::widget($widget->getMenuOptions()); ?>
</div>

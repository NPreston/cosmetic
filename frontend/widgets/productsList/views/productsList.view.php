<?php

use frontend\widgets\productsList\ProductsList;

/** @var ProductsList $widget */
$widget = $this->context;
?>

<ul class="<?=$widget->options['class'] ?>">
    <?php foreach ($widget->getProducts() as $product) : ?>
        <?=$widget->renderProduct($product); ?>
    <?php endforeach; ?>
</ul>

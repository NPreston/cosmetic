<?php

use frontend\widgets\productsList\ProductsList;

/** @var ProductsList $widget */
$widget = $this->context;
?>

<li class="<?= (!empty($product['featured'])) ? 'featured' : 'standard' ?>" data-price="<?= $product['price'] ?>">
    <a href="product.html" title="<?= $product['title'] ?>">
        <div class="image">
            <img class="primary" src="/img/thumbnails/<?= $product['images']['primary'] ?>" alt="<?= $product['title'] ?>" />

            <?php if (!empty($product['images']['secondary'])) : ?>
                <img class="secondary" src="/img/thumbnails/<?= $product['images']['secondary'] ?>" alt="<?= $product['title'] ?>" />
            <?php endif; ?>

            <?php if ($product['sale']) : ?>
                <span class="badge badge-sale">SALE</span>
            <?php endif; ?>
        </div>

        <div class="title">
            <div class="prices">
                <?php if (!empty($product['base']) && $product['sale']) : ?>
                    <del class="base">£<?= $product['base'] ?></del>
                <?php endif; ?>

                <span class="price">£<?= $product['price'] ?></span>
            </div>
            <h3><?= $product['title'] ?></h3>

           <!-- <div class="rating rating-4.5">
                <i class="fa fa-heart"></i>
                <i class="fa fa-heart"></i>
                <i class="fa fa-heart"></i>
                <i class="fa fa-heart"></i>
                <i class="fa fa-heart"></i>
            </div>-->
        </div>

    </a>
</li>
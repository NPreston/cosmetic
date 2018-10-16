<?php

use frontend\widgets\productTabs\ProductTabs;
use frontend\widgets\productImages\ProductImages;
use frontend\widgets\productsRelated\ProductsRelated;

?>

<!-- Product content -->
<section class="product">

    <!-- Product info -->
    <section class="product-info">
        <div class="container">
            <div class="row">

                <div class="col-sm-4">
                    <?= ProductImages::widget(); ?>
                </div>

                <div class="col-sm-8">
                    <!-- Product content -->
                    <?= ProductTabs::widget(); ?>
                    <!-- End class="product-content" -->
                </div>

            </div>
        </div>
    </section>
    <!-- End class="product-info" -->

    <!-- Related products -->
    <?= ProductsRelated::widget(); ?>
    <!-- End class="products-related" -->

</section>
<!-- End class="product-info" -->

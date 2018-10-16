<?php

use frontend\widgets\mainSlider\MainSlider;
use frontend\widgets\promosBlock\PromosBlock;
use frontend\widgets\productsList\ProductsList;
use frontend\widgets\monthDiscount\MonthDiscount;
use frontend\widgets\categoriesMenu\CategoriesMenu;

/* @var $this yii\web\View */
$this->title = 'Магазин косметики - Главная';
?>
<!-- Home content -->
<section class="home">

    <!-- Slider -->
    <?= MainSlider::widget([
        'jsInit' => false
    ]); ?>
    <!-- End class="flexslider" -->

    <!-- Promos -->
    <?= PromosBlock::widget(); ?>
    <!-- End class="promos" -->

    <section class="featured">
        <div class="container">

            <div class="row">
                <div class="col-sm-9">
                    <!-- Products list -->
                    <?= ProductsList::widget([
                        'options' => [
                            'class' => 'product-list isotope'
                        ]
                    ]); ?>
                    <!-- End class="product-list isotope" -->
                </div>

                <div class="col-sm-3">
                    <!-- Categories widget -->
                    <?= CategoriesMenu::widget(); ?>
                    <!-- End class="widget Categories" -->

                    <!-- This month only! widget -->
                    <?= MonthDiscount::widget(); ?>
                    <!-- End class="widget Text" -->

                </div>
            </div>

        </div>
    </section>
</section>
<!-- End class="home" -->
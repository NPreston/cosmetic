<?php
use frontend\widgets\productOrder\ProductOrder;
?>

<div class="product-content">
    <div class="box">

        <!-- Tab panels' navigation -->
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#product" data-toggle="tab">
                    <i class="fa fa-reorder fa-lg"></i>
                    <span class="hidden-xs">Product</span>
                </a>
            </li>
            <li>
                <a href="#description" data-toggle="tab">
                    <i class="fa fa-info-circle fa-lg"></i>
                    <span class="hidden-xs">Info</span>
                </a>
            </li>

            <li>
                <a href="#shipping" data-toggle="tab">
                    <i class="fa fa-truck fa-lg"></i>
                    <span class="hidden-xs">Shipping</span>
                </a>
            </li>

            <li>
                <a href="#returns" data-toggle="tab">
                    <i class="fa fa-undo fa-lg"></i>
                    <span class="hidden-xs">Returns</span>
                </a>
            </li>
        </ul>
        <!-- End Tab panels' navigation -->

        <!-- Tab panels container -->

        <div class="tab-content">

            <!-- Product tab -->
            <div class="tab-pane active" id="product">

                <div class="details">
                    <h1>Chaser Overalls</h1>
                    <div class="prices"><span class="price">£92.00</span></div>

                    <div class="meta">
                        <div class="sku">
                            <i class="fa fa-pencil"></i>
                            <span rel="tooltip" title="SKU is 0092">0092</span>
                        </div>

                        <div class="categories">
                            <span><i class="fa fa-tags"></i><a href="category.html" title="Dresses">Dresses</a></span>, <a href="category.html" title="Womens">Womens</a>
                        </div>
                    </div>
                </div>

                <div class="short-description">
                    <p>Vintage-style faux leather short overalls. Long adjustable straps with brass detailing, exposed zip at back, and side slant pockets with single rear welt pocket.</p>
                </div>

                <!-- Product order -->
                <?= ProductOrder::widget(); ?>
                <!-- End product order -->

            </div>
            <!-- End id="product" -->

            <!-- Description tab -->
            <div class="tab-pane" id="description">
                <p><span>Vintage-style faux leather short overalls. Long adjustable straps with brass detailing, exposed zip at back, and side slant pockets with single rear welt pocket.</span><br /><br />
                    <span>100% Polyester</span>
                </p>
            </div>
            <!-- End id="description" -->

            <!-- Shipping tab -->
            <div class="tab-pane" id="shipping">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                <p><img class="img-thumbnail" src="http://www.tfingi.com/repo/royal-mail.png" alt="" /><img class="img-thumbnail" src="http://www.tfingi.com/repo/ups-logo.png" alt="" /></p>
                <p>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                <h6><em class="fa fa-gift"></em> Giftwrap?</h6>
                <p>Let us take care of giftwrapping your presents by selecting <strong>Giftwrap</strong> in the order process. Eligible items can be giftwrapped for as little as &pound;0.99, and larger items may be presented in gift bags.</p>
            </div>
            <!-- End id="shipping" -->

            <!-- Returns tab -->
            <div class="tab-pane" id="returns">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                <p class="lead">For any unwanted goods La Boutique offers a <strong>21-day return policy</strong>.</p>
                <p>If you receive items from us that differ from what you have ordered, then you must notify us as soon as possible using our <a href="#">online contact form</a>.</p>
                <p>If you find that your items are faulty or damaged on arrival, then you are entitled to a repair, replacement or a refund. Please note that for some goods it may be disproportionately costly to repair, and so where this is the case, then we will give you a replacement or a refund.</p>
                <p>Please visit our <a href="#">Warranty section</a> for more details.</p>
            </div>
            <!-- End id="returns" -->

        </div>
        <!-- End tab panels container -->
    </div>
</div>

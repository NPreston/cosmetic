<?php
use yii\helpers\Html;

use frontend\widgets\Alert;
use frontend\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrapper">

        <!-- Header -->
        <div class="header">
            <!-- Top bar -->
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>
                                Responsive eCommerce template — <a href="hhttp://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi"><strong>BUY NOW!</strong></a>
                            </p>
                        </div>
                        <div class="col-sm-6 hidden-xs">
                            <ul class="list-inline pull-right">
                                <li>
                                    <a href="login-register.html" title="Login / Register">Login / Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End class="top" -->

            <!-- Logo & Search bar -->
            <div class="bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-md-6">

                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html" title="← Back home">
                                    <img src="img/logo.png" alt="La Boutique">
                                </a>
                            </div>
                            <!-- End class="logo"-->

                        </div>
                        <div class="col-sm-5 col-sm-offset-1 col-md-3">

                            <!-- Search -->
                            <div class="search">
                                <div class="qs_s">

                                    <form method="post" action="search.html">
                                        <input type="text" name="query" id="query" placeholder="Search…" autocomplete="off" value="">
                                    </form>

                                    <!-- Autocomplete results -->
                                    <div id="autocomplete-results" style="display: none;">
                                        <ul>
                                            <li>
                                                <a title="Lisette Dress" href="product.html">
                                                    <div class="image">
                                                        <img src="img/thumbnails/db_file_img_48_60x60.jpg" alt="">
                                                    </div>
                                                    <h6>Lisette Dress</h6>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Malta Dress" href="product.html">
                                                    <div class="image">
                                                        <img src="img/thumbnails/db_file_img_137_60x60.jpg" alt="">
                                                    </div>
                                                    <h6>Malta Dress</h6>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Marais Dress" href="product.html">
                                                    <div class="image">
                                                        <img src="img/thumbnails/db_file_img_42_60x60.jpg" alt="">
                                                    </div>
                                                    <h6>Marais Dress</h6>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Millay Dress" href="product.html">
                                                    <div class="image">
                                                        <img src="img/thumbnails/db_file_img_107_60x60.jpg" alt="">
                                                    </div>
                                                    <h6>Millay Dress</h6>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Momoko Dress" href="product.html">
                                                    <div class="image">
                                                        <img src="img/thumbnails/db_file_img_132_60x60.jpg" alt="">
                                                    </div>
                                                    <h6>Momoko Dress</h6>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End id="autocomplete-results" -->

                                </div>
                            </div>
                            <!-- End class="search"-->

                        </div>

                        <!-- Mini cart -->
                        <div class="mini-cart">
                            <a href="cart.html" title="Go to cart →">
                                <span>3</span>
                            </a>
                        </div>
                        <!-- End class="mini-cart" -->

                    </div>
                </div>
            </div>
            <!-- End class="bottom" -->

        </div>
        <!-- End class="header" -->
        <!-- Navigation -->
        <nav class="navigation">
            <div class="container">

                <div class="row">
                    <div class="col-md-9">

                        <a href="#" class="main-menu-button">Navigation</a>
                        <!-- Begin Menu Container -->
                        <div class="megamenu_container" style="">
                            <div class="menu-main-navigation-container">
                                <ul id="menu-main-navigation" class="main-menu" style="right: 0px;">

                                    <li class="menu-item-home menu-item-has-children megamenu-parent  megamenu-columns-3" data-width="" style="position: relative;">
                                        <a href="index.html">Home</a>
                                        <ul class="sub-menu megamenu-sub-menu" style="width: 780px; margin-left: 0px; position: absolute;">
                                            <li class="megamenu-heading"><a href="#MegaMenuHeading"><h3>Responsive Full Width Megamenu</h3></a></li>
                                            <li class="menu-item-has-children megamenu-column">
                                                <a href="#MegaMenuColumn">Mega Menu Column</a>
                                                <ul class="megamenu-inner-sub-menu">
                                                    <li class="megamenu-heading first-submenu-header"><a href="#MegaMenuHeading">Display images</a></li>
                                                    <li class="megamenu-content">
                                                        <p><img title="" alt="" src="img/megamenu/img01.jpg"></p>
                                                        <p>Praesent a dolor sem. Sed scelerisque, tellus id pulvinar tristique, erat eros rutrum mi, id adipiscing arcu sem vel est. Ut ac turpis ipsum. Mauris leo nulla, vestibulum id bibendum.</p></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children megamenu-column"><a href="#MegaMenuColumn">Mega Menu Column</a>
                                                <ul class="megamenu-inner-sub-menu">
                                                    <li class="megamenu-heading first-submenu-header"><a href="#MegaMenuHeading">Display videos</a></li>
                                                    <li class="megamenu-content"><p> <iframe src="//player.vimeo.com/video/68161548" width="225" height="144" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                                                        </p>
                                                        <p>Praesent a dolor sem. Sed scelerisque, tellus id pulvinar tristique, erat eros rutrum mi, id adipiscing arcu sem vel est. Ut ac turpis ipsum. Mauris leo nulla, vestibulum id bibendum.</p></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children megamenu-column"><a href="#MegaMenuColumn">Mega Menu Column</a>
                                                <ul class="megamenu-inner-sub-menu">
                                                    <li class="megamenu-heading first-submenu-header"><a href="#MegaMenuHeading">And Google maps!</a></li>
                                                    <li class="megamenu-content">
                                                        <p>
                                                            <iframe width="100%" height="144" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/?ie=UTF8&amp;t=m&amp;ll=52.204004,0.122824&amp;spn=0.005865,0.014677&amp;z=11&amp;output=embed"></iframe>
                                                        </p>
                                                        <p>
                                                            <strong>La Boutique</strong><br>
                                                            <em class="fa fa-map-marker fa-lg"></em> Regent Ave, Cambridge<br>
                                                            <em class="fa fa-phone fa-lg"></em> +1 800-123-4567
                                                        </p>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="category.html">Shop</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="category.html">Womens</a>
                                                <ul class="sub-menu">
                                                    <li><a href="category.html">Dresses</a></li>
                                                    <li><a href="category.html">Tops</a></li>
                                                    <li><a href="category.html" title="Shirts">Shirts</a></li>
                                                    <li><a href="category.html" title="Shoes">Shoes</a></li>
                                                    <li class="menu-item-has-children"><a href="#_" title="Accesories">Accesories</a>
                                                        <ul>
                                                            <li><a href="category.html" title="Hats">Hats</a></li>
                                                            <li><a href="category.html" title="Belts">Belts</a></li>
                                                            <li><a href="category.html" title="Socks">Socks</a></li>

                                                            <li class="menu-item-has-children"><a href="#_" title="More levels"><strong>And much more...</strong></a>
                                                                <ul>
                                                                    <li><a href="#_" title="Earphones">Earphones</a></li>
                                                                    <li><a href="#_" title="Headphones">Headphones</a></li>
                                                                    <li><a href="#_" title="Sunglasses">Sunglasses</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="category.html">Mens</a>
                                                <ul class="sub-menu">
                                                    <li><a href="category.html">Shoes</a></li>
                                                    <li><a href="category.html">Accesories</a></li>
                                                    <li><a href="category.html" title="Shirts">Shirts</a></li>
                                                    <li><a href="category.html" title="Shoes">Shoes</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="category.html">Girls</a>
                                                <ul class="sub-menu">
                                                    <li><a href="category.html">Dresses</a></li>
                                                    <li><a href="category.html">Tops</a></li>
                                                    <li><a href="category.html" title="Shirts">Shirts</a></li>
                                                    <li><a href="category.html" title="Shoes">Shoes</a></li>
                                                    <li class="menu-item-has-children"><a href="#_" title="Accesories">Accesories</a>
                                                        <ul>
                                                            <li><a href="category.html" title="Hats">Hats</a></li>
                                                            <li><a href="category.html" title="Belts">Belts</a></li>
                                                            <li><a href="category.html" title="Socks">Socks</a></li>
                                                            <li class="menu-item-has-children">
                                                                <a href="#_" title="More levels"><strong>And much more...</strong></a>
                                                                <ul>
                                                                    <li><a href="#_" title="Earphones">Earphones</a></li>
                                                                    <li><a href="#_" title="Headphones">Headphones</a></li>
                                                                    <li><a href="#_" title="Sunglasses">Sunglasses</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="category.html" title="Sale">Sale</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children megamenu-parent megamenu-columns-3" data-width="550" style="position: relative;">
                                        <a href="#">Features</a>
                                        <ul class="sub-menu megamenu-sub-menu" style="width: 550px; margin-left: 0px; position: absolute;">
                                            <li class="menu-item-has-children megamenu-column"><a href="#MegaMenuColumn">Mega Menu Column</a>
                                                <ul class="megamenu-inner-sub-menu">
                                                    <li class="megamenu-heading first-submenu-header"><a href="#MegaMenuHeading">Components</a></li>
                                                    <li><a href="typography.html" title="Typography" class="title">Typography</a></li>
                                                    <li><a href="retina-ready-icons.html" title="Retina-ready icons" class="title">Retina-ready icons</a></li>
                                                    <li><a href="buttons.html" title="Buttons" class="title">Buttons</a></li>
                                                    <li><a href="elements.html" title="Elements" class="title">Elements</a></li>
                                                    <li><a href="grids.html" title="Grids" class="title">Grids</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children megamenu-column"><a href="#MegaMenuColumn">Mega Menu Column</a>
                                                <ul class="megamenu-inner-sub-menu">
                                                    <li class="megamenu-heading first-submenu-header"><a href="#MegaMenuHeading">Pages</a></li>
                                                    <li><a href="about-us.html" title="About us" class="title">About us</a></li>
                                                    <li><a href="store-locator.html" title="Store locator" class="title">Store locator</a></li>
                                                    <li><a href="blog.html" title="Blog" class="title">Blog</a></li>
                                                    <li><a href="contact-us.html" title="Contact us" class="title">Contact us</a></li>
                                                    <li><a href="404.html" title="404" class="title">404 Not found</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children megamenu-column"><a href="#MegaMenuColumn">Mega Menu Column</a>
                                                <ul class="megamenu-inner-sub-menu">
                                                    <li class="megamenu-heading first-submenu-header"><a href="#MegaMenuHeading">Accounts</a></li>
                                                    <li><a href="order-history.html">Order History</a></li>
                                                    <li><a href="checkout-start.html">Login / Register</a></li>
                                                    <li><a href="reset-password.html">Reset password</a></li>
                                                    <li><a href="change-password.html">Change password</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-heading"><a href="#MegaMenuHeading">Socialize with us</a></li>
                                            <li class="megamenu-content">
                                                <ul class="social">
                                                    <li><a title="Twitter" href="#" class="twitter">Twitter</a></li>
                                                    <li><a title="Facebook" href="#" class="facebook">Facebook</a></li>
                                                    <li><a title="Pinterest" href="#" class="pinterest">Pinterest</a></li>
                                                    <li><a title="YouTube" href="#" class="youtube">YouTube</a></li>
                                                    <li><a title="Vimeo" href="#" class="vimeo">Vimeo</a></li>
                                                    <li><a title="Flickr" href="#" class="flickr">Flickr</a></li>
                                                    <li><a title="Google+" href="#" class="googleplus">Google+</a></li>
                                                    <li><a title="Dribbble" href="#" class="dribbble">Dribbble</a></li>
                                                    <li><a title="Forrst" href="#" class="forrst">Forrst</a></li>
                                                    <li><a title="Tumblr" href="#" class="tumblr">Tumblr</a></li>
                                                    <li><a title="Digg" href="#" class="digg">Digg</a></li>
                                                    <li><a title="Linkedin" href="#" class="linkedin">Linkedin</a></li>
                                                    <li><a title="Instagram" href="#" class="instagram">Instagram</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><a href="blog.html">Blog</a></li>

                                    <li><a href="store-locator.html">Store locator</a></li>

                                    <li><a href="cart.html">Cart</a></li>

                                    <li class="menu-item-has-children megamenu-parent megamenu-columns-1" data-width="400" style="position: relative;">
                                        <a href="contact-us.html">Contact Us</a>
                                        <ul class="sub-menu megamenu-sub-menu" style="width: 400px; margin-left: -148px; position: absolute;">
                                            <li class="megamenu-column"><a href="#MegaMenuColumn">Mega Menu Column</a></li>
                                            <li class="megamenu-heading"><a href="#MegaMenuHeading">Contact Us</a></li>
                                            <li class="megamenu-content">
                                                <div class="wpcf7">
                                                    <form action="" method="post" class="wpcf7-form" novalidate="novalidate">
                                                        <label>Your Name (required)</label>
                                                        <input type="text" name="your-name" value="" size="40" aria-required="true">
                                                        <label>Your Email (required)</label>
                                                        <input type="email" name="your-email" value="" size="40" aria-required="true">
                                                        <label>Subject</label>
                                                        <input type="text" name="your-subject" value="" size="40">
                                                        <label>Your Message</label>
                                                        <textarea name="your-message" cols="40" rows="10"></textarea>

                                                        <input type="submit" value="Send" class="btn btn-primary">
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 visible-lg">
                        <ul class="breadcrumb pull-right">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li class="active">
                                <a href="#">Product</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
        <!-- End class="navigation" -->


        <!-- Content section -->
        <section class="main">
            <?= Alert::widget() ?>
            <?= $content ?>
        </section>
        <!-- End class="main" -->

        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row">

                    <div class="col-sm-2">
                        <!-- Support -->
                        <div class="support">
                            <h6>Support</h6>

                            <ul class="links">
                                <li>
                                    <a href="about-us.html" title="About us" class="title">About us</a>
                                </li>
                                <li>
                                    <a href="typography.html" title="Typography" class="title">Typography</a>
                                </li>
                                <li>
                                    <a href="retina-ready-icons.html" title="Retina-ready icons" class="title">Retina-ready icons</a>
                                </li>
                                <li>
                                    <a href="buttons.html" title="Buttons" class="title">Buttons</a>
                                </li>
                                <li>
                                    <a href="elements.html" title="Elements" class="title">Elements</a>
                                </li>
                                <li>
                                    <a href="grids.html" title="Grids" class="title">Grids</a>
                                </li>
                                <li>
                                    <a href="store-locator.html" title="Store locator" class="title">Store locator</a>
                                </li>
                                <li>
                                    <a href="contact-us.html" title="Contact us" class="title">Contact us</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End class="support" -->

                        <hr>

                        <!-- My account -->
                        <div class="account">
                            <h6>My account</h6>

                            <ul class="links">
                                <li>
                                    <a href="login-register.html" title="Login / Register">Login / Register</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End class="account"-->

                    </div>

                    <div class="col-sm-2">

                        <!-- Categories -->
                        <div class="categories">
                            <h6>Shop</h6>

                            <ul class="links">
                                <li>
                                    <a href="category.html" title="Women">Women</a>
                                </li>
                                <li>
                                    <a href="category.html" title="Men">Men</a>
                                </li>
                                <li>
                                    <a href="category.html" title="Girls">Girls</a>
                                </li>
                                <li>
                                    <a href="category.html" title="Boys">Boys</a>
                                </li>
                                <li>
                                    <a href="category.html" title="Sale"><strong>Sale</strong></a>
                                </li>
                            </ul>
                        </div>
                        <!-- End class="categories" -->

                        <hr>

                        <!-- Pay with confidence -->
                        <div class="confidence">
                            <h6>Pay with confidence</h6>

                            <img src="img/stripe.png" alt="We accept all major credit cards">
                        </div>
                        <!-- End class="confidence" -->
                    </div>

                    <div class="col-sm-4">
                        <h6>From the blog</h6>

                        <ul class="list-chevron links">
                            <li>
                                <a href="blog-post.html">Article with video</a>
                                <small>05/01/2013</small>
                            </li>
                            <li>
                                <a href="blog-post.html">Article with images</a>
                                <small>03/14/2013</small>
                            </li>
                            <li>
                                <a href="blog-post.html">Article with style!</a>
                                <small>08/31/2013</small>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-4">

                        <!-- Newsletter subscription -->
                        <div class="newsletter">
                            <h6>Newsletter subscription</h6>

                            <form onsubmit="return false;" enctype="multipart/form-data" action="#" method="post">

                                <div class="input-group">
                                    <input type="text" name="email" class="form-control">
                                    <span class="input-group-addon btn" type="submit" id="newsletter_submit" data-toggle="modal" data-target="#newsletter_subscribe">Go!</span>
                                </div>

                            </form>

                            <p>Sign up to receive our latest news and updates direct to your inbox</p>
                        </div>
                        <!-- End class="newsletter" -->


                        <hr>

                        <!-- Social icons -->
                        <div class="social">
                            <h6>Socialize with us</h6>

                            <ul class="social-icons">

                                <li>
                                    <a class="twitter" href="#" title="Twitter">Twitter</a>
                                </li>

                                <li>
                                    <a class="facebook" href="#" title="Facebook">Facebook</a>
                                </li>

                                <li>
                                    <a class="pinterest" href="#" title="Pinterest">Pinterest</a>
                                </li>

                                <li>
                                    <a class="youtube" href="#" title="YouTube">YouTube</a>
                                </li>

                                <li>
                                    <a class="vimeo" href="#" title="Vimeo">Vimeo</a>
                                </li>

                                <li>
                                    <a class="flickr" href="#" title="Flickr">Flickr</a>
                                </li>

                                <li>
                                    <a class="googleplus" href="#" title="Google+">Google+</a>
                                </li>

                                <li>
                                    <a class="dribbble" href="#" title="Dribbble">Dribbble</a>
                                </li>

                                <li>
                                    <a class="tumblr" href="#" title="Tumblr">Tumblr</a>
                                </li>

                                <li>
                                    <a class="digg" href="#" title="Digg">Digg</a>
                                </li>

                                <li>
                                    <a class="linkedin" href="#" title="LinkedIn">LinkedIn</a>
                                </li>

                                <li>
                                    <a class="instagram" href="#" title="Instagram">Instagram</a>
                                </li>

                            </ul>
                        </div>
                        <!-- End class="social" -->

                    </div>
                </div>
            </div>
        </div>
        <!-- End id="footer" -->

        <!-- Credits bar -->
        <div class="credits">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <p>© 2015 <a href="http://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi" title="La Boutique">La Boutique</a> · <a href="http://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi" title="Terms &amp; Conditions">Terms &amp; Conditions</a> · <a href="http://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi" title="Privacy policy">Privacy policy</a> · All Rights Reserved. </p>
                    </div>
                    <div class="col-sm-4 text-right hidden-xs">
                        <p><a href="http://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi" title="Responsive eCommerce template">Responsive eCommerce template by Tfingi</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End class="credits" -->

        <!-- Newsletter modal window -->
        <div id="newsletter_subscribe" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                        <div class="hgroup title">
                            <h3 id="modal-label">You are now subscribed to our newsletter</h3>
                            <h5>All the latest deals and offers will be making their way to your inbox shortly!</h5>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button data-dismiss="modal" aria-hidden="true" class="btn btn-sm btn-block-xs">
                            Close &nbsp; <i class="fa fa-check"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <!-- End id="newsletter_subscribe" -->

    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

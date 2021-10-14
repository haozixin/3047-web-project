<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

$checkConnection = function (string $name) {
    $error = null;
    $connected = false;
    try {
        $connection = ConnectionManager::get($name);
        $connected = $connection->connect();
    } catch (Exception $connectionError) {
        $error = $connectionError->getMessage();
        if (method_exists($connectionError, 'getAttributes')) {
            $attributes = $connectionError->getAttributes();
            if (isset($attributes['message'])) {
                $error .= '<br />' . $attributes['message'];
            }
        }
    }

    return compact('connected', 'error');
};

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/homepage.php with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Healty Honey | Homepage </title>
    <?= $this->Html->meta('icon') ?>
    <title><?= $this->Html->meta('icon') ?></title>

    <!-- Stylesheets -->

    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('header.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('responsive.css') ?>
    <link
        href="https://fonts.googleapis.com/css2?family=Niconne&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Tangerine:wght@400;700&display=swap"
        rel="stylesheet">
    <?= $this->Html->css('../img/favicon.png') ?>


    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <?= $this->Html->css('sb-admin-2.min.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->Html->script('https://unpkg.com/sweetalert/dist/sweetalert.min.js') ?>
    <?= $this->Html->script('/vendor/jquery/jquery.min.js') ?>


</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
    <script>
        function a() {
            confirm("Coming Soon!");
        }
    </script>


    <!-- Main Header-->
    <header class="main-header header-style-one">

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container clearfix">

                <div class="pull-left logo-box">
                    <div class="logo"><a href="#"><img src="webroot/img/logo.png" alt="" title=""></a></div>
                </div>

                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="">Home</a>

                                </li>
                                <li class="dropdown"><a href="#">About</a>
                                    <ul>
                                        <li>
                                            <a href="#" onClick="a()">About Us</a></li>
                                        <li><a href='#' onClick="a()">Team</a></li>
                                        <li><a href='#' onClick="a()">Our Honey Stores</a></li>
                                    </ul>
                                </li>
                                <li ><a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'displaycustomer']) ?>">display
                                        products</a>

                                </li>
                                <li><a href="<?= $this->Url->build(['controller' => 'Recipes', 'action' => 'displaycustomer']) ?>">Let's
                                        see Recipes</a>

                                </li>
                                <li ><a href="<?= $this->Url->build(['controller' => 'Customers', 'action' => 'faq']) ?>">Q&A</a>
                                </li>
                                <li><a href="<?= $this->Url->build(['controller' => 'Admins', 'action' => 'homepage']) ?>">Log in</a></li>

                            </ul>
                        </div>
                    </nav>

                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">



                    </div>
                </div>

            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" title=""><img src="webroot/img/logo-small.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->

                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">

                        <!-- Search Btn -->
                        <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>

                        <!-- Nav Btn -->
                        <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-2"></span></div>

                    </div>

                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="webroot/img/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    <!-- Sidebar Cart Item -->
    <div class="xs-sidebar-group info-group">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
                <div class="sidebar-textwidget">

                    <!-- Sidebar Info Content -->
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="index.html"><img src="webroot/img/logo.png" alt=""/></a>
                            </div>
                            <div class="content-box">
                                <h2>About Us</h2>
                                <p class="text">The argument in favor of using filler text goes something like this: If
                                    you use real content in the Consulting Process, anytime you reach a review point
                                    you’ll end up reviewing and negotiating the content itself and not the design.</p>
                                <a href="contact.html" class="theme-btn btn-style-one clearfix"><span
                                        class="icon"></span>Consultation</a>
                            </div>
                            <div class="contact-info">
                                <h2>Contact Info</h2>
                                <ul class="list-style-one">
                                    <li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA
                                    </li>
                                    <li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
                                    <li><span class="icon fa fa-envelope"></span>foodily@gmail.com</li>
                                    <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed
                                    </li>
                                </ul>
                            </div>
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li class="facebook"><a href="#" onClick="a()" class="fa fa-facebook-f"></a></li>
                                <li class="twitter"><a href="#" onClick="a()" class="fa fa-twitter"></a></li>
                                <li class="linkedin"><a href="#" onClick="a()" class="fa fa-linkedin"></a></li>
                                <li class="instagram"><a href="#" onClick="a()" class="fa fa-instagram"></a></li>
                                <li class="youtube"><a href="#" onClick="a()" class="fa fa-youtube"></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END sidebar widget item -->

    <!-- Banner Section -->
    <section class="banner-section">
        <div class="pattern-layer" style="background-image: url(webroot/img/main-slider/pattern-1.png)"></div>
        <div class="main-slider-carousel owl-carousel owl-theme">

            <!-- Slide -->
            <div class="slide">
                <div class="icon-layer-one" style="background-image: url(webroot/img/main-slider/icon-1.png)"></div>
                <div class="icon-layer-two" style="background-image: url(webroot/img/main-slider/icon-2.png)"></div>
                <div class="auto-container">
                    <div class="row clearfix">

                        <!-- Content Column -->
                        <div class="content-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h1><span class="first-letter">Healthy</span><span class="second-letter">Honey</span>
                                </h1>
                                <div class="text">100% organic raw honey infused with wildcrafted organic tea tree oil, widely regarded
                                    for its remarkable antioxidants, antimicrobial and antibacterial properties.
                                </div>
                                <div class="btns-box" onclick="swal('The function is coming soon')">
                                    <a class="theme-btn btn-style-one clearfix"><span
                                            class="icon"></span>Buy Now</a>
                                </div>
                                <div class="icons-box">
                                    <img src="webroot/img/main-slider/icons.png" alt=""/>
                                </div>
                            </div>
                        </div>

                        <!-- Image Column -->
                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="icon-layer-three"
                                     style="background-image: url(webroot/img/main-slider/icon-3.png)"></div>
                                <div class="image">
                                    <img src="webroot/img/main-slider/content-image-1.png" alt=""/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="slide">
                <div class="icon-layer-one" style="background-image: url(webroot/img/main-slider/icon-1.png)"></div>
                <div class="icon-layer-two" style="background-image: url(webroot/img/main-slider/icon-6.png)"></div>
                <div class="auto-container">
                    <div class="row clearfix">

                        <!-- Content Column -->
                        <div class="content-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h1><span class="first-letter">Heathly</span><span class="second-letter">Honey</span>
                                </h1>
                                <div class="text">A delicious new way to enjoy honey with the mother for better gut health and digestion,
                                    and the antioxidant and prebiotic benefits of organic raw honey to help support your immune system.
                                </div>
                                <div class="btns-box" onclick="swal('The function is coming soon')">
                                    <a class="theme-btn btn-style-one clearfix"><span
                                            class="icon"></span>Buy Now</a>
                                </div>
                                <div class="icons-box">
                                    <img src="webroot/img/main-slider/icons.png" alt=""/>
                                </div>
                            </div>
                        </div>

                        <!-- Image Column -->
                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="icon-layer-three"
                                     style="background-image: url(webroot/img/main-slider/icon-3.png)"></div>
                                <div class="image">
                                    <img src="webroot/img/main-slider/content-image-2.png" alt=""/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="slide style-two">
                <div class="icon-layer-one" style="background-image: url(webroot/img/main-slider/icon-1.png)"></div>
                <div class="icon-layer-two" style="background-image: url(webroot/img/main-slider/icon-7.png)"></div>
                <div class="auto-container">
                    <div class="row clearfix">

                        <!-- Content Column -->
                        <div class="content-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h1><span class="first-letter">Healthy</span><span class="second-letter">Honey</span>
                                </h1>
                                <div class="text">The sweet floral flavour of 100% pure raw honey, combined with the tart
                                    and floral flavour of Davidson Plum.
                                </div>
                                <div class="btns-box" onclick="swal('The function is coming soon')">
                                    <a class="theme-btn btn-style-one clearfix"><span
                                            class="icon"></span>Buy Now</a>
                                </div>
                                <div class="icons-box">
                                    <img src="webroot/img/main-slider/icons.png" alt=""/>
                                </div>
                            </div>
                        </div>

                        <!-- Image Column -->
                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="icon-layer-three"
                                     style="background-image: url(webroot/img/main-slider/icon-3.png)"></div>
                                <div class="image">
                                    <img src="webroot/img/main-slider/content-image-3.png" alt=""/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- End Banner Section -->

    <!-- Juice Section -->
    <section class="juice-section">
        <div class="section-text">yummy</div>
        <div class="pattern-layer" style="background-image: url(webroot/img/background/1.png)"></div>
        <div class="pattern-layer-two" style="background-image: url(webroot/img/resource/juice-glass.png)"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="webroot/img/resource/juice.png" alt=""/>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title">Drink for Health</div>
                            <h2>Fresh Honey-mixed <span class="theme_color">Juices</span></h2>
                            <div class="separate"></div>
                            <div class="text">8 out of 10 Owners who Expressed a Preference said Their Cats Preferred Honey.
                                You'll Look a Little Lovelier Each Day with Fabulous Pink Honey.
                            </div>
                        </div>
                        <div onclick="swal('The function is coming soon')">
                        <a  class="theme-btn btn-style-two clearfix"><span class="icon"></span>Buy
                            Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Juice Section -->

    <!-- Beverage Section -->
    <section class="beverage-section">
        <div class="icon-layer" style="background-image: url(webroot/img/resource/beverage.png)"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">Best for You</div>
                <h2>Honey Delicious</h2>
                <div class="separate"></div>
            </div>
            <div class="row clearfix">

                <!-- Beverage Column -->
                <div class="beverage-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="#"><img src="webroot/img/resource/beverage-1.jpg" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <h6><a onclick="swal('The function is coming soon')">Pancake With Honey</a></h6>
                            <div class="products">3 products</div>
                        </div>
                    </div>
                </div>

                <!-- Beverage Column -->
                <div class="beverage-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="#"><img src="webroot/img/resource/beverage-2.jpg" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <h6><a onclick="swal('The function is coming soon')">Honey Lemon Tea</a></h6>
                            <div class="products">3 products</div>
                        </div>
                    </div>
                </div>

                <!-- Beverage Column -->
                <div class="beverage-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="#"><img src="webroot/img/resource/beverage-3.jpg" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <h6><a onclick="swal('The function is coming soon')">Honey Strawberry Smoothie</a></h6>
                            <div class="products">3 products</div>
                        </div>
                    </div>
                </div>

                <!-- Beverage Column -->
                <div class="beverage-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="#"><img src="webroot/img/resource/beverage-4.jpg" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <h6><a onclick="swal('The function is coming soon')">Honey Comb Cake </a></h6>
                            <div class="products">3 products</div>
                        </div>
                    </div>
                </div>

                <!-- Beverage Column -->
                <div class="beverage-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a onclick="swal('The function is coming soon')"><img src="webroot/img/resource/beverage-5.jpg" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <h6><a href="#">Honey Garlic Chicken Wings</a></h6>
                            <div class="products">3 products</div>
                        </div>
                    </div>
                </div>

                <!-- Beverage Column -->
                <div class="beverage-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="#"><img src="webroot/img/resource/beverage-6.jpg" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <h6><a onclick="swal('The function is coming soon')">Honey Comb Sugar</a></h6>
                            <div class="products">3 products</div>
                        </div>
                    </div>
                </div>

                <!-- Beverage Column -->
                <div class="beverage-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="#"><img src="webroot/img/resource/beverage-7.jpg" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <h6><a onclick="swal('The function is coming soon')">Honey Taffy</a></h6>
                            <div class="products">3 products</div>
                        </div>
                    </div>
                </div>

                <!-- Beverage Column -->
                <div class="beverage-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="#"><img src="webroot/img/resource/beverage-8.jpg" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <h6><a onclick="swal('The function is coming soon')">Honey Butter Spared On Bread</a></h6>
                            <div class="products">3 products</div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Button Box -->
            <div class="button-box text-center" onclick="swal('The function is coming soon')">
                <a  class="theme-btn btn-style-two clearfix"><span class="icon"></span>View All Products</a>
            </div>

        </div>
    </section>
    <!-- End Beverage Section -->

    <!-- Deal Section -->
    <section class="deal-section" style="background-image: url(webroot/img/background/2.jpg)">
        <div class="top-pattern-layer" style="background-image: url(webroot/img/background/pattern-1.png)"></div>
        <div class="bottom-pattern-layer" style="background-image: url(webroot/img/background/pattern-2.png)"></div>
        <div class="auto-container">
            <div class="content-box" style="background-image: url(webroot/img/resource/deal.png)">
                <div class="box-inner">
                    <!-- Sec Title -->
                    <div class="sec-title light centered">
                        <div class="title">30% off for the first order</div>
                        <h2>Big Deals of the Week</h2>
                        <br/>
                        <div class="text">Buy three get one free! Rush to us to grab the best! Hurry up!
                            <br>
                            <br>
                            <br>
                            Buy three get one free selected honey! Rush to us to grab the best! Hurry up!
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Deal Section -->

    <!-- Recipe Section -->
    <section class="recipe-section">
        <div class="section-text">yummy</div>
        <div class="icon-layer-one" style="background-image: url(webroot/img/icons/icon-1.png)"></div>
        <div class="icon-layer-two" style="background-image: url(webroot/img/icons/icon-2.png)"></div>
        <div class="icon-layer-three" style="background-image: url(webroot/img/icons/icon-3.png)"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">Best for You</div>
                <h2>Detox Honey Recipe</h2>
                <div class="separate"></div>
            </div>
            <div class="inner-container">
                <div class="circle-layer" style="background-image: url(webroot/img/icons/circles.png)"></div>
                <div class="row clearfix">

                    <!-- Left Column -->
                    <div class="left-column col-lg-5 col-md-6 col-sm-12">
                        <div class="inner-column">

                            <!-- Recipe Block -->
                            <div class="recipe-block">
                                <div class="inner-box">
                                    <div class="icon"><img src="webroot/img/resource/recipe-1.png" alt=""/></div>
                                    <h6><a href="menu.html">Flower</a></h6>
                                    <div class="text">Fresh flowers for bees to continuously collect nectar
                                    </div>
                                </div>
                            </div>

                            <!-- Recipe Block -->
                            <div class="recipe-block">
                                <div class="inner-box">
                                    <div class="icon"><img src="webroot/img/resource/recipe-2.png" alt=""/></div>
                                    <h6><a href="menu.html">Sun</a></h6>
                                    <div class="text">The good geographical location allows sufficient sunshine, and the honeys can have enough energy to produce honey
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-2 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="webroot/img/resource/recipe.png" alt=""/>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="right-column col-lg-5 col-md-6 col-sm-12">
                        <div class="inner-column">

                            <!-- Recipe Block / Style Two -->
                            <div class="recipe-block style-two">
                                <div class="inner-box">
                                    <div class="icon"><img src="webroot/img/resource/recipe-3.png" alt=""/></div>
                                    <h6><a href="menu.html">Temperature </a></h6>
                                    <div class="text">We control the temperature of the honeycomb in real time to ensure the production of high-quality honey
                                    </div>
                                </div>
                            </div>

                            <!-- Recipe Block / Style Two -->
                            <div class="recipe-block style-two">
                                <div class="inner-box">
                                    <div class="icon"><img src="webroot/img/resource/recipe-4.png" alt=""/></div>
                                    <h6><a href="menu.html">Professional bee farmer</a></h6>
                                    <div class="text">Professional beekeepers check the status of the hive in real time to ensure the health of bees and the quality of honey
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Recipe Section -->

    <!-- Fluid Section One -->
    <section class="fluid-section-one">
        <div class="outer-container clearfix">

            <!-- Content Column -->
            <div class="content-column">
                <div class="icon-box" style="background-image:url(webroot/img/icons/icon-4.png)"></div>
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <h2>Upcoming Our <br> Honey mix Beverage</h2>
                        <div class="separate"></div>
                        <div class="text">Mead is an alcoholic beverage created by fermenting honey with water,
                            sometimes with various fruits, spices, grains, or hops. The alcoholic content ranges from about 3.5% ABV to more than 18%.
                            The defining characteristic of mead is that the majority of the beverage's fermentable sugar is derived from honey.
                        </div>
                    </div>
                    <!-- Button Box -->
                    <div class="button-box" onclick="swal('The function is coming soon')">
                        <a  class="theme-btn btn-style-two clearfix"><span class="icon"></span>All Product</a>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column" style="background-image:url(webroot/img/resource/image-1.jpg)">
                <figure class="image-box"><img src="webroot/img/resource/image-1.jpg" alt=""></figure>
            </div>

        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="icon-layer-one" style="background-image: url(webroot/img/icons/icon-1.png)"></div>
        <div class="icon-layer-two" style="background-image: url(webroot/img/icons/icon-2.png)"></div>
        <div class="icon-layer-three" style="background-image: url(webroot/img/icons/icon-3.png)"></div>
        <div class="pattern-layer" style="background-image: url(webroot/img/background/pattern-4.png)"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">Testimonial</div>
                <h2>What People Say</h2>
                <div class="separate"></div>
            </div>
            <div class="inner-container">
                <div class="single-item-carousel owl-carousel owl-theme">

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="author-image">
                                <img src="webroot/img/resource/author-1.jpg" alt=""/>
                            </div>
                            <div class="text">“The best honey I have ever tried.
                                Will be buying again.<br>This honey taste amazing and it is a great compliment to my teas and electuaries. Thank you Hearty healthy honey!!”
                            </div>
                            <div class="designation">Meredith Grant <span>- Host Mother</span></div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="author-image">
                                <img src="webroot/img/resource/author-1.jpg" alt=""/>
                            </div>
                            <div class="text">“The best honey I have ever tried.
                                Will be buying again.<br>This honey taste amazing and it is a great compliment to my teas and electuaries. Thank you Hearty healthy honey!!”
                            </div>
                            <div class="designation">Meredith Grant <span>- Host Mother</span></div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="author-image">
                                <img src="webroot/img/resource/author-1.jpg" alt=""/>
                            </div>
                            <div class="text">“Such a delicious infusion of honey and reishi! Excellent product and great to help save the bees!
                                <br>This honey taste amazing and it is a great compliment to my teas and electuaries. Thank you Hearty healthy honey!!”
                            </div>
                            <div class="designation">Meredith Grant <span>- Host Mother</span></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="pattern-layer" style="background-image: url(webroot/img/background/pattern-5.png)"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">News & Recipe</div>
                <h2>About our honey</h2>
                <div class="separate"></div>
                <div class="text">Our honey is freshly make with professional, we made sure every step is transparent and safe!
                    <br>Have you had your honey today?
                </div>
            </div>
            <div class="row clearfix">

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="webroot/img/resource/news-1.jpg" alt=""/>
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="webroot/img/resource/news-1.jpg" data-fancybox="news" data-caption=""
                                           class="icon flaticon-gallery"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="category">Farm</div>
                            <h6><a onclick="swal('The function is coming soon')">Check how honey is being made here</a></h6>
                            <ul class="post-info">
                                <li>May 21, 2021</li>
                                <li>2 Comments</li>
                                <li><a>Share</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="webroot/img/resource/news-2.jpg" alt=""/>
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="webroot/img/resource/news-2.jpg" data-fancybox="news" data-caption=""
                                           class="icon flaticon-gallery"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="category">Recipe</div>
                            <h6><a onclick="swal('The function is coming soon')">Honey pistachio cake</a></h6>
                            <ul class="post-info">
                                <li>May 21, 2021</li>
                                <li>2 Comments</li>
                                <li><a>Share</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="webroot/img/resource/news-3.jpg" alt=""/>
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="webroot/img/resource/news-3.jpg" data-fancybox="news" data-caption=""
                                           class="icon flaticon-gallery"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="category">Package</div>
                            <h6><a onclick="swal('The function is coming soon')">Customize your honey bottle</a></h6>
                            <ul class="post-info">
                                <li>May 21, 2021</li>
                                <li>2 Comments</li>
                                <li><a>Share</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End News Section -->

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="outer-container">
            <div class="gallery-carousel owl-carousel owl-theme">

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="webroot/img/gallery/1.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="webroot/img/gallery/1.jpg" data-fancybox="gallery" data-caption=""
                                           class="icon flaticon-plus"></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="webroot/img/gallery/2.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="webroot/img/gallery/2.jpg" data-fancybox="gallery" data-caption=""
                                           class="icon flaticon-plus"></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="webroot/img/gallery/3.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="webroot/img/gallery/3.jpg" data-fancybox="gallery" data-caption=""
                                           class="icon flaticon-plus"></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="webroot/img/gallery/4.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="webroot/img/gallery/4.jpg" data-fancybox="gallery" data-caption=""
                                           class="icon flaticon-plus"></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="webroot/img/gallery/5.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="webroot/img/gallery/5.jpg" data-fancybox="gallery" data-caption=""
                                           class="icon flaticon-plus"></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="webroot/img/gallery/1.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="webroot/img/gallery/1.jpg" data-fancybox="gallery" data-caption=""
                                           class="icon flaticon-plus"></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="webroot/img/gallery/2.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="webroot/img/gallery/2.jpg" data-fancybox="gallery" data-caption=""
                                           class="icon flaticon-plus"></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="webroot/img/gallery/3.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="webroot/img/gallery/3.jpg" data-fancybox="gallery" data-caption=""
                                           class="icon flaticon-plus"></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="webroot/img/gallery/4.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="webroot/img/gallery/4.jpg" data-fancybox="gallery" data-caption=""
                                           class="icon flaticon-plus"></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="webroot/img/gallery/5.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="webroot/img/gallery/5.jpg" data-fancybox="gallery" data-caption=""
                                           class="icon flaticon-plus"></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Gallery Section -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="pattern-layer-one" style="background-image: url(webroot/img/resource/footer-pattern-1.png)"></div>
        <div class="pattern-layer-two" style="background-image: url(webroot/img/resource/footer-pattern-2.png)"></div>
        <div class="pattern-layer-three" style="background-image: url(webroot/img/background/pattern-6.png)"></div>
        <div class="auto-container">
            <!-- Widgets Section -->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
                                    <h6>Contact Us</h6>
                                    <div class="text">6Fifth Avenue 5501, Broadway, New York Morris Street London 1234
                                    </div>
                                    <ul class="contact-list">
                                        <li><span class="icon fa fa-send"></span>admins@heartyHoney.com</li>
                                        <li><span class="icon fa fa-phone"></span><a>(123) 4567 89000</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h6>Useful Links</h6>
                                    <ul class="footer-list">
                                        <li><a href="#" onClick="a()">About us</a></li>
                                        <li><a href="#" onClick="a()">Blogs</a></li>
                                        <li><a href="#" onClick="a()">Terms Of Service</a></li>
                                        <li><a href="#" onClick="a()">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget social-widget">
                                    <h6>Follow Us Now</h6>
                                    <ul class="social-list">
                                        <li><a href="#" onClick="a()"><span class="icon fa fa-facebook"></span>facebook</a>
                                        </li>
                                        <li><a href="#" onClick="a()"><span
                                                    class="icon fa fa-twitter"></span>twitter</a></li>
                                        <li><a href="#" onClick="a()"><span class="icon fa fa-instagram"></span>instagram</a>
                                        </li>
                                        <li><a href="#" onClick="a()"><span class="icon fa fa-dribbble"></span>dribbble</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget newsletter-widget">
                                    <h6>Subscribe</h6>
                                    <div class="newsletter-form">
                                        <form method="post">
                                            <div class="form-group">

                                                <a type="submit" class="theme-btn submit-btn" href="<?= $this->Url->build(['controller' => 'NewsletterSubscriptions', 'action' => 'addforcustomer']) ?>">Subscribe Now

                                                </a>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="footer-bottom">
                <div class="copyright">&copy; 2021 foodily All Rights By Agile Amigos.
                </div>
            </div>
        </div>
    </footer>

</div>
<!--End pagewrapper-->

<!-- Search Popup -->
<div class="search-popup">
    <button class="close-search style-two">Close<span class="flaticon-multiply"></span></button>

    <form>
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="" onclick="swal('Hi, search function doesn\'t work for now')"><i class="fa fa-search"></i>
            </button>

        </div>
    </form>
</div>
<!-- End Header Search -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
<?= $this->Html->script('/js/jquery.js') ?>
<?= $this->Html->script('/js/popper.min.js') ?>
<?= $this->Html->script('/js/bootstrap.min.js') ?>

<?= $this->Html->script('/js/jquery.fancybox.js') ?>
<?= $this->Html->script('/js/appear.js') ?>
<?= $this->Html->script('/js/parallax.min.js') ?>
<?= $this->Html->script('/js/tilt.jquery.min.js') ?>
<?= $this->Html->script('/js/jquery.paroller.min.js') ?>
<?= $this->Html->script('/js/owl.js') ?>
<?= $this->Html->script('/js/wow.js') ?>
<?= $this->Html->script('/js/nav-tool.js') ?>
<?= $this->Html->script('/js/jquery-ui.js') ?>
<?= $this->Html->script('/js/script.js') ?>
<?= $this->Html->script('https://unpkg.com/sweetalert/dist/sweetalert.min.js') ?>


</body>
</html>

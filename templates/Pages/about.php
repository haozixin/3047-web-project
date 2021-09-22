<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
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
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hearty Honey | About Us</title>
    <?= $this->Html->meta('icon') ?>
    <title><?= $this->Html->meta('icon') ?></title>
    <!-- Stylesheets -->
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('header.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('responsive.css') ?>

    <link href="https://fonts.googleapis.com/css2?family=Niconne&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">



    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <?= $this->Html->css('sb-admin-2.min.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->Html->script('/vendor/jquery/jquery.min.js') ?>

</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header header-style-four">

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container clearfix">

                <div class="pull-left logo-box">
                    <div class="logo"><a href="index.html"><img src="img/logo-2.png" alt="" title=""></a></div>
                </div>

                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index.html">Homepage One</a></li>
                                        <li><a href="index-2.html">Homepage Two</a></li>
                                        <li><a href="index-3.html">Homepage Three</a></li>

                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="index.html">Header Style One</a></li>
                                                <li><a href="index-2.html">Header Style Two</a></li>
                                                <li><a href="index-3.html">Header Style Three</a></li>
                                                <li><a href="index-3.html">Header Style Four</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="current dropdown"><a href="#">About</a>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="restaurant.html">Restaurant</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Menu</a>
                                    <ul>
                                        <li><a href="menu.html">Menu</a></li>
                                        <li><a href="milkshake.html">Milk Shake</a></li>
                                        <li><a href="frappe.html">Frappe</a></li>
                                        <li><a href="boba-tea.html">Boba Tea</a></li>
                                        <li><a href="slushy.html">Slushy</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Gallery</a>
                                    <ul>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="gallery-2.html">Gallery 02</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog-classic.html">Blog Classic</a></li>
                                        <li><a href="news-detail.html">Blog Single</a></li>
                                        <li><a href="news-detail-2.html">Blog Single 02</a></li>
                                        <li><a href="not-found.html">Not Found</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </div>
                    </nav>

                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">

                        <!-- Search Btn -->
                        <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>

                        <!-- Nav Btn -->
                        <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-2"></span></div>

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
                    <a href="index.html" title=""><img src="img/logo-small.png" alt="" title=""></a>
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
                <div class="nav-logo"><a href="index.html"><img src="img/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
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
                                <a href="index.html"><img src="img/logo.png" alt="" /></a>
                            </div>
                            <div class="content-box">
                                <h2>About Us</h2>
                                <p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
                                <a href="contact.html" class="theme-btn btn-style-one clearfix"><span class="icon"></span>Consultation</a>
                            </div>
                            <div class="contact-info">
                                <h2>Contact Info</h2>
                                <ul class="list-style-one">
                                    <li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
                                    <li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
                                    <li><span class="icon fa fa-envelope"></span>foodily@gmail.com</li>
                                    <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                                </ul>
                            </div>
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
                                <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                                <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                                <li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
                                <li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END sidebar widget item -->

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(../../webroot/img/background/6.jpg)">
        <div class="pattern-layer" style="background-image: url(../../webroot/img/background/pattern-7.png)"></div>
        <div class="auto-container">
            <h2>About Us</h2>
            <ul class="page-breadcrumb">
                <li><a href="index.html">home</a></li>
                <li>About us</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- History Section -->
    <section class="history-section-two">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="img/resource/history-3.jpg" alt="" />
                        </div>
                        <div class="image-two">
                            <img src="img/resource/history-4.png" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title">Our Vision and History </div>
                            <h2>Founded in 1970 by <span class="theme_color">Chairman Jay Martin</span></h2>
                            <div class="text">The Juice Plus+ Company has grown from a small, direct-sales company into a highly successful, privately held health and wellness company operatinLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                        </div>
                        <ul class="list-style-two">
                            <li>Cras at mi luctus, tincidunt urna eu, posuere enim</li>
                            <li>Vivamus elementum lorem vitae quam tincidunt</li>
                            <li>Suspendisse accumsan eros eu erat condimentum</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End History Section -->

    <!-- Gallery Section Two -->
    <section class="gallery-section-two">
        <div class="outer-container">
            <div class="masonry-items-container row clearfix">

                <!-- Gallery Block Two -->
                <div class="gallery-block-two masonry-item col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="img/gallery/19.jpg" alt="" />
                            <div class="overlay-box">
                                <h6><a href="gallery.html">Cornish cod fillet</a></h6>
                                <div class="title">Us percipit urbanitas referrentur ea.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Block Two -->
                <div class="gallery-block-two masonry-item col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="img/gallery/20.jpg" alt="" />
                            <div class="overlay-box">
                                <h6><a href="gallery.html">Cornish cod fillet</a></h6>
                                <div class="title">Us percipit urbanitas referrentur ea.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Block Two -->
                <div class="gallery-block-two masonry-item col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="img/gallery/21.jpg" alt="" />
                            <div class="overlay-box">
                                <h6><a href="gallery.html">Cornish cod fillet</a></h6>
                                <div class="title">Us percipit urbanitas referrentur ea.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Block Two -->
                <div class="gallery-block-two masonry-item col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="img/gallery/22.jpg" alt="" />
                            <div class="overlay-box">
                                <h6><a href="gallery.html">Cornish cod fillet</a></h6>
                                <div class="title">Us percipit urbanitas referrentur ea.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Block Two -->
                <div class="gallery-block-two masonry-item col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="img/gallery/23.jpg" alt="" />
                            <div class="overlay-box">
                                <h6><a href="gallery.html">Cornish cod fillet</a></h6>
                                <div class="title">Us percipit urbanitas referrentur ea.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Block Two -->
                <div class="gallery-block-two masonry-item col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="img/gallery/24.jpg" alt="" />
                            <div class="overlay-box">
                                <h6><a href="gallery.html">Cornish cod fillet</a></h6>
                                <div class="title">Us percipit urbanitas referrentur ea.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Gallery Section Two -->

    <!-- Staff Section -->
    <section class="staff-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">Our most valuable asset</div>
                <h2>Friendly Staff</h2>
            </div>
            <div class="row clearfix">

                <!-- Staff Block -->
                <div class="staff-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="#"><img src="img/resource/staff-1.jpg" alt="" /></a>
                            <div class="overlay-box">
                                <div class="content">
                                    <h6><a href="#">Jusica Malina</a></h6>
                                    <div class="designation">Pastry Chef</div>
                                    <ul class="social-list">
                                        <li><a href="#"><span class="icon fa fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="icon fa fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="icon fa fa-twitter-square"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Staff Block -->
                <div class="staff-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="#"><img src="img/resource/staff-2.jpg" alt="" /></a>
                            <div class="overlay-box">
                                <div class="content">
                                    <h6><a href="#">Jusica Malina</a></h6>
                                    <div class="designation">Pastry Chef</div>
                                    <ul class="social-list">
                                        <li><a href="#"><span class="icon fa fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="icon fa fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="icon fa fa-twitter-square"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Staff Block -->
                <div class="staff-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="#"><img src="img/resource/staff-3.jpg" alt="" /></a>
                            <div class="overlay-box">
                                <div class="content">
                                    <h6><a href="#">Jusica Malina</a></h6>
                                    <div class="designation">Pastry Chef</div>
                                    <ul class="social-list">
                                        <li><a href="#"><span class="icon fa fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="icon fa fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="icon fa fa-twitter-square"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Staff Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="icon-layer-one" style="background-image: url(../../webroot/img/icons/icon-1.png)"></div>
        <div class="icon-layer-two" style="background-image: url(../../webroot/img/icons/icon-2.png)"></div>
        <div class="icon-layer-three" style="background-image: url(../../webroot/img/icons/icon-3.png)"></div>
        <div class="pattern-layer" style="background-image: url(../../webroot/img/background/pattern-4.png)"></div>
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
                                <img src="img/resource/author-1.jpg" alt="" />
                            </div>
                            <div class="text">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <br> ullamco.”</div>
                            <div class="designation">Meredith Grant <span>- Host Mother</span></div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="author-image">
                                <img src="img/resource/author-1.jpg" alt="" />
                            </div>
                            <div class="text">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <br> ullamco.”</div>
                            <div class="designation">Meredith Grant <span>- Host Mother</span></div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="author-image">
                                <img src="img/resource/author-1.jpg" alt="" />
                            </div>
                            <div class="text">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <br> ullamco.”</div>
                            <div class="designation">Meredith Grant <span>- Host Mother</span></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="outer-container">
            <div class="gallery-carousel owl-carousel owl-theme">

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="img/gallery/1.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="img/gallery/1.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
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
                            <img src="img/gallery/2.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="img/gallery/2.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
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
                            <img src="img/gallery/3.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="img/gallery/3.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
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
                            <img src="img/gallery/4.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="img/gallery/4.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
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
                            <img src="img/gallery/5.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="img/gallery/5.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
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
                            <img src="img/gallery/1.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="img/gallery/1.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
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
                            <img src="img/gallery/2.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="img/gallery/2.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
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
                            <img src="img/gallery/3.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="img/gallery/3.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
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
                            <img src="img/gallery/4.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="img/gallery/4.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
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
                            <img src="img/gallery/5.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="img/gallery/5.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
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
        <div class="pattern-layer-one" style="background-image: url(../../webroot/img/resource/footer-pattern-1.png)"></div>
        <div class="pattern-layer-two" style="background-image: url(../../webroot/img/resource/footer-pattern-2.png)"></div>
        <div class="pattern-layer-three" style="background-image: url(../../webroot/img/background/pattern-6.png)"></div>
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
                                    <div class="text">6Fifth Avenue 5501, Broadway, New York Morris Street London 1234</div>
                                    <ul class="contact-list">
                                        <li><span class="icon fa fa-send"></span>Your mail @ gmail.com</li>
                                        <li><span class="icon fa fa-phone"></span><a href="">(123) 4567 89000</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h6>Useful Links</h6>
                                    <ul class="footer-list">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Blogs</a></li>
                                        <li><a href="#">Terms Of Service</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
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
                                        <li><a href="#"><span class="icon fa fa-facebook"></span>facebook</a></li>
                                        <li><a href="#"><span class="icon fa fa-twitter"></span>twitter</a></li>
                                        <li><a href="#"><span class="icon fa fa-instagram"></span>instagram</a></li>
                                        <li><a href="#"><span class="icon fa fa-dribbble"></span>dribbble</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget newsletter-widget">
                                    <h6>Subscribe</h6>
                                    <div class="newsletter-form">
                                        <form method="post" action="contact.html">
                                            <div class="form-group">
                                                <input type="email" name="email" value="" placeholder="Your Email" required="">
                                                <button type="submit" class="theme-btn submit-btn">Subscribe Now</button>
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
                <div class="copyright">&copy; 2021 foodily All Rights By <a href="http://www.bootstrapmb.com/">bootstrapmb</a>.</div>
            </div>
        </div>
    </footer>

</div>
<!--End pagewrapper-->

<!-- Search Popup -->
<div class="search-popup">
    <button class="close-search style-two"><span class="flaticon-multiply"></span></button>
    <button class="close-search"><span class="flaticon-up-arrow-1"></span></button>
    <form method="post" action="blog.html">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
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
<?= $this->Html->script('/js/isotope.js') ?>
</body>
</html>
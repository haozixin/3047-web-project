<?php

$this->disableAutoLayout();
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
    <link href="https://fonts.googleapis.com/css2?family=Niconne&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
    <?= $this->Html->css('../img/favicon.png') ?>



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

    <!-- Main Header / Header Style Three -->
    <header class="main-header header-style-three">

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container clearfix">

                <div class="pull-left logo-box">
                    <div class="logo"><a href="index.html"><img src="../webroot/img/logo-2.png" alt="" title=""></a></div>
                </div>

                <div class="pull-right">

                    <!-- Search Box -->
                    <div class="search-box">
<!--                        <form method="post" action="contact.html">-->
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="Search" required>
                                <button type="submit"><span class="icon flaticon-search"></span></button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
        <!--End Header Upper-->

        <!-- Header Upper -->
        <div class="header-lower">
            <div class="auto-container clearfix">
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
                                <li class="current dropdown"><a href="#">Home</a>
                                    <ul>
                                       <li><a href="#">Homepage</a></li>
<!--                                        <li><a href="index-2.html">Homepage Two</a></li>-->
<!--                                        <li><a href="index-3.html">Homepage Three</a></li>-->

                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="index.html">Header Style One</a></li>
<!--                                                <li><a href="index-2.html">Header Style Two</a></li>-->
<!--                                                <li><a href="index-3.html">Header Style Three</a></li>-->
<!--                                                <li><a href="index-3.html">Header Style Four</a></li>-->
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">About</a>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
<!--                                        <li><a href="team.html">Team</a></li>-->
<!--                                        <li><a href="restaurant.html">Restaurant</a></li>-->
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Product</a>
<!--                                    <ul>-->
                                        <ul>
                                            <li><a href="<?= $this->Url->build(['controller'=>'Products','action'=>'display']) ?>">display products</a></li>

                                        </ul>
<!--                                        <li><a href="menu.html">Menu</a></li>-->
<!--                                        <li><a href="milkshake.html">Milk Shake</a></li>-->
<!--                                        <li><a href="frappe.html">Frappe</a></li>-->
<!--                                        <li><a href="boba-tea.html">Boba Tea</a></li>-->
<!--                                        <li><a href="slushy.html">Slushy</a></li>-->
<!--                                    </ul>-->
                                </li>
                                <li class="dropdown"><a href="#">Gallery</a>
                                    <ul>
                                        <li><a href="#">Gallery</a></li>
<!--                                        <li><a href="gallery-2.html">Gallery 02</a></li>-->
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="#">Blog Classic</a></li>
<!--                                        <li><a href="news-detail.html">Blog Single</a></li>-->
<!--                                        <li><a href="news-detail-2.html">Blog Single 02</a></li>-->
<!--                                        <li><a href="not-found.html">Not Found</a></li>-->
                                    </ul>
                                </li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </nav>

                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">
                        <!-- Social Box -->
                        <ul class="social-box">
                            <li><a href="#" class="fa fa-facebook-f"></a></li>
                            <li><a href="#" class="fa fa-dribbble"></a></li>
                            <li><a href="#" class="fa fa-pinterest-p"></a></li>
                            <li><a href="#" class="fa fa-google"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Header Lower -->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" title=""><img src="../webroot/img/logo-small.png" alt="" title=""></a>
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
                <div class="nav-logo"><a href="index.html"><img src="../webroot/img/logo-2.png" alt="" title=""></a></div>
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
                                <a href="index.html"><img src="../webroot/img/logo.png" alt="" /></a>
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

    <!-- Banner Section -->
    <section class="banner-section-three">
        <div class="main-slider-carousel owl-carousel owl-theme">
            <!-- Slide -->
            <div class="slide" style="background-image: url('http://localhost/team104-app_fit3047/webroot/img/background/1.png')">
                <div class="auto-container">
                    <!-- Content Column -->
                    <div class="content-box">
                        <div class="box-inner">
                            <div class="category">active demand </div>
                            <h3><a href="#">Double satisfaction of taste and nutrition!!</a></h3>
                            <ul class="post-info">
                                <li>OCT 7, 2021</li>
                                <li>2 Comments</li>
                                <li><a href="#">Share</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="slide" style="background-image: url('http://localhost/team104-app_fit3047/webroot/img/main-slider/b2.jpg')">
                <div class="auto-container">
                    <!-- Content Column -->
                    <div class="content-box">
                        <div class="box-inner">
                            <div class="category">active demand </div>
                            <h3><a href="#">Honey for adults and children alike!!</a></h3>
                            <ul class="post-info">
                                <li>OCT 7, 2021</li>
                                <li>2 Comments</li>
                                <li><a href="#">Share</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="slide" style="background-image: url('http://localhost/team104-app_fit3047/webroot/img/main-slider/b3.jpg')">
                <div class="auto-container">
                    <!-- Content Column -->
                    <div class="content-box">
                        <div class="box-inner">
                            <div class="category">active demand</div>
                            <h3><a href="#">Healthy life, yummy life</a></h3>
                            <ul class="post-info">
                                <li>OCT 7, 2021</li>
                                <li>2 Comments</li>
                                <li><a href="#">Share</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Banner Section -->

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Title Column -->
                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="send-icon fa fa-send"></div>
                            <h4>Join Our Newsletter</h4>
                            <div class="title">We'll keep you posted and updates!</div>
                        </div>
                    </div>

                    <!-- Newsletter Column -->
                    <div class="newsletter-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Newsletter Form Two -->
                            <div class="newsletter-form-two">
<!--                                <form method="post" action="contact.html#">-->
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Enter Your E-mail ..." required>
                                        <button type="submit" class="theme-btn btn-style-one clearfix"><span class="icon"></span>Buy Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Newsletter Section -->

    <!-- Recipe Section -->
    <section class="recipe-section-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">News & quick seller</div>
                <h2>popular products</h2>
                <div class="separate"></div>
            </div>
            <div class="row clearfix">

                <!-- Recipe Block Two -->
                <div class="recipe-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="../webroot/img/resource/brecipe-5.jpg" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="../webroot/img/resource/brecipe-5.jpg" data-fancybox="news" data-caption="" class="icon flaticon-gallery"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="category">active demand</div>
                            <h6><a href="#">Manuka Honey 40+</a></h6>
                            <ul class="post-info">
                                <li>May 21, 2021</li>
                                <li>2 Comments</li>
                                <li><a href="#">Share</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipe Block Two -->
                <div class="recipe-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="../webroot/img/resource/brecipe-6.jpg" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="../webroot/img/resource/brecipe-6.jpg" data-fancybox="news" data-caption="" class="icon flaticon-gallery"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="category">active demand</div>
                            <h6><a href="#">Manuka Honey 160+</a></h6>
                            <ul class="post-info">
                                <li>May 21, 2021</li>
                                <li>2 Comments</li>
                                <li><a href="#">Share</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipe Block Two -->
                <div class="recipe-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="../webroot/img/resource/brecipe-7.jpg" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="../webroot/img/resource/brecipe-7.jpg" data-fancybox="news" data-caption="" class="icon flaticon-gallery"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="category">active demand</div>
                            <h6><a href="#">Organic Original Honey</a></h6>
                            <ul class="post-info">
                                <li>May 21, 2021</li>
                                <li>2 Comments</li>
                                <li><a href="#">Share</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Recipe Section Two -->

    <!-- Fluid Section Two -->
    <section class="fluid-section-two">
        <div class="section-text">Honey's book</div>
        <div class="outer-container clearfix">

            <!-- Content Column -->
            <div class="content-column">
                <div class="inner-column">
                    <!-- Title Box -->
                    <div class="title-box">
                        <h2>Honey classification books!</h2>
                        <div class="text">Read these books about honey! <br> Know what your customers want!</div>
                    </div>
                    <ul class="book-list">
                        <li><img src="../webroot/img/resource/book-list-1.png" alt="" /></li>
                        <li><img src="../webroot/img/resource/book-list-2.png" alt="" /></li>
                        <li><img src="../webroot/img/resource/book-list-3.png" alt="" /></li>
                    </ul>
                    <!-- Button Box -->
                    <div class="button-box">
                        <a href="#" class="theme-btn btn-style-two clearfix"><span class="icon"></span>Reading Now</a>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column" style="background-image:url('http://localhost/team104-app_fit3047/webroot/img/resource/image-2.jpg')">
                <figure class="image-box"><img src="../webroot/img/resource/bimage-2.jpg" alt=""></figure>
            </div>

        </div>
    </section>
    <!-- End Fluid Section Two -->

    <!-- Recipe Section Three -->
    <section class="recipe-section-three">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <!-- Sec Title Two -->
                    <div class="sec-title-two">
                        <div class="title">All post</div>
                        <h4>Featured Products</h4>
                        <div class="separator"></div>
                    </div>

                    <!-- Recipe Block Three -->
                    <div class="recipe-block-three">
                        <div class="inner-box">
                            <div class="image">
                                <img src="../webroot/img/resource/brecipe-7.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="../webroot/img/resource/brecipe-7.jpg" data-fancybox="news" data-caption="" class="icon flaticon-gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <div class="category">active demand</div>
                                <ul class="post-info">
                                    <li>May 21, 2021</li>
                                    <li>2 Comments</li>
                                    <li><a href="#">Share</a></li>
                                </ul>
                                <h6><a href="#">Organic Original Honey</a></h6>
                                <div class="text"> Most of the hives where we source our honeys are usually located at least 10 kilometres away from places where people spray their trees. Our honeys come from the fields, the forests and the mountains.</div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <!-- Sec Title Two -->
                    <div class="sec-title-two">
                        <div class="title">All post</div>
                        <h4>Recent Products</h4>
                        <div class="separator"></div>
                    </div>

                    <!-- Recipe Block Four -->
                    <div class="recipe-block-four">
                        <div class="inner-box">
                            <div class="image">
                                <img src="../webroot/img/resource/brecipe-9.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="../webroot/img/resource/brecipe-9.jpg" data-fancybox="news" data-caption="" class="icon flaticon-gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="category">related product</div>
                                <ul class="post-info">
                                    <li>May 21, 2021</li>
                                    <li>2 Comments</li>
                                    <li><a href="#">Share</a></li>
                                </ul>
                                <h6><a href="#">Cinnamon Infused</a></h6>
                            </div>
                        </div>
                    </div>

                    <!-- Recipe Block Four -->
                    <div class="recipe-block-four">
                        <div class="inner-box">
                            <div class="image">
                                <img src="../webroot/img/resource/brecipe-10.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="../webroot/img/resource/brecipe-10.jpg" data-fancybox="news" data-caption="" class="icon flaticon-gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="category">related product</div>
                                <ul class="post-info">
                                    <li>May 21, 2021</li>
                                    <li>2 Comments</li>
                                    <li><a href="#">Share</a></li>
                                </ul>
                                <h6><a href="#">Rainforest</a></h6>
                            </div>
                        </div>
                    </div>

                    <!-- Recipe Block Four -->
                    <div class="recipe-block-four">
                        <div class="inner-box">
                            <div class="image">
                                <img src="../webroot/img/resource/brecipe-11.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="../webroot/img/resource/brecipe-11.jpg" data-fancybox="news" data-caption="" class="icon flaticon-gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="category">related product</div>
                                <ul class="post-info">
                                    <li>May 21, 2021</li>
                                    <li>2 Comments</li>
                                    <li><a href="#">Share</a></li>
                                </ul>
                                <h6><a href="#">Lemon Infused</a></h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Recipe Section Three -->

    <!-- Instagram Post Section -->
    <section class="instagram-post-section">
        <div class="auto-container">
            <!-- Sec Title Two -->
            <div class="sec-title-two">
                <div class="title">Related products</div>
                <h4>@ instagram</h4>
                <div class="separator"></div>
            </div>
            <div class="instagram-carousel owl-carousel owl-theme">

                <!-- Instagram Block -->
                <div class="instagram-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="../webroot/img/gallery/13.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="../webroot/img/gallery/13.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!-- Instagram Block -->
                <div class="instagram-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="../webroot/img/gallery/14.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="../webroot/img/gallery/14.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!-- Instagram Block -->
                <div class="instagram-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="../webroot/img/gallery/15.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="../webroot/img/gallery/15.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!-- Instagram Block -->
                <div class="instagram-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="../webroot/img/gallery/16.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="../webroot/img/gallery/16.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!-- Instagram Block -->
                <div class="instagram-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="../webroot/img/gallery/17.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="../webroot/img/gallery/17.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!-- Instagram Block -->
                <div class="instagram-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="../webroot/img/gallery/18.jpg" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="../webroot/img/gallery/18.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Instagram Post Section -->

    <!-- News Section Two -->
    <section class="news-section-two">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Left Column -->
                <div class="left-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-column">

                        <!-- Recipe Block Three / Style Two -->
                        <div class="recipe-block-three style-two">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="../webroot/img/resource/news-4.jpg" alt="" />
                                    <!-- Overlay Box -->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <a href="../webroot/img/resource/news-4.jpg" data-fancybox="news-../webroot/img" data-caption="" class="icon flaticon-gallery"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <div class="category">related product</div>
                                    <h6><a href="#">Manuka Honey 40+</a></h6>
                                    <ul class="post-info">
                                        <li>May 21, 2021</li>
                                        <li>2 Comments</li>
                                        <li><a href="#">Share</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Recipe Block Three / Style Two -->
                        <div class="recipe-block-three style-two">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="../webroot/img/resource/news-5.jpg" alt="" />
                                    <!-- Overlay Box -->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <a href="../webroot/img/resource/news-5.jpg" data-fancybox="news-../webroot/img" data-caption="" class="icon flaticon-gallery"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <div class="category">related product</div>
                                    <h6><a href="#">Manuka Honey 260+</a></h6>
                                    <ul class="post-info">
                                        <li>May 21, 2021</li>
                                        <li>2 Comments</li>
                                        <li><a href="#">Share</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Middle Column -->
                <div class="middle-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Recipe Block Three -->
                        <div class="recipe-block-three">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="../webroot/img/resource/news-8.jpg" alt="" />
                                    <!-- Overlay Box -->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <a href="../webroot/img/resource/news-8.jpg" data-fancybox="news-../webroot/img" data-caption="" class="icon flaticon-gallery"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <div class="category">Most popular</div>
                                    <ul class="post-info">
                                        <li>May 21, 2021</li>
                                        <li>2 Comments</li>
                                        <li><a href="#">Share</a></li>
                                    </ul>
                                    <h6><a href="#">Manuka Honey 160+’ <br> great tasting honey</a></h6>
                                    <div class="text">
                                        Our 160+ is a great tasting honey and a wonderful way to take medicine especially for children. The 160+ is great for soothing sore throats, and assists helping cold and flu symptoms and upset
                                        stomach.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="right-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-column">

                        <!-- Recipe Block Three / Style Two -->
                        <div class="recipe-block-three style-two">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="../webroot/img/resource/news-6.jpg" alt="" />
                                    <!-- Overlay Box -->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <a href="../webroot/img/resource/news-6.jpg" data-fancybox="news-../webroot/img" data-caption="" class="icon flaticon-gallery"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <div class="category">related products</div>
                                    <h6><a href="#">Eucalyptus</a></h6>
                                    <ul class="post-info">
                                        <li>May 21, 2021</li>
                                        <li>2 Comments</li>
                                        <li><a href="#">Share</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Recipe Block Three / Style Two -->
                        <div class="recipe-block-three style-two">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="../webroot/img/resource/news-7.jpg" alt="" />
                                    <!-- Overlay Box -->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <a href="../webroot/img/resource/news-7.jpg" data-fancybox="news-../webroot/img" data-caption="" class="icon flaticon-gallery"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <div class="category">related products</div>
                                    <h6><a href="#">Baby's Honey</a></h6>
                                    <ul class="post-info">
                                        <li>May 21, 2021</li>
                                        <li>2 Comments</li>
                                        <li><a href="#">Share</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End News Section Two -->

    <!-- Video Section -->
    <section class="video-section">
        <div class="image-layer" style="background-image: url('http://localhost/team104-app_fit3047/webroot/img/background/5.jpg')"></div>
        <div class="auto-container">
            <div class="inner-container">
                <!-- Video Box -->
                <div class="video-box">
                    <figure class="video-image">
                        <img src="../webroot/img/resource/video-image.jpg" alt="">
                    </figure>
                    <a href="https://www.youtube.com/watch?v=ws8R44DzrS8" class="lightbox-image overlay-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
                </div>
                <div class="lower-content">
                    <h6>Make the first deal!</h6>
                    <div class="text">This video shows you how eating honey is good for your body    <br> why honey is so popular!</div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Video Section -->

    <!-- About News Section -->
<!--    <section class="about-news-section">-->
<!--        <div class="auto-container">-->
<!--            <div class="row clearfix">-->

<!--                 News Column-->
<!--                <div class="news-column col-lg-8 col-md-12 col-sm-12">-->
<!--                    <div class="inner-column">-->

<!--                         News Block Two-->
<!--                        <div class="news-block-two">-->
<!--                            <div class="inner-box">-->
<!--                                <div class="image">-->
<!--                                    <img src="../webroot/img/resource/news-9.jpg" alt="" />-->
<!--                                     Overlay Box-->
<!--                                    <div class="overlay-box">-->
<!--                                        <div class="overlay-inner">-->
<!--                                            <div class="content">-->
<!--                                                <a href="../webroot/img/resource/recipe-9.jpg" data-fancybox="news" data-caption="" class="icon flaticon-gallery"></a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="content">-->
<!--                                    <div class="category">smoothie</div>-->
<!--                                    <h6><a href="news-detail.html">Broad bean and goats’ cheese bruschetta</a></h6>-->
<!--                                    <ul class="post-info">-->
<!--                                        <li>May 21, 2021</li>-->
<!--                                        <li>2 Comments</li>-->
<!--                                        <li><a href="news-detail.html">Share</a></li>-->
<!--                                    </ul>-->
<!--                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                         News Block Two-->
<!--                        <div class="news-block-two">-->
<!--                            <div class="inner-box">-->
<!--                                <div class="image">-->
<!--                                    <img src="../webroot/img/resource/news-9.jpg" alt="" />-->
<!--                                     Overlay Box-->
<!--                                    <div class="overlay-box">-->
<!--                                        <div class="overlay-inner">-->
<!--                                            <div class="content">-->
<!--                                                <a href="../webroot/img/resource/recipe-9.jpg" data-fancybox="news" data-caption="" class="icon flaticon-gallery"></a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="content">-->
<!--                                    <div class="category">smoothie</div>-->
<!--                                    <h6><a href="news-detail.html">Broad bean and goats’ cheese bruschetta</a></h6>-->
<!--                                    <ul class="post-info">-->
<!--                                        <li>May 21, 2021</li>-->
<!--                                        <li>2 Comments</li>-->
<!--                                        <li><a href="news-detail.html">Share</a></li>-->
<!--                                    </ul>-->
<!--                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->

<!--                 About Column-->
<!--                <div class="about-column col-lg-4 col-md-6 col-sm-12">-->
<!--                    <div class="inner-column">-->
<!--                        <h6>About us</h6>-->
<!--                        <div class="author-image">-->
<!--                            <img src="../webroot/img/resource/author-2.jpg" alt="" />-->
<!--                        </div>-->
<!--                        <div class="author-name">Hi Marria</div>-->
<!--                        <div class="text">ut sem non aliquet. Nullam tincidunt vestibulum condimentum. </div>-->
<!--                         Social Box-->
<!--                        <ul class="social-box">-->
<!--                            <li class="share">Share</li>-->
<!--                            <li><a href="#" class="fa fa-facebook-f"></a></li>-->
<!--                            <li><a href="#" class="fa fa-dribbble"></a></li>-->
<!--                            <li><a href="#" class="fa fa-pinterest-p"></a></li>-->
<!--                            <li><a href="#" class="fa fa-google"></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--     End About News Section-->

<!--     Popular Recipe Section-->
<!--    <section class="popular-recipe-section">-->
<!--        <div class="auto-container">-->
<!--             Sec Title Two-->
<!--            <div class="sec-title-two">-->
<!--                <div class="title">All post</div>-->
<!--                <h4>The most popular recipes </h4>-->
<!--                <div class="separator"></div>-->
<!--            </div>-->
<!--            <div class="posts-carousel owl-carousel owl-theme">-->

<!--                 Recipe Block Five-->
<!--                <div class="recipe-block-five">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image">-->
<!--                            <a href="slushy.html"><img src="../webroot/img/resource/recipe-12.jpg" alt="" /></a>-->
<!--                        </div>-->
<!--                        <div class="lower-content">-->
<!--                            <h6><a href="slushy.html">Broad bean and goats’ cheese bruschetta</a></h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                 Recipe Block Five-->
<!--                <div class="recipe-block-five">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image">-->
<!--                            <a href="slushy.html"><img src="../webroot/img/resource/recipe-13.jpg" alt="" /></a>-->
<!--                        </div>-->
<!--                        <div class="lower-content">-->
<!--                            <h6><a href="slushy.html">Broad bean and goats’ cheese bruschetta</a></h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                 Recipe Block Five-->
<!--                <div class="recipe-block-five">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image">-->
<!--                            <a href="slushy.html"><img src="../webroot/img/resource/recipe-14.jpg" alt="" /></a>-->
<!--                        </div>-->
<!--                        <div class="lower-content">-->
<!--                            <h6><a href="slushy.html">Broad bean and goats’ cheese bruschetta</a></h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                 Recipe Block Five-->
<!--                <div class="recipe-block-five">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image">-->
<!--                            <a href="slushy.html"><img src="../webroot/img/resource/recipe-15.jpg" alt="" /></a>-->
<!--                        </div>-->
<!--                        <div class="lower-content">-->
<!--                            <h6><a href="slushy.html">Broad bean and goats’ cheese bruschetta</a></h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                 Recipe Block Five-->
<!--                <div class="recipe-block-five">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image">-->
<!--                            <a href="slushy.html"><img src="../webroot/img/resource/recipe-16.jpg" alt="" /></a>-->
<!--                        </div>-->
<!--                        <div class="lower-content">-->
<!--                            <h6><a href="slushy.html">Broad bean and goats’ cheese bruschetta</a></h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                 Recipe Block Five-->
<!--                <div class="recipe-block-five">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image">-->
<!--                            <a href="slushy.html"><img src="../webroot/img/resource/recipe-17.jpg" alt="" /></a>-->
<!--                        </div>-->
<!--                        <div class="lower-content">-->
<!--                            <h6><a href="slushy.html">Broad bean and goats’ cheese bruschetta</a></h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                 Recipe Block Five-->
<!--                <div class="recipe-block-five">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image">-->
<!--                            <a href="slushy.html"><img src="../webroot/img/resource/recipe-12.jpg" alt="" /></a>-->
<!--                        </div>-->
<!--                        <div class="lower-content">-->
<!--                            <h6><a href="slushy.html">Broad bean and goats’ cheese bruschetta</a></h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                 Recipe Block Five-->
<!--                <div class="recipe-block-five">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image">-->
<!--                            <a href="slushy.html"><img src="../webroot/img/resource/recipe-13.jpg" alt="" /></a>-->
<!--                        </div>-->
<!--                        <div class="lower-content">-->
<!--                            <h6><a href="slushy.html">Broad bean and goats’ cheese bruschetta</a></h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                 Recipe Block Five-->
<!--                <div class="recipe-block-five">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image">-->
<!--                            <a href="slushy.html"><img src="../webroot/img/resource/recipe-14.jpg" alt="" /></a>-->
<!--                        </div>-->
<!--                        <div class="lower-content">-->
<!--                            <h6><a href="slushy.html">Broad bean and goats’ cheese bruschetta</a></h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                 Recipe Block Five-->
<!--                <div class="recipe-block-five">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image">-->
<!--                            <a href="slushy.html"><img src="../webroot/img/resource/recipe-15.jpg" alt="" /></a>-->
<!--                        </div>-->
<!--                        <div class="lower-content">-->
<!--                            <h6><a href="slushy.html">Broad bean and goats’ cheese bruschetta</a></h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                 Recipe Block Five-->
<!--                <div class="recipe-block-five">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image">-->
<!--                            <a href="slushy.html"><img src="../webroot/img/resource/recipe-16.jpg" alt="" /></a>-->
<!--                        </div>-->
<!--                        <div class="lower-content">-->
<!--                            <h6><a href="slushy.html">Broad bean and goats’ cheese bruschetta</a></h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                 Recipe Block Five-->
<!--                <div class="recipe-block-five">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image">-->
<!--                            <a href="slushy.html"><img src="../webroot/img/resource/recipe-17.jpg" alt="" /></a>-->
<!--                        </div>-->
<!--                        <div class="lower-content">-->
<!--                            <h6><a href="slushy.html">Broad bean and goats’ cheese bruschetta</a></h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--     End Popular Recipe Section-->

<!--     News Section Three-->
<!--    <section class="news-section-three">-->
<!--        <div class="auto-container">-->
<!--            <div class="row clearfix">-->

<!--                 Recipe Block Three-->
<!--                <div class="recipe-block-three col-lg-4 col-md-6 col-sm-12">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image">-->
<!--                            <img src="../webroot/img/resource/news-10.jpg" alt="" />-->
<!--                             Overlay Box-->
<!--                            <div class="overlay-box">-->
<!--                                <div class="overlay-inner">-->
<!--                                    <div class="content">-->
<!--                                        <a href="../webroot/img/resource/news-10.jpg" data-fancybox="news-section" data-caption="" class="icon flaticon-gallery"></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="lower-content">-->
<!--                            <div class="category">smoothie</div>-->
<!--                            <ul class="post-info">-->
<!--                                <li>May 21, 2021</li>-->
<!--                                <li>2 Comments</li>-->
<!--                                <li><a href="news-detail.html">Share</a></li>-->
<!--                            </ul>-->
<!--                            <h6><a href="news-detail.html">Broad bean and goats’ cheese bruschetta</a></h6>-->
<!--                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                 Recipe Block Three-->
<!--                <div class="recipe-block-three col-lg-4 col-md-6 col-sm-12">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image">-->
<!--                            <img src="../webroot/img/resource/news-11.jpg" alt="" />-->
<!--                             Overlay Box-->
<!--                            <div class="overlay-box">-->
<!--                                <div class="overlay-inner">-->
<!--                                    <div class="content">-->
<!--                                        <a href="../webroot/img/resource/news-11.jpg" data-fancybox="news-section" data-caption="" class="icon flaticon-gallery"></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="lower-content">-->
<!--                            <div class="category">smoothie</div>-->
<!--                            <ul class="post-info">-->
<!--                                <li>May 21, 2021</li>-->
<!--                                <li>2 Comments</li>-->
<!--                                <li><a href="news-detail.html">Share</a></li>-->
<!--                            </ul>-->
<!--                            <h6><a href="news-detail.html">Broad bean and goats’ cheese bruschetta</a></h6>-->
<!--                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                 Recipe Block Three-->
<!--                <div class="recipe-block-three col-lg-4 col-md-6 col-sm-12">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image">-->
<!--                            <img src="../webroot/img/resource/news-12.jpg" alt="" />-->
<!--                             Overlay Box-->
<!--                            <div class="overlay-box">-->
<!--                                <div class="overlay-inner">-->
<!--                                    <div class="content">-->
<!--                                        <a href="../webroot/img/resource/news-12.jpg" data-fancybox="news-section" data-caption="" class="icon flaticon-gallery"></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="lower-content">-->
<!--                            <div class="category">smoothie</div>-->
<!--                            <ul class="post-info">-->
<!--                                <li>May 21, 2021</li>-->
<!--                                <li>2 Comments</li>-->
<!--                                <li><a href="news-detail.html">Share</a></li>-->
<!--                            </ul>-->
<!--                            <h6><a href="news-detail.html">Broad bean and goats’ cheese bruschetta</a></h6>-->
<!--                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                 Recipe Block Three -->
<!--                <div class="recipe-block-three col-lg-4 col-md-6 col-sm-12">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image">-->
<!--                            <img src="../webroot/img/resource/news-13.jpg" alt="" />-->
<!--                             Overlay Box -->
<!--                            <div class="overlay-box">-->
<!--                                <div class="overlay-inner">-->
<!--                                    <div class="content">-->
<!--                                        <a href="../webroot/img/resource/news-13.jpg" data-fancybox="news-section" data-caption="" class="icon flaticon-gallery"></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="lower-content">-->
<!--                            <div class="category">smoothie</div>-->
<!--                            <ul class="post-info">-->
<!--                                <li>May 21, 2021</li>-->
<!--                                <li>2 Comments</li>-->
<!--                                <li><a href="news-detail.html">Share</a></li>-->
<!--                            </ul>-->
<!--                            <h6><a href="news-detail.html">Broad bean and goats’ cheese bruschetta</a></h6>-->
<!--                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                 Recipe Block Three -->
<!--                <div class="recipe-block-three col-lg-4 col-md-6 col-sm-12">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image">-->
<!--                            <img src="../webroot/img/resource/news-14.jpg" alt="" />-->
<!--                             Overlay Box -->
<!--                            <div class="overlay-box">-->
<!--                                <div class="overlay-inner">-->
<!--                                    <div class="content">-->
<!--                                        <a href="../webroot/img/resource/news-14.jpg" data-fancybox="news-section" data-caption="" class="icon flaticon-gallery"></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="lower-content">-->
<!--                            <div class="category">smoothie</div>-->
<!--                            <ul class="post-info">-->
<!--                                <li>May 21, 2021</li>-->
<!--                                <li>2 Comments</li>-->
<!--                                <li><a href="news-detail.html">Share</a></li>-->
<!--                            </ul>-->
<!--                            <h6><a href="news-detail.html">Broad bean and goats’ cheese bruschetta</a></h6>-->
<!--                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                 Recipe Block Three -->
<!--                <div class="recipe-block-three col-lg-4 col-md-6 col-sm-12">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image">-->
<!--                            <img src="../webroot/img/resource/news-15.jpg" alt="" />-->
<!--                             Overlay Box -->
<!--                            <div class="overlay-box">-->
<!--                                <div class="overlay-inner">-->
<!--                                    <div class="content">-->
<!--                                        <a href="../webroot/img/resource/news-15.jpg" data-fancybox="news-section" data-caption="" class="icon flaticon-gallery"></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="lower-content">-->
<!--                            <div class="category">smoothie</div>-->
<!--                            <ul class="post-info">-->
<!--                                <li>May 21, 2021</li>-->
<!--                                <li>2 Comments</li>-->
<!--                                <li><a href="news-detail.html">Share</a></li>-->
<!--                            </ul>-->
<!--                            <h6><a href="news-detail.html">Broad bean and goats’ cheese bruschetta</a></h6>-->
<!--                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    <!-- End News Section Three -->

    <!-- Footer Style Three -->
    <footer class="footer-style-three">
        <div class="auto-container">
            <!-- Widgets Section -->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!--Footer Column-->
                    <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget social-widget">
                            <h6>Follow Us Now</h6>
                            <ul class="social-list">
                                <li><a href="#"><span class="icon fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="icon fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="icon fa fa-instagram"></span></a></li>
                                <li><a href="#"><span class="icon fa fa-dribbble"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget logo-widget">
                            <div class="logo">
                                <a href="index.html"><img src="../webroot/img/logo.png" alt="" /></a>
                            </div>
                            <div class="copyright">&copy; 2021 <a href="index.html">foodily</a> All Rights By <a href="http://www.bootstrapmb.com/">bootstrapmb</a>.</div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget visit-widget">
                            <h6>Visit</h6>
                            <div class="text">6Fifth Avenue 5501, Broadway, <br> New York Morris Street <br> London 1234</div>
                        </div>
                    </div>

                </div>
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



</body>
</html>

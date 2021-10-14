<?php

$this->layout = 'agent_default';

$agentId = $this->getRequest()->getSession()->read('id')

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
    <?= $this->Html->script('/vendor/jquery/jquery.min.js') ?>

</head>


<body class="hidden-bar-wrapper">

<div class="page-wrapper">


    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">


                    <!-- Fluid Section Two -->
                    <section class="fluid-section-two">
                        <div class="section-text">Honey's book</div>
                        <div class="outer-container clearfix">

                            <!-- Content Column -->
                            <div class="content-column">
                                <div class="inner-column">
                                    <!-- Title Box --><div class="title-box">
                                        <h2>Honey's Agents'!</h2>
                                        <div class="text">Please use this as the best way to buy honey!!</div>
                                    </div>
                                    <ul class="book-list">
                                        <li><img src="../webroot/img/resource/book-list-1.png" alt=""/></li>
                                        <li><img src="../webroot/img/resource/book-list-2.png" alt=""/></li>
                                        <li><img src="../webroot/img/resource/book-list-3.png" alt=""/></li>
                                    </ul>


                                </div>


                                <!-- Image Column -->
                                <div class="image-column"
                                     style="background-image:url('http://localhost/team104-app_fit3047/webroot/img/resource/image-2.jpg')">
                                    <figure class="image-box"><img src="../webroot/img/resource/bimage-2.jpg" alt="">
                                    </figure>
                                </div>

                            </div>
                    </section>
                    <!-- End Fluid Section Two -->
                    <section class="video-section">
                        <h2>Welcome to the Agent's HomePage!!</h2>
                        <div class="text">Navigate around and see what could you do!</div>
<!--                        <div class="image-layer" style="background-image: url('http://localhost/team104-app_fit3047/webroot/img/background/5.jpg')"></div>-->
                        <div class="auto-container">

                                <!-- Video Box -->
                                <div>
                                    <button  >
                                        <a href=" https://www.youtube.com/watch?v=ws8R44DzrS8 "class="lightbox-image overlay-box"> Advantage of Honey </a>
                                    </button>

<!--                                    <a href="https://www.youtube.com/watch?v=ws8R44DzrS8" class="lightbox-image overlay-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>-->
                                </div>

                                <div class="lower-content">
                                    <h6>Make the first deal!</h6>
                                    <div class="text">This video shows you how eating honey is good for your body    <br> why honey is so popular!</div>
                                </div>
                            </div>
                        </div>
                    </section>


</html>

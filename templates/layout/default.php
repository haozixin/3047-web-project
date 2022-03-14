<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */


$cakeDescription = 'Claudia Chavez';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="">
    <?= $this->Html->css('style.css') ?>

    <!-- Favicon -->
    <link href="webroot/img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="webroot/lib/animate/animate.min.css" rel="stylesheet">
    <link href="webroot/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="webroot/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="webroot/css/style.css" rel="stylesheet">

    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <?= $this->fetch('img') ?>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="51">

<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-light navbar-light">
    <div class="container-fluid">
        <img src="webroot/img/logo1.png" alt="Logo Image">
        <a href="/" class="navbar-brand">Claudia Chavez</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="About" class="nav-item nav-link">About</a>
                <a href="Service" class="nav-item nav-link">Services</a>
                <a href="SuccessStories" class="nav-item nav-link">Success Stories</a>
                <a href="Blog" class="nav-item nav-link">Blog</a>
                <a href="BookPurchase" class="nav-item nav-link">Book</a>
                <a href="Contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </div>
</div>
<!-- Nav Bar End -->

<main class="main">
    <div>
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
</main>

<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer-content">
                    <div class="footer-head">
                        <div class="footer-logo">
                            <h2 style="padding-top: 2%"><span>Claudia Chavez</span></h2>
                            <ul style="padding-top: 5%; list-style-type: none">
                                <li>
                                    <a href="/About">About</a>
                                </li>
                                <li>
                                    <a href="/Service">Services</a>
                                </li>
                                <li>
                                    <a href="/Book">Book</a>
                                </li>
                                <li>
                                    <a href="/Contact">Contact</a>
                                </li>
                                <li>
                                    <a href="/Users/Login">Admin login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end single footer -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer-content" style="padding-top: 5%">
                    <div class="footer-head">
                        <div class="footer-contacts">
                            <p><span><i class="fa fa-mobile" style="color:#EF233C"></i></span> +61 410145111</p>
                            <p><span><i class="fa fa-envelope" style="color:#EF233C"></i></span> claudia@presens.com.au
                            </p>
                            <p><span><i class="fa fa-map-marker" style="color:#EF233C"></i></span> Level 4, 57 Rundle
                                Mall
                                Adelaide SA 5000</p>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end single footer -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer-content" style="padding-top: 2%; padding-left: 15%">
                    <div class="footer-head">
                        <div class="footer-icons" style="padding-left: 5%">
                            <ul>
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/claudia.chavez.9678/"><i
                                            class="fab fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.linkedin.com/in/claudia-chavez-2a157036/"><i
                                            class="fab fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a target="_blank"
                                       href="https://www.youtube.com/channel/UCAyRlKXhFd3a75rzpbRveiQ/videos"><i
                                            class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-contacts">
                            <p style="font-size:100%;%">Copyright © 2021 Claudia Chavez</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Footer End -->


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="webroot/lib/easing/easing.min.js"></script>
<script src="webroot/lib/wow/wow.min.js"></script>
<script src="webroot/lib/waypoints/waypoints.min.js"></script>
<script src="webroot/lib/typed/typed.min.js"></script>
<script src="webroot/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="webroot/lib/isotope/isotope.pkgd.min.js"></script>
<script src="webroot/lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

<!--     Contact Form JavaScript File-->
<!-- Contact Form JavaScript File -->
<script src="webroot/contactform/contactform.js"></script>


</body>
</html>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NewsletterSubscription[]|\Cake\Collection\CollectionInterface $newsletterSubscriptions
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);
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
    <link
        href="https://fonts.googleapis.com/css2?family=Niconne&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Tangerine:wght@400;700&display=swap"
        rel="stylesheet">
    <?= $this->Html->css('../img/favicon.png') ?>
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header header-style-one">

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container clearfix">


                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href='#'>Back to HomePage</a>
                                    <ul>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller' => 'Agents', 'action' => 'homepage']) ?>">Exit</a>
                                        </li>
                                        <li class="dropdown"><a href="">Agent HomePage</a>
                                            <ul>
                                                <li>
                                                    <a href="<?= $this->Url->build(['controller' => 'Agents', 'action' => 'homepage']) ?>">HomePage</a>
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                            </li>

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


    </header>
    <!-- End Main Header -->


    <!-- Fluid Section One -->
    <section class="fluid-section-one">
        <div class="outer-container clearfix">

            <!-- Content Column -->
            <div class="content-column">
                <div class="icon-box" style="background-image:url(webroot/img/icons/icon-4.png)"></div>
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <h2>Thank You for <br> Placing an Order!</h2>
                        <div class="separate"></div>
                        <h3>The order that you had placed will be processed as soon as possible! Please check you email
                            and wait for the confirmation email!</h3>
                    </div>
                    <!-- Button Box -->
                    <div class="button-box">
                        <a href="<?= $this->Url->build(['controller' => 'products', 'action' => 'displayagent']) ?>"
                           class="theme-btn btn-style-two clearfix"><span class="icon"></span>Place Another Order</a>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column" style="background-image:url(webroot/img/resource/image-1.jpg)">
                <figure class="image-box"><img src="webroot/img/resource/image-1.jpg" alt=""></figure>


            </div>
        </div>

</div>
</div>
<div class="footer-bottom">
    <div class="copyright">&copy; All Rights By 2021 heart'y Healthy Honey</div>
</div>
</div>
</footer>

</div>
<!--End pagewrapper-->


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

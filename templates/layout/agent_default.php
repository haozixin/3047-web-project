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

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header header-style-one" style="background-color:BurlyWood">

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
                                <li class="current dropdown"><a href="#">Home</a>
                                    <ul>

                                        <li class="dropdown"><a href="">Agent HomePage</a>
                                            <ul>
                                                <li>
                                                    <a href="<?= $this->Url->build(['controller' => 'Agents', 'action' => 'homepage']) ?>">HomePage</a>
                                                </li>
                                                <li><a href="" onClick="a()">go somewhere</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">About</a>
                                    <ul>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'about']) ?>">About
                                                Us</a></li>
                                        <li><a href="#" onClick="a()">Team</a></li>
                                        <li><a href="#" onClick="a()">Our Honey Stores</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Products</a>
                                    <ul>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'displayagent']) ?>">display
                                                products</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Recipes</a>
                                    <ul>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller' => 'Recipes', 'action' => 'displayagent']) ?>">Let's
                                                see Recipes</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Find US</a>
                                    <ul>
                                        <li><a href="#" onClick="a()">Contact Us</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a> Logout</a>
                                    <ul>
                                        <li>
                                            <?= $this->Html->link("Logout", ['Controller' => 'Admins', 'action' => 'logout']) ?>
                                        </li>

                                    </ul>
                                </li>

                                <script>
                                    function a() {
                                        confirm("Coming Soon!");
                                    }
                                </script>
                                <!-- Dropdown - User Information -->

                        </div>

                    </nav>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                         aria-labelledby="userDropdown">

                        <!--                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">-->
                        <!--                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>-->
                        <!--                            </a>-->
                        <ul>
                            <li><?= $this->Html->link("Logout", ['Controller' => 'Admins', 'action' => 'logout']) ?></li>
                            <li><?= $this->Html->link("Password Management", ['Controller' => 'User', 'action' => 'index']) ?></li>
                        </ul>
                    </div>
                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">
                    </div>
                </div>

            </div>
        </div>
        <!--End Header Upper-->


    </header>
    <!-- End Main Header -->


    <section class="juice-section">
        <div class="auto-container clearfix">
            <?= $this->fetch('content') ?>
        </div>
    </section>

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="pattern-layer-one" style="background-image: url(webroot/img/resource/footer-pattern-1.png)"></div>
        <div class="pattern-layer-two" style="background-image: url(webroot/img/resource/footer-pattern-2.png)"></div>
        <div class="pattern-layer-three" style="background-image: url(webroot/img/background/pattern-6.png)"></div>
        <div class="auto-container clearfix">
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
                                        <li><a href="#" onClick="a()">Home</a></li>
                                        <li><a href="#" onClick="a()">About us</a></li>
                                        <li><a href="#" onClick="a()" Blogs</a></li>
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


                        </div>
                    </div>

                </div>
            </div>
            <div class="footer-bottom">
                <div class="copyright">&copy; 2021 foodily All Rights By <a href="http://www.bootstrapmb.com/">bootstrapmb</a>.
                </div>
            </div>
        </div>
    </footer>

</div>
<!--End pagewrapper-->

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

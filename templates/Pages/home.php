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
<html lang="en">

<head>

    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?= $this->Html->meta('icon') ?>


    <title><?= $this->Html->meta('icon') ?></title>

    <!-- Custom fonts for this template-->
    <?= $this->Html->css('/vendor/fontawesome-free/css/all.min.css') ?>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <?= $this->Html->css('sb-admin-2.min.css') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->Html->script('/vendor/jquery/jquery.min.js') ?>

</head>

<body id="page-top">



<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= $this->Url->build('/') ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-blender fa-rotate-80"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Pauls Healthy Honey <sup>co</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Home Page -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= $this->Url->build('/')?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span> Home Page</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            About Pauls Honey
        </div>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
               aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-file"></i>
                <span>Recipes</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Functions:</h6>
                    <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Recipes','action'=>'display']) ?>">Display Recipes</a>
                </div>
            </div>
        </li>



        <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseproducts"
                       aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-beer"></i>
                        <span>Products</span>
                    </a>
                    <div id="collapseproducts" class="collapse" aria-labelledby="headingproducts"
                         data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Functions:</h6>
                            <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Products','action'=>'index']) ?>">List Product</a>


                        </div>
                    </div>
                </li>
        <!-- Divider -->
                <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Account
        </div>

         <!-- Nav Item - Utilities Collapse Menu -->
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsenewsletter"
                               aria-expanded="true" aria-controls="collapseUtilities">
                                <i class="fas fa-fw fa-beer"></i>
                                <span>Newsletter</span>
                            </a>
                            <div id="collapsenewsletter" class="collapse" aria-labelledby="headingnewsletter"
                                 data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Functions:</h6>
                                    <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'NewsletterSubscriptions','action'=>'add']) ?>"> Subscribe Us</a>


                                </div>
                            </div>
                        </li>
                <!-- Divider -->
                        <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Account
                </div>


        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
               aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Login</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Login Screens:</h6>
                    <a class="collapse-item" href="login.html">Login</a>
                    <a class="collapse-item" href="register.html">Register</a>
                    <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                    <a class="collapse-item" href="FAQ.html">FAQ</a>
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Other Pages:</h6>
                    <a class="collapse-item" href="404.html">404 Page</a>
                </div>
            </div>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>



    </ul>
    <!-- End of Sidebar -->




    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" style="background-color:SaddleBrown;">

        <!-- Main Content -->
        <div id="content" style="color:DarkOrange;">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-gradient-warning topbar mb-4 static-top shadow">
            <button <i class="fas fa-newsletter"></i> Subscribe Newsletter </button>
            <button  href="<?= $this->Url->build(['controller'=>'Customers','action'=>'index']) ?>"<i class="fas fa-desktop"></i> Admin Side </button>
            <button  href="<?= $this->Url->build(['controller'=>'Recipes','action'=>'index']) ?>"<i class="fas fa-keyboard"></i> Customer Side </button>
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>

                            <?=$this->Html->image('undraw_profile.svg', ['class' => 'img-profile rounded-circle'])?>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
                 <header class="text-white text-center" style="background-color:SaddleBrown;">
                            <div class="container d-flex align-items-center flex-column">
                                <!-- Masthead Avatar Image-->
                                <img  src="/../img/Paul's Honey Logo.jpeg"  />
                                <!-- Masthead Heading-->
                                <h1 >Welcome to Pauls Honey!</h1>
                                <!-- Icon Divider-->
                                <div class="divider-custom divider-light">
                                    <div class="divider-custom-line"></div>

                                    <div class="divider-custom-line"></div>
                                </div>
                                <!--  Subheading-->
                                <p class="masthead-subheading font-weight-light mb-0">The Best you can get in the world!</p>
                            </div>
                             </div>


                                                            <a href="<?= $this->Url->build(['controller'=>'Recipes','action'=>'display']) ?>" class="btn-icon-split" style="background-color:Gold;" >
                                                                <span class="icon text-white-50">
                                                                    <i class="fas fa-bread-slice"></i>
                                                                </span>
                                                                <span class="text" style="color:black">Browse Recipes</span>
                                                            </a>

                                                            <a href="<?= $this->Url->build(['controller'=>'Products','action'=>'index']) ?>" class=" btn-icon-split" style="background-color:Gold;">
                                                                  <span class="icon text-white-50">
                                                                      <i class="fas fa-beer"></i>
                                                                  </span>
                                                                  <span class="text" style="color:black">Browse Products</span>
                                                                             </a>
                                                                 <div class="my-2"></div>


            </div>
                    <!-- Footer -->
                    <footer class="sticky-footer bg-gradient-warning  text-white text-center" >
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span style="color:AliceBLue;">Pauls Healthy Honey 2021 </span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->
            <!-- /.container-fluid -->


        </div>
        <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>



<!-- Bootstrap core JavaScript-->
<?= $this->Html->script('/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>


<!-- Core plugin JavaScript-->
<?= $this->Html->script('/vendor/jquery-easing/jquery.easing.min.js') ?>


<!-- Custom scripts for all pages-->
<?= $this->Html->script('sb-admin-2.min.js') ?>


<?= $this->fetch('script') ?>



</body>



</html>

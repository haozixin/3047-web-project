<!DOCTYPE html>
<html lang="en">

<head>


    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?= $this->Html->meta('icon') ?>
    <title>Healty Honey | Homepage </title>
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
        <a class="sidebar-brand d-flex align-items-center justify-content-center"
           href="<?= $this->Url->build('/admins/homepage') ?>">
            <img src="../webroot/img/bee_fly.gif" width="50"/>
            <div class="sidebar-brand-text mx-3">Heartys Healthy Honey <sup>co</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Home Page -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= $this->Url->build('/admins/homepage') ?>"/>
            <i class="fas fa-home"></i>
            <span> Home Page</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Functions
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-file"></i>
                <span>Customers</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Customers functions:</h6>
                    <a class="collapse-item"
                       href="<?= $this->Url->build(['controller' => 'Customers', 'action' => 'index']) ?>">List all
                        customers</a>
                    <a class="collapse-item"
                       href="<?= $this->Url->build(['controller' => 'Customers', 'action' => 'add']) ?>">Add new
                        customer</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAgent"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-file"></i>
                <span>Agents</span>
            </a>
            <div id="collapseAgent" class="collapse" aria-labelledby="headingAgent" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Agents functions:</h6>
                    <a class="collapse-item"
                       href="<?= $this->Url->build(['controller' => 'Agents', 'action' => 'index']) ?>">List all
                        agents</a>
                    <a class="collapse-item"
                       href="<?= $this->Url->build(['controller' => 'Agents', 'action' => 'add']) ?>">Add new
                        agent</a>
                </div>
            </div>
        </li>

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
                    <a class="collapse-item"
                       href="<?= $this->Url->build(['controller' => 'Recipes', 'action' => 'add']) ?>">Add Recipes</a>
                    <a class="collapse-item"
                       href="<?= $this->Url->build(['controller' => 'Recipes', 'action' => 'index']) ?>">List
                        Recipes</a>

                </div>
        </li>

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
                    <a class="collapse-item"
                       href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'add']) ?>">Add Product</a>
                    <a class="collapse-item"
                       href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'index']) ?>">List
                        Product</a>


                </div>
            </div>
        </li>



                 <!-- Nav Item - Utilities Collapse Menu -->
                         <li class="nav-item">
                             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseinventory"
                                aria-expanded="true" aria-controls="collapseUtilities">
                                 <i class="	fas fa-box"></i>
                                 <span>Orders</span>
                             </a>
                             <div id="collapseinventory" class="collapse" aria-labelledby="headinginventory"
                                  data-parent="#accordionSidebar">
                                 <div class="bg-white py-2 collapse-inner rounded">
                                     <h6 class="collapse-header">Functions:</h6>

                                     <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'orders','action'=>'index']) ?>">Pending orders</a>
                                     <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'orders','action'=>'confirm']) ?>">Confirming orders</a>



                                 </div>
                             </div>
                         </li>
                 <!-- Divider -->
                         <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Addons
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

                    <a class="collapse-item"
                       href="<?= $this->Url->build(['controller' => 'NewsletterSubscriptions', 'action' => 'index']) ?>">List
                        Subscribed Customers</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Add-on
        </div>


        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
               aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Others</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">

                    <a class="collapse-item"
                       href="<?= $this->Url->build(['controller' => 'Customers', 'action' => 'faq']) ?>">Q&A</a>
                    <div class="collapse-divider"></div>


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
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->

            <nav class="navbar navbar-expand navbar-light bg-gradient-warning topbar mb-4 static-top shadow">

                <div class="my-2"></div>
                <a href="<?= $this->Url->build('/') ?>" class=" btn-icon-split"
                   style="background-color:DarkOrange">
                                                   <span class="icon text-white-50">
                                                       <i class="fas fa-keyboard"></i>
                                                   </span>
                    <span class="text" style="color: black">Switch to Customer</span>
                </a>
                <div class="my-2"></div>

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
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Your Account</span>

                            <?= $this->Html->image('undraw_profile.svg', ['class' => 'img-profile rounded-circle']) ?>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">

<!--                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">-->
<!--                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>-->
<!--                            </a>-->
                            <ul>
                                <li><?= $this->Html->link("Logout",['Controller'=>'Admins','action'=>'logout']) ?></li>
                                <li><?= $this->Html->link("Password Management",['Controller'=>'User','action'=>'index']) ?></li>
                            </ul>
                        </div>


                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Heartys Healthy Honey 2021 </span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

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


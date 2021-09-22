<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);
$this-> layout="customer_default";

?>

<!DOCTYPE html>
<html xml:lang="en">
<head>

</head>
<body>
<!-- Responsive navbar-->
<div class="admins index content">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('FAQs') ?></h1>
        <a href="<?= $this->Url->build(['controller'=>'Products' ,'action' => 'display'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-shipping-fast"></i> Start shopping!</a>
    </div>

</div>
</div>
</nav>
<!-- Page Content-->
<div class="container px-4 px-lg-5">
    <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">

        <div class="col-lg-5">
            <h1 class="font-weight-light">100% Pure Australian Organic Healthy Honey</h1>
            <p>Frequently Asked Questions about Manuka Honey
                Plus, some information about our Products and Processes</p>
        </div>
    </div>
    <!-- Call to Action-->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
        <div class="card-body"><p class="text-white m-0">Find out why Manuka Honey is so amazing...</p></div>
    </div>
    <!-- Content Row-->
    <div class="row gx-4 gx-lg-5">
        <div class="col-md-4 mb-5">
            <div class="card h-30">
                <div class="card-body">
                    <h2 class="card-title">What is the difference between Australian and New Zealand Manuka Honey?</h2>
                    <p class="card-text">New Zealand Manuka honey is usually much thicker than Australian Manuka honey, and our tests have shown us that the majority of NZ products often add glycerine and use heat treatment to blend their honey, whereas Paul’s Healthy Honey has zero additives and doesn’t use any heat treatment at all. </p>
                </div>

            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-30">
                <div class="card-body">
                    <h2 class="card-title">What does the 40+, 160+, and 260+ rating mean in regards to Manuka Honey?</h2>
                    <p class="card-text">The higher the numbers, the higher the medicinal strength of the honey. All of our honey is stringently strength-tested in a laboratory and comes back with a medicinal rating.</p>
                </div>

            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-30">
                <div class="card-body">
                    <h2 class="card-title">Where is Paul’s Healthy Honey made?</h2>
                    <p class="card-text">The majority of Paul’s Healthy Honey is produced at our hives in country Victoria, but we also source high-quality ingredients from all over Australia, selecting the finest honey from only the best hives and apiaries. We work with 38 other award-winning Australian Beekeepers.</p>
                </div>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-4 mb-5">
                <div class="card h-30">
                    <div class="card-body">
                        <h2 class="card-title">What is MGO?</h2>
                        <p class="card-text">MGO is an acronym for a natural compound found in Manuka honey called methylglyoxal, which is responsible for much of the unique medicinal activity of Manuka honey. MGO comes from another component called dihydroxyacetone (DHA), which occurs organically in the nectar of flowers of some Leptospermum plants. Various species of this plant produce different levels of DHA that give rise to the varying antibacterial potencies of this special honey. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-30">
                    <div class="card-body">
                        <h2 class="card-title">Are there any artificial ingredients in Paul’s Healthy Honey?</h2>
                        <p class="card-text">Absolutely not. We only use raw, untreated honey of the highest quality, and do not use any quality-detracting heat treatment or artificial additives. This is 100% guaranteed.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">What do you charge for delivery?</h2>
                        <p class="card-text">Delivery Charges are usually via Australia post or Aramex courier, with standard price approx $10 AUD for delivery of a single item within Australia, and approx $15 for multiple items. We have a wide range of different prices for global delivery, and we try to be as fair as possible to our customers, making no profit out of delivery costs. </p>
                    </div>
                </div>



            </div>

            <script src="/webroot/js/scripts.js"></script>
</body>
</html>

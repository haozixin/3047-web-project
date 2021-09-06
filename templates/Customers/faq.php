<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();
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
        <a href="<?= $this->Url->build(['action' => 'add'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Start shopping!</a>
    </div>

        </div>
    </div>
</nav>
<!-- Page Content-->
<div class="container px-4 px-lg-5">
    <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://dummyimage.com/900x400/dee2e6/6c757d.jpg" alt="..." /></div>
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
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">What is the difference between Australian and New Zealand Manuka Honey?</h2>
                    <p class="card-text">New Zealand Manuka honey is usually much thicker than Australian Manuka honey, and our tests have shown us that the majority of NZ products often add glycerine and use heat treatment to blend their honey, whereas Paul’s Healthy Honey has zero additives and doesn’t use any heat treatment at all. Lots of the Manuka honey available in Australia is of a substantially higher grade than that of even the medicinal honey used in New Zealand hospitals (approx 20% of the Manuka honey produced here – including Paul’s Healthy Honey).
                        Australia is also home to approximately 80 different species of the Manuka plant (Leptospermum scoparium) while New Zealand has only one species (Leptospermum scoparium). Also, the Manuka plant originated in Australia and moved as a result of long-distance dispersal events to New Zealand from eastern Australia sometime during the l930’s – so – Australia is the true ancestral home of Manuka honey.
                        NZ Manuka honey also has a different rating scale than Australia, with 5+ UMF NZ being equivalent to 40+ MGO Aus, 10+ UMF NZ is equivalent to our 160+ MGO Aus, and 15+ UMF NZ is equivalent to Australian 260+ MGO.</p>
                </div>

            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">What does the 40+, 160+, and 260+ rating mean in regards to Manuka Honey?</h2>
                    <p class="card-text">The higher the numbers, the higher the medicinal strength of the honey. All of our honey is stringently strength-tested in a laboratory and comes back with a medicinal rating.</p>
                </div>

            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Where is Paul’s Healthy Honey made?</h2>
                    <p class="card-text">The majority of Paul’s Healthy Honey is produced at our hives in country Victoria, but we also source high-quality ingredients from all over Australia, selecting the finest honey from only the best hives and apiaries. We work with 38 other award-winning Australian Beekeepers.</p>
                </div>

            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">What is MGO?</h2>
                        <p class="card-text">MGO is an acronym for a natural compound found in Manuka honey called methylglyoxal, which is responsible for much of the unique medicinal activity of Manuka honey. MGO comes from another component called dihydroxyacetone (DHA), which occurs organically in the nectar of flowers of some Leptospermum plants. Various species of this plant produce different levels of DHA that give rise to the varying antibacterial potencies of this special honey. Scientists looking at Australian honey have found a number of sources of Manuka with exceptionally high levels of DHA activity, and this is why we source all our ingredients here, and firmly believe Australian Manuka honey is the best honey in the world.</p>
                    </div>

                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
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
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Pauls honey 2021</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="/webroot/js/scripts.js"></script>
</body>
</html>


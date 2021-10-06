<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NewsletterSubscription[]|\Cake\Collection\CollectionInterface $newsletterSubscriptions
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);
$this-> layout="customer_default";
?>
<div class="container d-flex align-items-center flex-column">
    <!-- Masthead Avatar Image-->

    <!-- Masthead Heading-->
    <h1 >Thanks for the subscription!!</h1>
    <!-- Icon Divider-->
    <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
<h2> click the button below to return to Home Page </h2>
<a href="<?= $this->Url->build(['controller' => 'Agents', 'action' => 'homepage']) ?>" class=" btn-icon-split"
                   style="background-color:DarkOrange">
                                                   <span class="icon text-white-50">
                                                       <i class="fas fa-keyboard"></i>
                                                   </span>
                    <span class="text" style="color: black">Return to Home Page</span>
                </a>
        <div class="divider-custom-line"></div>
    </div>
    <!--  Subheading-->
    <p class="masthead-subheading font-weight-light mb-0">Have a nice Day!</p>
</div>
</div>

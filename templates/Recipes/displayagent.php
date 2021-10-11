<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recipe[]|\Cake\Collection\CollectionInterface $recipes
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);
$this->layout = 'customer_default';
?>
<div class="container d-flex align-items-center flex-column">
    <!-- Masthead Avatar Image-->
    <img src="/../img/honey_pour.gif"/>
    <!-- Masthead Heading-->
    <h1>Sorry but we don't have tutorial link for this recipe yet!!</h1>
    <!-- Icon Divider-->
    <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>

        <div class="divider-custom-line"></div>
    </div>
    <!--  Subheading-->

   <a href="<?=$this->Url->build(['controller' => 'Recipes', 'action' => 'displaycustomer']);?>">Redirect back to recipes page</a>
</div>
</div>


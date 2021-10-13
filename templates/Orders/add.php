<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 * @var \Cake\Collection\CollectionInterface|string[] $products
 * @var \Cake\Collection\CollectionInterface|string[] $agents
 */
$formTemplate = [
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control" {{attrs}}/>',
    'inputSubmit' => '<input type="{{type}}"{{attrs}}/>',
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'inputContainerError' => '<div class="input {{type}}{{required}} error">{{content}}{{error}}</div>',
    'label' => '<label{{attrs}}class="form-label">{{text}}</label>',
    'textarea' => '<textarea name="{{name}}"class="form-control"{{attrs}}>{{value}}</textarea>',
    'option' => '<option value="{{value}}"{{attrs}}>{{text}}</option>',
    'error' => '<div class="error-message">{{content}}</div>',
    'error' => '<div class="error-message">{{content}}</div>',

];
$this->Form->setTemplates($formTemplate);
$this->layout = 'agent_default';
$agentId = $this->getRequest()->getSession()->read('id');

?>
<div class="container py-4">
    <div class="row g-5">
        <div class="col-lg-9">
            <p class="h1 text-muted mb-4 text-center fw-normal">Welcome to the restock Page! Please specify the details
                for your selected product. </p>
            <div class="text-center mb-5">Please fill all fields below to place an order</div>
            <div class="row gy-5 align-items-stretch">
                <!-- PRODUCTS SLIDER-->
                <div class="col-lg-6">
                    <div class="swiper-container shop-detail-slider">
                        <div class="swiper-wrapper">
                            <div><?= $this->Html->image($this->getRequest()->getSession()->read('photo'), array('width' => '400')); ?></div>
                        </div>
                    </div>
                </div>

                <!-- FPRODUCT INFO-->
                <div class="col-lg-6 d-flex flex-column justify-content-between">
                    <div class="orders form content">
                        <?= $this->Form->create($order) ?>

                        <fieldset>

                            <h3 class="h1 text-muted mb-4 text-center fw-normal"> <?= $this->getRequest()->getSession()->read('name'); ?></h3>
                            <h4 class="text-center mb-3">$<?= $this->getRequest()->getSession()->read('total') ?> AUD
                                per unit</h4>
                            <h4>Product details</h4>
                            <p>
                                <i class="fas fa-feather-alt"></i> <?= $this->getRequest()->getSession()->read('desc'); ?>
                            </p>
                            <h4>Product Type</h4>
                            <p>
                                <i class="fas fa-feather-alt"></i> <?= $this->getRequest()->getSession()->read('type'); ?>

                            </p>

                            <h5>
                                <i class="fas fa-feather-alt"></i>
                                Note: <?= $this->getRequest()->getSession()->read('quantity'); ?> Unit(s) Available in
                                Stock
                            </h5>

                            <div class="column-responsive column-80">
                                <div class="orders form content">

                                    <fieldset>

                                        <?php
//                                        include_once "\App\Controller\AgentsController.php";
                                        //debug($agentid->getRequest()->getSession()->read('id'));


                                        echo $this->Form->control('quantity', array(
                                            'type' => 'number',
                                            'min' => 10,
                                            'max' => $this->getRequest()->getSession()->read('quantity'),
                                        ));
                                        echo $this->Form->control('deal_date', [
                                            'type' => 'date',
                                            'required',
                                            'default' => date('Y-m-d'), // Show default Todays date,
                                            'min' => date('Y-m-d'),
                                            'max' => date('Y-m-d'),

                                        ]);
                                        echo $this->Form->control('deal_comment');
                                        echo $this->Form->control('shipping_address');

                                       

                                        ?>
                                    </fieldset>
                                    <?= $this->Form->button(__('Submit')) ?>
                                    <?= $this->Form->end() ?>
                                </div>

                            </div>

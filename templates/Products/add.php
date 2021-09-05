<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var \Cake\Collection\CollectionInterface|string[] $orders
 */

$formTemplate=[
               'input' => '<input type="{{type}}" name="{{name}}" class="form-control" {{attrs}}/>',
               'inputSubmit' => '<input type="{{type}}"{{attrs}}/>',
               'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
               'inputContainerError' => '<div class="input {{type}}{{required}} error">{{content}}{{error}}</div>',
               'label' => '<label{{attrs}}class="form-label">{{text}}</label>',
               'textarea' => '<textarea name="{{name}}"class="form-control"{{attrs}}>{{value}}</textarea>',

               ];

$this ->Form->setTemplates($formTemplate);
?>
<h1 class="h3 mb-2 text-grey-800">Add Products</h1>

    <div class="column-responsive column-80">
        <div class="products form content">
            <?= $this->Form->create($product) ?>
            <fieldset>
            <legend><?= __('Add Product') ?></legend>
              <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('customer_price');
                    echo $this->Form->control('agent_price');
                    echo $this->Form->control('product_type');
                    echo $this->Form->control('date_of_manufacture');
                    echo $this->Form->control('expired_date');
                    echo $this->Form->control('order_id', ['options' => $orders, 'empty' => true]);

                              ?>
               <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
                          <?= $this->Form->end() ?>

            </fieldset>


    </div>
</div>


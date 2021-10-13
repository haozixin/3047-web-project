<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var \Cake\Collection\CollectionInterface|string[] $orders
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

];

$this->Form->setTemplates($formTemplate);
?>


<div class="column-responsive column-80">
    <div class="products form content">
        <?= $this->Form->create($product, ['type' => 'file']) ?>
        <fieldset>
            <legend><?= __('Add Product') ?></legend>
            <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('customer_price', array('type' => 'number','min' => 10,'max'=> 1000));
            echo $this->Form->control('agent_price', array('type' => 'number','min' => 10,'max'=> 1000));
            echo $this->Form->control('product_type');
            echo $this->Form->control('date_of_manufacture', [
                                    'type' => 'date',
                                    'id' =>'manDate',
                                    'required',
                                    'default' => date('Y-m-d'), // Show default Todays date,
                                    'min' => date('Y-m-d'), ]);


            echo $this->Form->control('expired_date', [
                                    'type' => 'date',
                                    'id' =>'expDate',
                                    'required',
                                    'default' => 'date_of_manufacture', // Show default Todays date,
                                     ]);

            echo $this->Form->control('quantity', array('type' => 'number','min' => 10,'max'=> 10000));
            echo $this->Form->control('photo', ['type' => 'file']);
            ?>

            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>

        </fieldset>


    </div>
</div>
<script>
    let manDate = document.getElementById('manDate');
    let expDate = document.getElementById('expDate');
    // const selectElement = document.querySelector('.ice-cream');

     manDate.addEventListener('input', (event) => {
        expDate.setAttribute('min',manDate.value);
     });


</script>


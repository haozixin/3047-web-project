<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var string[]|\Cake\Collection\CollectionInterface $orders
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
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="<?= $this->Url->build(['action' => 'index']) ?>"
       class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-arrow-circle-left fa-sm text-white-50"></i>Go back</a>
</div>
</aside>
<div class="column-responsive column-80">
    <div class="products form content">
        <?= $this->Form->create($product) ?>
        <fieldset>
            <legend><?= __('Edit The Product') ?></legend>
            <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('customer_price');
            echo $this->Form->control('agent_price');
            echo $this->Form->control('product_type');
            echo $this->Form->control('date_of_manufacture');
            echo $this->Form->control('expired_date');
            echo $this->Form->control('quantity');
            ?>
            <a><p></p></a>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
            <a><p></p></a>
            <a><p></p></a>
        </fieldset>
    </div>
</div>


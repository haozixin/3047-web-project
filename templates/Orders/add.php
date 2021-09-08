<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 * @var \Cake\Collection\CollectionInterface|string[] $customers
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

    </aside>
    <div class="column-responsive column-80">
        <div class="orders form content">
            <?= $this->Form->create($order) ?>
            <form>
                <legend><?= __('Add Order') ?></legend>
                <?php
                    echo $this->Form->control('amount');
                    echo $this->Form->control('quantity');
                    echo $this->Form->control('deal_date');
                    echo $this->Form->control('deal_comment');
                    echo $this->Form->control('shipping_address');
                    echo $this->Form->control('customer_id', ['options' => $customers]);
                ?>
            <form>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>

                <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

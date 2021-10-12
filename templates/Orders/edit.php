<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 * @var string[]|\Cake\Collection\CollectionInterface $agents
 * @var string[]|\Cake\Collection\CollectionInterface $products
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
    'option' => '<option value="{{value}}"{{attrs}}>{{text}}</option>',
    'error' => '<div class="error-message">{{content}}</div>',

];
$this->Form->setTemplates($formTemplate);
$YesNo=["Yes","No"];
?>
<h1 class="h3 mb-2 text-grey-800">Edit Order Status</h1>
</br>
<div class="column-responsive column-80">
    <div class="orders form content">
        <?= $this->Form->create($order) ?>
        <fieldset>

            <?php
            echo $this->Form->control('product_id', ['options' => $products]);
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
            echo "<br>";
            echo $this->Form->control('agent_id');
            echo "<br>";
            echo $this->Form->control('email_sent');
            echo $this->Form->control('Paid', ['options' => $YesNo, 'empty' => true] );

            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>


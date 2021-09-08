<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */


$formTemplate = [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}"{{attrs}} class="form-control"/>',
    'textarea'=> '<textarea name="{{name}}" class="form-control" {{attrs}}>{{value}}</textarea>',
    'nestingLabel' => '{{hidden}}<label class="form-check-label" {{attrs}}>{{input}}{{text}}</label>',
    'checkbox' => '<input type="checkbox" name="{{name}}" value="{{value}}" class="form-check-input" {{attrs}}>',
];
$this->Form->setTemplates($formTemplate);
?>

<h1 class="h3 mb-2 text-gray-800">Add new customer</h1>
<?= $this->Form->create($customer) ?>
    <?php
    echo $this->Form->control('given_name');
    echo $this->Form->control('family_name');
    echo $this->Form->control('email');
    echo $this->Form->control('country');
    echo $this->Form->control('state');
    echo $this->Form->control('city');
    echo $this->Form->control('street');
    echo $this->Form->control('user_name');
    echo $this->Form->control('password');
    echo $this->Form->control('subscription_status(type "yes" to subscribe)');
    ?>


<?= $this->Form->button(__('Submit'),['class'=>'btn-primary' ]) ?>
<?= $this->Form->end() ?>

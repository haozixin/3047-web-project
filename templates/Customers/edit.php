<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
 $formTemplate = [
     'input' => '<input type="{{type}}" name="{{name}}" class="form-control" {{attrs}}/>',
     'inputSubmit' => '<input type="{{type}}"{{attrs}}/>',
     'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
     'inputContainerError' => '<div class="input {{type}}{{required}} error">{{content}}{{error}}</div>',
     'label' => '<label{{attrs}}class="form-label">{{text}}</label>',
     'textarea' => '<textarea name="{{name}}"class="form-control"{{attrs}}>{{value}}</textarea>',

 ];
 $this->Form->setTemplates($formTemplate);
?>
<div class="h3 mb-2 text-gray-800">
    <div class="column-responsive column-80">
        <div class="customers form content">
            <?= $this->Form->create($customer) ?>
            <fieldset>
                <legend><?= __('Edit The Customer') ?></legend>
                <br>
                <?php
                echo $this->Form->control('given_name');
                echo "<br>";
                echo $this->Form->control('family_name');
                echo "<br>";
                echo $this->Form->control('country');
                echo "<br>";
                echo $this->Form->control('state');
                echo "<br>";
                echo $this->Form->control('city');
                echo "<br>";
                echo $this->Form->control('street');
                echo "<br>";
                echo $this->Form->control('email');
                echo "<br>";
                echo $this->Form->control('user_name');
                echo "<br>";
                echo $this->Form->control('password');
                echo "<br>";
                echo $this->Form->control('subscription_status');

                ?>
            </fieldset>
            <br>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

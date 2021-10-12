<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NewsletterSubscription $newsletterSubscription
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
$this->layout = 'customer_default';
?>
<h1 class="h3 mb-2 text-grey-800">Add Subscription</h1>
<div class="column-responsive column-80">
    <div class="newsletterSubscriptions form content">
        <?= $this->Form->create($newsletterSubscription) ?>
        <fieldset>

            <?php
            echo $this->Form->control('customer_name');
            echo $this->Form->control('customer_email');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
</div>

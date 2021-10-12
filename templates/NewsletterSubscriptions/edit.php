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
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="<?= $this->Url->build(['action' => 'index']) ?>"
       class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-arrow-circle-left fa-sm text-white-50"></i>Go back</a>
</div>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $newsletterSubscription->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $newsletterSubscription->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Newsletter Subscriptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>


    <div class="column-responsive column-80">
        <div class="newsletterSubscriptions form content">
            <?= $this->Form->create($newsletterSubscription) ?>
            <fieldset>
                <legend><?= __('Edit Newsletter Subscription') ?></legend>
                <?php
                echo $this->Form->control('customer_name');
                echo $this->Form->control('customer_email');
                ?>
            </fieldset>
             <br></br>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>


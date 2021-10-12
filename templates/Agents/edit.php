<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agent $agent
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
<div class="h3 mb-2 text-gray-800">
    <div class="column-responsive column-80">
        <div class="agents form content">
            <?= $this->Form->create($agent) ?>
            <fieldset>
                <legend><?= __('Edit The Agent') ?></legend>
                <?php
                echo $this->Form->control('given_name');
                echo $this->Form->control('family_name');
                echo $this->Form->control('email');
                echo $this->Form->control('country');
                echo $this->Form->control('state');
                echo $this->Form->control('city');
                echo $this->Form->control('street');
                echo $this->Form->control('subscription_status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

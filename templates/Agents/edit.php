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
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="<?= $this->Url->build(['action' => 'index']) ?>"
       class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-arrow-circle-left fa-sm text-white-50"></i>Go back</a>
</div>
<div class="h3 mb-2 text-gray-800">
    <div class="column-responsive column-80">
        <div class="agents form content">
            <?= $this->Form->create($agent) ?>
            <fieldset>
                <legend><?= __('Edit The Agent') ?></legend>
                <br>
                <?php
                echo $this->Form->control('given_name');
                echo "<br>";
                echo $this->Form->control('family_name');
                echo "<br>";
                echo $this->Form->control('email');
                echo "<br>";
                echo $this->Form->control('country');
                echo "<br>";
                echo $this->Form->control('state');
                echo "<br>";
                echo $this->Form->control('city');
                echo "<br>";
                echo $this->Form->control('street');
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

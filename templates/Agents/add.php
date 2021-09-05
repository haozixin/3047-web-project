<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agent $agent
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
<h1 class="h3 mb-2 text-grey-800">Add New Agent</h1>

<div class="column-responsive column-80">
    <div class="agents form content">
        <?= $this->Form->create($agent) ?>
        <fieldset>
            <legend><?= __('Add New Agent') ?></legend>
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
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
            <?= $this->Form->end() ?>

        </fieldset>


    </div>
</div>


<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agent $agent
 */
$formTemplate = [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}"{{attrs}} class="form-control"/>',
    'textarea' => '<textarea name="{{name}}" class="form-control" {{attrs}}>{{value}}</textarea>',
    'nestingLabel' => '{{hidden}}<label class="form-check-label" {{attrs}}>{{input}}{{text}}</label>',
    'checkbox' => '<input type="checkbox" name="{{name}}" value="{{value}}" class="form-check-input" {{attrs}}>',
];
$this->layout = "customer_default";
$this->Form->setTemplates($formTemplate);


?>

<div class="column-responsive column-80">
    <div class="Administrator form content">
        <h3>Please Enter a Registered Email!</h3>
        <?= $this->Form->create() ?>
        <fieldset>
            <legend><?= __('Forgot Password') ?></legend>
            <?php
            echo $this->Form->control('email',['type'=>'email']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>

        <?= $this->Form->end() ?>


    </div>
</div>

<script>
    $(document).ready(function () {
        $('#country').select2();
    });
</script>

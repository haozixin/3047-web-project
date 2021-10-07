<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
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
<h1 class="h3 mb-2 text-grey-800">Add Administrator</h1>

<div class="column-responsive column-80">
    <div class="Administrator form content">
        <?= $this->Form->create($admin) ?>
        <fieldset>
            <legend><?= __('Add Administrator') ?></legend>
            <?php
            echo $this->Form->control('given_name');
            echo $this->Form->control('family_name');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('user_name');

            ?>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>

        </fieldset>


    </div>
</div>


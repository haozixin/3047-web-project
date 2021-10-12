<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recipe $recipe
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
<h1 class="h3 mb-2 text-grey-800">Edit Recipes</h1>
<div class="column-responsive column-80">
    <div class="recipes form content">
        <?= $this->Form->create($recipe) ?>
        <fieldset>
            <legend><?= __('Edit Recipe') ?></legend>
            <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('video_link');
            echo $this->Form->control('photo');
            ?>
        </fieldset>
        <br></br>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>

    </div>
</div>

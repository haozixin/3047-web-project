<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductRecipe $productRecipe
 * @var \Cake\Collection\CollectionInterface|string[] $recipes
 * @var \Cake\Collection\CollectionInterface|string[] $products
 */
$formTemplate = [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}"{{attrs}} class="form-control"/>',
    'textarea' => '<textarea name="{{name}}" class="form-control" {{attrs}}>{{value}}</textarea>',
    'nestingLabel' => '{{hidden}}<label class="form-check-label" {{attrs}}>{{input}}{{text}}</label>',
    'checkbox' => '<input type="checkbox" name="{{name}}" value="{{value}}" class="form-check-input" {{attrs}}>',
];
$this->Form->setTemplates($formTemplate);
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Product Recipes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productRecipes form content">
            <?= $this->Form->create($productRecipe) ?>
            <fieldset>
                <legend><?= __('Add Product Recipe') ?></legend>
                <?php
                echo $this->Form->control('recipe_title');
                echo $this->Form->control('last_modify_time');
                echo $this->Form->control('recipe_id', ['options' => $recipes]);
                echo $this->Form->control('product_id', ['options' => $products]);
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
</div>

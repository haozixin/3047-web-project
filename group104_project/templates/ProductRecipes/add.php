<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductRecipe $productRecipe
 * @var \Cake\Collection\CollectionInterface|string[] $products
 * @var \Cake\Collection\CollectionInterface|string[] $recipes
 */
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
                    echo $this->Form->control('product_id', ['options' => $products]);
                    echo $this->Form->control('recipe_id', ['options' => $recipes]);
                    echo $this->Form->control('pro_rec_title');
                    echo $this->Form->control('last_modify_time');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

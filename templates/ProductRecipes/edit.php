<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductRecipe $productRecipe
 * @var string[]|\Cake\Collection\CollectionInterface $recipes
 * @var string[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productRecipe->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productRecipe->id), 'class' => 'side-nav-item']
            ) ?>

        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productRecipes form content">
            <?= $this->Form->create($productRecipe) ?>
            <fieldset>
                <legend><?= __('Edit Product Recipe') ?></legend>
                <?php
                    echo $this->Form->control('recipe_title');
                    echo $this->Form->control('last_modify_time');
                    echo $this->Form->control('recipe_id', ['options' => $recipes]);
                    echo $this->Form->control('product_id', ['options' => $products]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

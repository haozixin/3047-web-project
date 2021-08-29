<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductRecipe $productRecipe
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product Recipe'), ['action' => 'edit', $productRecipe->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product Recipe'), ['action' => 'delete', $productRecipe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productRecipe->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Product Recipes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product Recipe'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productRecipes view content">
            <h3><?= h($productRecipe->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Recipe Title') ?></th>
                    <td><?= h($productRecipe->recipe_title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Recipe') ?></th>
                    <td><?= $productRecipe->has('recipe') ? $this->Html->link($productRecipe->recipe->title, ['controller' => 'Recipes', 'action' => 'view', $productRecipe->recipe->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $productRecipe->has('product') ? $this->Html->link($productRecipe->product->name, ['controller' => 'Products', 'action' => 'view', $productRecipe->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($productRecipe->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Modify Time') ?></th>
                    <td><?= h($productRecipe->last_modify_time) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

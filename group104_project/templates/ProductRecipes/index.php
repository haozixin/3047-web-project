<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductRecipe[]|\Cake\Collection\CollectionInterface $productRecipes
 */
?>
<div class="productRecipes index content">
    <?= $this->Html->link(__('New Product Recipe'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Product Recipes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('recipe_id') ?></th>
                    <th><?= $this->Paginator->sort('pro_rec_title') ?></th>
                    <th><?= $this->Paginator->sort('last_modify_time') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productRecipes as $productRecipe): ?>
                <tr>
                    <td><?= $this->Number->format($productRecipe->id) ?></td>
                    <td><?= $productRecipe->has('product') ? $this->Html->link($productRecipe->product->name, ['controller' => 'Products', 'action' => 'view', $productRecipe->product->id]) : '' ?></td>
                    <td><?= $productRecipe->has('recipe') ? $this->Html->link($productRecipe->recipe->title, ['controller' => 'Recipes', 'action' => 'view', $productRecipe->recipe->id]) : '' ?></td>
                    <td><?= h($productRecipe->pro_rec_title) ?></td>
                    <td><?= h($productRecipe->last_modify_time) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productRecipe->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productRecipe->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productRecipe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productRecipe->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

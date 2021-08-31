<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recipe $recipe
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Recipe'), ['action' => 'edit', $recipe->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Recipe'), ['action' => 'delete', $recipe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipe->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Recipes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Recipe'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="recipes view content">
            <h3><?= h($recipe->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($recipe->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($recipe->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Video Link') ?></th>
                    <td><?= $this->Number->format($recipe->video_link) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($recipe->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Product Recipes') ?></h4>
                <?php if (!empty($recipe->product_recipes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Recipe Title') ?></th>
                            <th><?= __('Last Modify Time') ?></th>
                            <th><?= __('Recipe Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($recipe->product_recipes as $productRecipes) : ?>
                        <tr>
                            <td><?= h($productRecipes->id) ?></td>
                            <td><?= h($productRecipes->recipe_title) ?></td>
                            <td><?= h($productRecipes->last_modify_time) ?></td>
                            <td><?= h($productRecipes->recipe_id) ?></td>
                            <td><?= h($productRecipes->product_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ProductRecipes', 'action' => 'view', $productRecipes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ProductRecipes', 'action' => 'edit', $productRecipes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductRecipes', 'action' => 'delete', $productRecipes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productRecipes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

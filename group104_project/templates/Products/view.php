<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products view content">
            <h3><?= h($product->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($product->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Type') ?></th>
                    <td><?= h($product->product_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $product->has('order') ? $this->Html->link($product->order->id, ['controller' => 'Orders', 'action' => 'view', $product->order->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($product->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Price') ?></th>
                    <td><?= $this->Number->format($product->customer_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Agent Price') ?></th>
                    <td><?= $this->Number->format($product->agent_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of Manufacture') ?></th>
                    <td><?= h($product->date_of_manufacture) ?></td>
                </tr>
                <tr>
                    <th><?= __('Expired Date') ?></th>
                    <td><?= h($product->expired_date) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($product->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Product Recipes') ?></h4>
                <?php if (!empty($product->product_recipes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Recipe Id') ?></th>
                            <th><?= __('Pro Rec Title') ?></th>
                            <th><?= __('Last Modify Time') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->product_recipes as $productRecipes) : ?>
                        <tr>
                            <td><?= h($productRecipes->id) ?></td>
                            <td><?= h($productRecipes->product_id) ?></td>
                            <td><?= h($productRecipes->recipe_id) ?></td>
                            <td><?= h($productRecipes->pro_rec_title) ?></td>
                            <td><?= h($productRecipes->last_modify_time) ?></td>
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

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="products index content">


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800"><?= __('Products') ?></h1>
     <a href="<?= $this->Url->build(['action' => 'add'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
      class="fas fa-plus fa-sm text-white-50"></i> New Product</a>
         </div>
          <div class="table-responsive" >
        <table class= "table table bordered" id="productTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('customer_price') ?></th>
                    <th><?= $this->Paginator->sort('agent_price') ?></th>
                    <th><?= $this->Paginator->sort('product_type') ?></th>
                    <th><?= $this->Paginator->sort('date_of_manufacture') ?></th>
                    <th><?= $this->Paginator->sort('expired_date') ?></th>
                    <th><?= $this->Paginator->sort('order_id') ?></th>
                     <th class="actions"><?= __('Actions') ?></th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                     <td><?= $this->Number->format($product->id) ?></td>
                     <td><?= h($product->name) ?></td>
                     <td><?= $this->Number->format($product->customer_price) ?></td>
                     <td><?= $this->Number->format($product->agent_price) ?></td>
                     <td><?= h($product->product_type) ?></td>
                     <td><?= h($product->date_of_manufacture) ?></td>
                     <td><?= h($product->expired_date) ?></td>
                     <td><?= $product->has('order') ? $this->Html->link($product->order->id, ['controller' => 'Orders', 'action' => 'view', $product->order->id]) : '' ?></td>
                     <td class="actions">
                         <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                         <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                         <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
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




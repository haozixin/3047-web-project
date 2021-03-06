<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */

?>
<aside class="row">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?= $this->Url->build(['action' => 'index']) ?>"
           class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-arrow-circle-left fa-sm text-white-50"></i>Go back</a>
    </div>
</aside>
<div class="column-responsive column-80">
    <div class="products view content">
        <h3><?= h("Details") ?></h3>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
            <tr>
            <th><?= __('quantity (In 1 Unit)') ?></th>
            <td><?= $this->Number->format($product->quantity) ?></td>
            </tr>
            <tr>
                <th><?= __('Photo') ?></th>
                <td><?= $this->Html->image($product->photo, array('width' => '200px')); ?></td>
            </tr>
        </table>
        <div class="text">
            <strong><?= __('Description:') ?></strong>
            <blockquote>
                <?= $this->Text->autoParagraph(h($product->description)); ?>
            </blockquote>
        </div>

    </div>
</div>


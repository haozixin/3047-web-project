<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<div class="row">

    <div class="column-responsive column-80">
        <div class="orders view content">
            <h3><?= h($order->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Customer') ?></th>
                    <td><?= $order->has('customer') ? $this->Html->link($order->customer->id, ['controller' => 'Customers', 'action' => 'view', $order->customer->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($order->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $this->Number->format($order->amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($order->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deal Date') ?></th>
                    <td><?= h($order->deal_date) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Deal Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($order->deal_comment)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Shipping Address') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($order->shipping_address)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Products') ?></h4>
                <?php if (!empty($order->products)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Customer Price') ?></th>
                            <th><?= __('Agent Price') ?></th>
                            <th><?= __('Product Type') ?></th>
                            <th><?= __('Date Of Manufacture') ?></th>
                            <th><?= __('Expired Date') ?></th>
                            <th><?= __('Order Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($order->products as $products) : ?>
                        <tr>
                            <td><?= h($products->id) ?></td>
                            <td><?= h($products->name) ?></td>
                            <td><?= h($products->description) ?></td>
                            <td><?= h($products->customer_price) ?></td>
                            <td><?= h($products->agent_price) ?></td>
                            <td><?= h($products->product_type) ?></td>
                            <td><?= h($products->date_of_manufacture) ?></td>
                            <td><?= h($products->expired_date) ?></td>
                            <td><?= h($products->order_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
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

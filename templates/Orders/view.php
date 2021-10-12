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
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $order->has('product') ? $this->Html->link($order->product->name, ['controller' => 'Products', 'action' => 'view', $order->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Shipping Address') ?></th>
                    <td><?= h($order->shipping_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Agent') ?></th>
                    <td><?= $order->has('agent') ? $this->Html->link($order->agent->id, ['controller' => 'Agents', 'action' => 'view', $order->agent->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($order->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($order->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Agent Id') ?></th>
                    <td><?= $this->Number->format($order->agent_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deal Date') ?></th>
                    <td><?= h($order->deal_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Sent') ?></th>
                    <td><?= $order->email_sent ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Deal Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($order->deal_comment)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>

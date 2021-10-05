<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */
 echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
 echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
 echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);

?>
<div class="products index content">
    <!-- Page Heading -->

    <div class="table-responsive">
        <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= h('id') ?></th>
                    <th><?= h('product_id') ?></th>
                    <th><?= h('quantity') ?></th>
                    <th><?= h('deal_date') ?></th>
                    <th><?= h('shipping_address') ?></th>
                    <th><?= h('customer_id') ?></th>
                    <th><?= h('email sent?') ?></th>
                    <th><?= h('customer_email') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= h($order->id) ?></td>
                    <td><?= $order->has('product') ? $this->Html->link($order->product->name, ['controller' => 'Products', 'action' => 'view', $order->product->id]) : '' ?></td>
                    <td><?= h($order->quantity) ?></td>
                    <td><?= h($order->deal_date) ?></td>
                    <td><?= h($order->shipping_address) ?></td>
                    <td><?= h($order->customer_id) ? $this->Html->link($order->customer->id, ['controller' => 'Customers', 'action' => 'view', $order->customer->id]) : '' ?></td>
                    <td><?= $order->email_sent ? __('Yes') : __('No'); ?></td>
                     <td><?= h($order->customer_email) ?></td>
                    <td class="actions">

                        <?= $this->Html->link(__('Approve'), ['action' => 'mark', $order->id]) ?>
                        <?= $this->Form->postLink(__('Reject'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to reject # {0}?', $order->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
   <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</div>

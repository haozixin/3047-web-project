<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);

?>
<div class="products index content">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-grey-800">Confirm and Ship Orders</h1>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th><?= h('id') ?></th>
                <th><?= h('product_id') ?></th>
                <th><?= h('quantity') ?></th>
                <th><?= h('deal_date') ?></th>
                <th><?= h('shipping_address') ?></th>
                <th><?= h('agent_id') ?></th>
                <th><?= h('email sent?') ?></th>
                <th><?= h('agent_email') ?></th>
                <th><?= h('Paid?') ?></th>

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
                    <td><?= h($order->agent_id) ? $this->Html->link($order->agent_id, ['controller' => 'Agents', 'action' => 'view', $order->agent_id]) : '' ?></td>
                    <td><?= $order->email_sent ? __('Yes') : __('No'); ?></td>
                    <td><?= h($order->agent_email) ?></td>
                    <td><?= h($order->Paid) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]); ?>

                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable();
        });
    </script>
</div>


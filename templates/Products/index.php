<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);

?>
<div class="products index content">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Products') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New products</a>

    </div>

    <div class="table-responsive" >
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th><?= h('id') ?></th>
                <th><?= h('name') ?></th>
                <th><?= h('customer_price') ?></th>
                <th><?= h('agent_price') ?></th>
                <th><?= h('product_type') ?></th>

                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $products): ?>
                <tr>
                    <td><?= $this->Number->format($products->id) ?></td>
                    <td><?= h($products->name) ?></td>
                    <td><?= h($products->customer_price) ?></td>
                    <td><?= h($products->agent_price) ?></td>
                    <td><?= h($products->product_type) ?></td>

                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $products->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $products->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
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



<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);
$this->layout='customer_default';
?>
<div class="products index content">


    <div class="table-responsive" >
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th><?= h('id') ?></th>
                <th><?= h('name') ?></th>
                <th><?= h('customer_price') ?></th>
                <th><?= h('agent_price') ?></th>
                <th><?= h('product_type') ?></th>


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

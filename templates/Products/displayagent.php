<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);
$this->layout = 'agent_default';


?>
<div class="products index content">


    <div class="table-responsive">
        <table class="table" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-primary">
            <tr>
                <th><?= h('Product') ?></th>
                <th><?= h('name') ?></th>
                <th><?= h('price in AUD') ?></th>
                <th><?= h('product_type') ?></th>
                <th><?= h('Function') ?></th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $products): ?>
                <tr>

                    <td><?= $this->Html->image($products->photo, array('width' => '200px')); ?></td>
                    <td><?= h($products->name) ?></td>
                    <td>$<?= h($products->agent_price) ?> AUD</td>
                    <td><?= h($products->product_type) ?></td>
                    <?php
                    if ($products->quantity < 10){
                        //$status = "Sell out";
                        $command = "Sell out";
                    }else{

                        $status = "Buy Product";
                        $command = $this->Html->link(__($status), ['action' => "restock", $products->id]);
                    }
                    ?>
                    <td class="btn btn-light btn-icon-split"><?= $command ?></td>

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



<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recipe[]|\Cake\Collection\CollectionInterface $recipes
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
                <th><?= h('title') ?></th>
                <th><?= h('description') ?></th>
                <th><?= h('video_link') ?></th>
                <th><?= h('photo') ?></th>


            </tr>
            </thead>
            <tbody>
            <?php foreach ($recipes as $recipes): ?>
                <tr>
                    <td><?= $this->Number->format($recipes->id) ?></td>
                    <td><?= h($recipes->title) ?></td>
                    <td><?= h($recipes->description) ?></td>
                    <td><?= h($recipes->video_link) ?></td>
                    <td><?= $this->Html->image($recipes->photo,  array('height' => '110')); ?></td>



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


<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recipe[]|\Cake\Collection\CollectionInterface $recipes
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);
$this->layout = 'customer_default';
?>
<div class="recipe index content">

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>

                <th><?= h('title') ?></th>
                <th><?= h('description') ?></th>
                <th><?= ('video_link'); ?></th>
                <th><?= h('photo') ?></th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($recipes as $recipe): ?>
                <tr>

                    <td><?= h($recipe->title) ?></td>
                    <td><?= h($recipe->description) ?></td>
                    <td><?= h($recipe->video_link) ?></td>
                    <td><?= $this->Html->image($recipe->photo, array('width' => '200px')); ?></td>

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



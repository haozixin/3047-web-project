<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recipe[]|\Cake\Collection\CollectionInterface $recipes
 */
 echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
 echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
 echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);

?>
<div class="recipe index content">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Recipes') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New Recipes</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= h('id') ?></th>
                    <th><?= h('title') ?></th>
                     <th><?= h('description') ?></th>
                    <th><?= ('video_link'); ?></th>
                     <th><?= h('photo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($recipes as $recipe): ?>
                <tr>
                    <td><?= $this->Number->format($recipe->id) ?></td>
                    <td><?= h($recipe->title) ?></td>
                    <td><?= h($recipe->description) ?></td>
                    <td><?= h($recipe->video_link) ?></td>
                     <td><?= $this->Html->image($recipe->photo,  array('height' => '110'));  ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $recipe->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recipe->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recipe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipe->id)]) ?>
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



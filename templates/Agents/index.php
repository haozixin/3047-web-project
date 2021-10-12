<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agent[]|\Cake\Collection\CollectionInterface $agents
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);
?>
<div class="agents index content">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Agents') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>"
           class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New Agents</a>
    </div>


    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th><?= h('id') ?></th>
                <th><?= h('given_name') ?></th>
                <th><?= h('family_name') ?></th>
                <th><?= h('country') ?></th>
                <th><?= h('state') ?></th>
                <th><?= h('city') ?></th>
                <th><?= h('street') ?></th>
                <th><?= h('email') ?></th>
                <th><?= h('username') ?></th>
                <th><?= h('password') ?></th>
                <th><?= h('subscription_status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($agents as $agents): ?>
                <tr>
                    <td><?= $this->Number->format($agents->id) ?></td>
                    <td><?= h($agents->given_name) ?></td>
                    <td><?= h($agents->family_name) ?></td>
                    <td><?= h($agents->country) ?></td>
                    <td><?= h($agents->state) ?></td>
                    <td><?= h($agents->city) ?></td>
                    <td><?= h($agents->street) ?></td>
                    <td><?= h($agents->email) ?></td>
                    <td><?= h($agents->user_name) ?></td>
                    <td><?= h($agents->password) ?></td>
                    <td><?= h($agents->subscription_status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $agents->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agents->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agents->id)]) ?>
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

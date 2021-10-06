<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminAgent[]|\Cake\Collection\CollectionInterface $adminAgents
 */
?>
<div class="adminAgents index content">
    <?= $this->Html->link(__('New Admin Agent'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Admin Agents') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('price') ?></th>
                <th><?= $this->Paginator->sort('comments') ?></th>
                <th><?= $this->Paginator->sort('cooperation_start_date') ?></th>
                <th><?= $this->Paginator->sort('cooperation_end_date') ?></th>
                <th><?= $this->Paginator->sort('agent_id') ?></th>
                <th><?= $this->Paginator->sort('admin_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($adminAgents as $adminAgent): ?>
                <tr>
                    <td><?= $this->Number->format($adminAgent->id) ?></td>
                    <td><?= $this->Number->format($adminAgent->price) ?></td>
                    <td><?= h($adminAgent->comments) ?></td>
                    <td><?= h($adminAgent->cooperation_start_date) ?></td>
                    <td><?= h($adminAgent->cooperation_end_date) ?></td>
                    <td><?= $adminAgent->has('agent') ? $this->Html->link($adminAgent->agent->id, ['controller' => 'Agents', 'action' => 'view', $adminAgent->agent->id]) : '' ?></td>
                    <td><?= $adminAgent->has('admin') ? $this->Html->link($adminAgent->admin->id, ['controller' => 'Admins', 'action' => 'view', $adminAgent->admin->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $adminAgent->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adminAgent->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adminAgent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminAgent->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

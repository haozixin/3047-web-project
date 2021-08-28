<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agent[]|\Cake\Collection\CollectionInterface $agents
 */
?>
<div class="agents index content">
    <?= $this->Html->link(__('New Agent'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Agents') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('given_name') ?></th>
                    <th><?= $this->Paginator->sort('family_name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('subscription_status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($agents as $agent): ?>
                <tr>
                    <td><?= $this->Number->format($agent->id) ?></td>
                    <td><?= h($agent->given_name) ?></td>
                    <td><?= h($agent->family_name) ?></td>
                    <td><?= h($agent->email) ?></td>
                    <td><?= h($agent->subscription_status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $agent->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agent->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agent->id)]) ?>
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

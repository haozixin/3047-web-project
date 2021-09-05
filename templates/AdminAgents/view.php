<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminAgent $adminAgent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Admin Agent'), ['action' => 'edit', $adminAgent->id], ['class' => 'side-nav-item']) ?>

        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="adminAgents view content">
            <h3><?= h("Details") ?></h3>
            <table>
                <tr>
                    <th><?= __('Comments') ?></th>
                    <td><?= h($adminAgent->comments) ?></td>
                </tr>
                <tr>
                    <th><?= __('Agent') ?></th>
                    <td><?= $adminAgent->has('agent') ? $this->Html->link($adminAgent->agent->id, ['controller' => 'Agents', 'action' => 'view', $adminAgent->agent->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Admin') ?></th>
                    <td><?= $adminAgent->has('admin') ? $this->Html->link($adminAgent->admin->id, ['controller' => 'Admins', 'action' => 'view', $adminAgent->admin->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($adminAgent->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($adminAgent->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cooperation Start Date') ?></th>
                    <td><?= h($adminAgent->cooperation_start_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cooperation End Date') ?></th>
                    <td><?= h($adminAgent->cooperation_end_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

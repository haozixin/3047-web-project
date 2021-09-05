<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agent $agent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Agent'), ['action' => 'edit', $agent->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Agent'), ['action' => 'delete', $agent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agent->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Agents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Agent'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="agents view content">
            <h3><?= h($agent->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Given Name') ?></th>
                    <td><?= h($agent->given_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Family Name') ?></th>
                    <td><?= h($agent->family_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($agent->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($agent->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($agent->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($agent->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street') ?></th>
                    <td><?= h($agent->street) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subscription Status') ?></th>
                    <td><?= h($agent->subscription_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($agent->id) ?></td>
                </tr>
            </table>

            <div class="related">
                <h4><?= __('Related Admin Agents') ?></h4>
                <?php if (!empty($agent->admin_agents)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Comments') ?></th>
                            <th><?= __('Cooperation Start Date') ?></th>
                            <th><?= __('Cooperation End Date') ?></th>
                            <th><?= __('Agent Id') ?></th>
                            <th><?= __('Admin Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($agent->admin_agents as $adminAgents) : ?>
                        <tr>
                            <td><?= h($adminAgents->id) ?></td>
                            <td><?= h($adminAgents->price) ?></td>
                            <td><?= h($adminAgents->comments) ?></td>
                            <td><?= h($adminAgents->cooperation_start_date) ?></td>
                            <td><?= h($adminAgents->cooperation_end_date) ?></td>
                            <td><?= h($adminAgents->agent_id) ?></td>
                            <td><?= h($adminAgents->admin_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'AdminAgents', 'action' => 'view', $adminAgents->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'AdminAgents', 'action' => 'edit', $adminAgents->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'AdminAgents', 'action' => 'delete', $adminAgents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminAgents->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

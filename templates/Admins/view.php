<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Admin'), ['action' => 'edit', $admin->id], ['class' => 'side-nav-item']) ?>

        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="admins view content">
            <h3><?= h("Details") ?></h3>
            <table>
                <tr>
                    <th><?= __('Given Name') ?></th>
                    <td><?= h($admin->given_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Family Name') ?></th>
                    <td><?= h($admin->family_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($admin->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($admin->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Name') ?></th>
                    <td><?= h($admin->user_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($admin->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Admin Agents') ?></h4>
                <?php if (!empty($admin->admin_agents)) : ?>
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
                            <?php foreach ($admin->admin_agents as $adminAgents) : ?>
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

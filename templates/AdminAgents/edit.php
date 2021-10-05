<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminAgent $adminAgent
 * @var string[]|\Cake\Collection\CollectionInterface $agents
 * @var string[]|\Cake\Collection\CollectionInterface $admins
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $adminAgent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $adminAgent->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Admin Agents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="adminAgents form content">
            <?= $this->Form->create($adminAgent) ?>
            <fieldset>
                <legend><?= __('Edit Admin Agent') ?></legend>
                <?php
                    echo $this->Form->control('price');
                    echo $this->Form->control('comments');
                    echo $this->Form->control('cooperation_start_date');
                    echo $this->Form->control('cooperation_end_date');
                    echo $this->Form->control('agent_id', ['options' => $agents, 'empty' => true]);
                    echo $this->Form->control('admin_id', ['options' => $admins, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

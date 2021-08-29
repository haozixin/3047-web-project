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
                ['action' => 'delete', $adminAgent->agent_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $adminAgent->agent_id), 'class' => 'side-nav-item']
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
                    echo $this->Form->control('id');
                    echo $this->Form->control('cooperation_start_date');
                    echo $this->Form->control('cooperation_end_date');
                    echo $this->Form->control('price');
                    echo $this->Form->control('comments');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

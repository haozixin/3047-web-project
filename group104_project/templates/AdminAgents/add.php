<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminAgent $adminAgent
 * @var \Cake\Collection\CollectionInterface|string[] $agents
 * @var \Cake\Collection\CollectionInterface|string[] $admins
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Admin Agents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="adminAgents form content">
            <?= $this->Form->create($adminAgent) ?>
            <fieldset>
                <legend><?= __('Add Admin Agent') ?></legend>
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

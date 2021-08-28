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
            <?= $this->Html->link(__('List Agents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="agents form content">
            <?= $this->Form->create($agent) ?>
            <fieldset>
                <legend><?= __('Add Agent') ?></legend>
                <?php
                    echo $this->Form->control('given_name');
                    echo $this->Form->control('family_name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('address');
                    echo $this->Form->control('subscription_status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<div class="h3 mb-2 text-gray-800">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $customer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id), 'class' => 'side-nav-item']
            ) ?>

        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customers form content">
            <?= $this->Form->create($customer) ?>
            <fieldset>
                <legend><?= __('Edit The Customer') ?></legend>
                <?php
                    echo $this->Form->control('given_name');
                    echo $this->Form->control('family_name');
                    echo $this->Form->control('country');
                    echo $this->Form->control('state');
                    echo $this->Form->control('city');
                    echo $this->Form->control('street');
                    echo $this->Form->control('email');
                    echo $this->Form->control('user_name');
                    echo $this->Form->control('password');
                    echo $this->Form->control('subscription_status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

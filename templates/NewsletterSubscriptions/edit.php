<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NewsletterSubscription $newsletterSubscription
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $newsletterSubscription->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $newsletterSubscription->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Newsletter Subscriptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="newsletterSubscriptions form content">
            <?= $this->Form->create($newsletterSubscription) ?>
            <fieldset>
                <legend><?= __('Edit Newsletter Subscription') ?></legend>
                <?php
                    echo $this->Form->control('customer_name');
                    echo $this->Form->control('customer_email');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

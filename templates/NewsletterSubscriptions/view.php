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
            <?= $this->Html->link(__('Edit Newsletter Subscription'), ['action' => 'edit', $newsletterSubscription->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Newsletter Subscription'), ['action' => 'delete', $newsletterSubscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newsletterSubscription->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Newsletter Subscriptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Newsletter Subscription'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="newsletterSubscriptions view content">
            <h3><?= h($newsletterSubscription->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Customer Name') ?></th>
                    <td><?= h($newsletterSubscription->customer_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Email') ?></th>
                    <td><?= h($newsletterSubscription->customer_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($newsletterSubscription->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

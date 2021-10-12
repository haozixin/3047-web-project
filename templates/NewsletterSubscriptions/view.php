<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NewsletterSubscription $newsletterSubscription
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="newsletterSubscriptions view content">
            <h3>Subscription ID: <?= h($newsletterSubscription->id) ?></h3>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th><?= __('Customer Name') ?></th>
                    <td><?= h($newsletterSubscription->customer_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Email') ?></th>
                    <td><?= h($newsletterSubscription->customer_email) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

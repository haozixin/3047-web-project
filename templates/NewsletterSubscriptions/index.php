<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NewsletterSubscription[]|\Cake\Collection\CollectionInterface $newsletterSubscriptions
 */
 echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
  echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
  echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);

?>
<div class="newsletterSubscriptions index content">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('NewsletterSubscriptions') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New Subscription</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                <tr>
                    <th><?= h('id') ?></th>
                    <th><?= h('customer_name') ?></th>
                    <th><?= h('customer_email') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($newsletterSubscriptions as $newsletterSubscription): ?>
                <tr>
                    <td><?= $this->Number->format($newsletterSubscription->id) ?></td>
                    <td><?= h($newsletterSubscription->customer_name) ?></td>
                    <td><?= h($newsletterSubscription->customer_email) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $newsletterSubscription->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $newsletterSubscription->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $newsletterSubscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newsletterSubscription->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
     <script>
            $(document).ready(function() {
                $('#dataTable').DataTable();
            });
        </script>
</div>

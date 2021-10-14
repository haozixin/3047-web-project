<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
 echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
 echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
 echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="<?= $this->Url->build(['action' => 'index']) ?>"
       class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-arrow-circle-left fa-sm text-white-50"></i>Go back</a>
</div>
<div class="row">
    <div class="column-responsive column-80">
        <div class="customers view content">
            <h3><?= h("Customer Details") ?></h3>
            <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th><?= __('Given Name') ?></th>
                    <td><?= h($customer->given_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Family Name') ?></th>
                    <td><?= h($customer->family_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($customer->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Name') ?></th>
                    <td><?= h($customer->user_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($customer->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($customer->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($customer->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street') ?></th>
                    <td><?= h($customer->street) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($customer->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subscription Status') ?></th>
                    <td><?= h($customer->subscription_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($customer->id) ?></td>
                </tr>
            </table>

           
        </div>
    </div>
</div>

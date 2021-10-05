<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 * @var \Cake\Collection\CollectionInterface|string[] $products
 * @var \Cake\Collection\CollectionInterface|string[] $agents
 */
 $formTemplate=[
                'input' => '<input type="{{type}}" name="{{name}}" class="form-control" {{attrs}}/>',
                'inputSubmit' => '<input type="{{type}}"{{attrs}}/>',
                'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
                'inputContainerError' => '<div class="input {{type}}{{required}} error">{{content}}{{error}}</div>',
                'label' => '<label{{attrs}}class="form-label">{{text}}</label>',
                'textarea' => '<textarea name="{{name}}"class="form-control"{{attrs}}>{{value}}</textarea>',

                ];
 $this ->Form->setTemplates($formTemplate);
?>


    <div class="column-responsive column-80">
        <div class="orders form content">
            <?= $this->Form->create($order) ?>
            <fieldset>
                <legend><?= __('Add Order') ?></legend>
                <legend><?= __('Product Name:') ?> <?=$this->getRequest()->getSession()->read('name');?> </legend>
                <?php

                    echo $this->Form->control('quantity');
                    echo $this->Form->control('deal_date');
                    echo $this->Form->control('deal_comment');
                    echo $this->Form->control('shipping_address');
                    echo $this->Form->control('agent_id', ['options' => $agentsForOrder, 'empty' => true]);

                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>

</div>

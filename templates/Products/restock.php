<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
$formTemplate = [
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control" {{attrs}}/>',
    'inputSubmit' => '<input type="{{type}}"{{attrs}}/>',
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'inputContainerError' => '<div class="input {{type}}{{required}} error">{{content}}{{error}}</div>',
    'label' => '<label{{attrs}}class="form-label">{{text}}</label>',
    'textarea' => '<textarea name="{{name}}"class="form-control"{{attrs}}>{{value}}</textarea>',
    'option' => '<option value="{{value}}"{{attrs}}>{{text}}</option>',
    'error' => '<div class="error-message">{{content}}</div>',

];

$this->Form->setTemplates($formTemplate);
?>

<div class="column-responsive column-80">
    <div class="products view content">
        <h3><?= h("Details") ?></h3>
        <table>
            <tr>
                <th><?= __('Name') ?></th>
                <td><?= h($product->name) ?></td>
            </tr>
            <tr>
                <th><?= __('Product Type') ?></th>
                <td><?= h($product->product_type) ?></td>
            </tr>
            <tr>
                <th><?= __('Agent Price') ?></th>
                <td><?= $this->Number->format($product->agent_price) ?></td>
            </tr>
            <tr>
                <th><?= __('Quantity (In 1 Unit)') ?></th>
                <td><?= $this->Number->format($product->quantity) ?></td>
            </tr>
        </table>
        <div class="text">
            <strong><?= __('Description') ?></strong>
            <blockquote>
                <?= $this->Text->autoParagraph(h($product->description)); ?>
            </blockquote>
        </div>


        <div class="column-responsive column-80">
            <div class="products form content">
                <?= $this->Form->create($product) ?>
                <fieldset>
                    <legend><?= __('Please enter restock amount') ?></legend>
                    <?php
                    echo $this->Form->control('Quantity');

                    ?>

                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                    <?= $this->Form->end() ?>

                </fieldset>


            </div>
        </div>
        <div class="related">
            <h4><?= __('Related Product Recipes') ?></h4>
            <?php if (!empty($product->product_recipes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Recipe Title') ?></th>
                            <th><?= __('Last Modify Time') ?></th>
                            <th><?= __('Recipe Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->product_recipes as $productRecipes) : ?>
                            <tr>
                                <td><?= h($productRecipes->id) ?></td>
                                <td><?= h($productRecipes->recipe_title) ?></td>
                                <td><?= h($productRecipes->last_modify_time) ?></td>
                                <td><?= h($productRecipes->recipe_id) ?></td>
                                <td><?= h($productRecipes->product_id) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'ProductRecipes', 'action' => 'view', $productRecipes->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductRecipes', 'action' => 'edit', $productRecipes->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductRecipes', 'action' => 'delete', $productRecipes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productRecipes->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>

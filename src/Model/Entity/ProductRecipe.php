<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductRecipe Entity
 *
 * @property int $id
 * @property string $recipe_title
 * @property \Cake\I18n\FrozenDate $last_modify_time
 * @property int $recipe_id
 * @property int $product_id
 *
 * @property \App\Model\Entity\Recipe $recipe
 * @property \App\Model\Entity\Product $product
 */
class ProductRecipe extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'recipe_title' => true,
        'last_modify_time' => true,
        'recipe_id' => true,
        'product_id' => true,
        'recipe' => true,
        'product' => true,
    ];
}

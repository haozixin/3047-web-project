<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Recipe Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $category
 * @property int $video_id
 * @property int $photo_id
 *
 * @property \App\Model\Entity\Video $video
 * @property \App\Model\Entity\Photo $photo
 * @property \App\Model\Entity\ProductRecipe[] $product_recipes
 */
class Recipe extends Entity
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
        'title' => true,
        'description' => true,
        'category' => true,
        'video_id' => true,
        'photo_id' => true,
        'video' => true,
        'photo' => true,
        'product_recipes' => true,
    ];
}

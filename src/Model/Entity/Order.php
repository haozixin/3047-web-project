<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property int $amount
 * @property int $quantity
 * @property \Cake\I18n\FrozenDate $deal_date
 * @property string $deal_comment
 * @property string $shipping_address
 * @property int $customer_id
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Product[] $products
 */
class Order extends Entity
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
        'amount' => true,
        'quantity' => true,
        'deal_date' => true,
        'deal_comment' => true,
        'shipping_address' => true,
        'customer_id' => true,
        'customer' => true,
        'products' => true,
    ];
}

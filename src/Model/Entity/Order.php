<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property int $product_id
 * @property int $quantity
 * @property \Cake\I18n\FrozenDate $deal_date
 * @property string $deal_comment
 * @property string $shipping_address
 * @property int|null $customer_id
 * @property bool $email_sent
 * @property string|null $customer_email
 * @property string $Paid
 * @property string $total_price
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Customer $customer
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
        'product_id' => true,
        'quantity' => true,
        'deal_date' => true,
        'deal_comment' => true,
        'shipping_address' => true,
        'customer_id' => true,
        'email_sent' => true,
        'customer_email' => true,
        'Paid' => true,
        'total_price' => true,
        'product' => true,
        'customer' => true,
    ];
}

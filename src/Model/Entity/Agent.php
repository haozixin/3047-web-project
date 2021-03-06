<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agent Entity
 *
 * @property int $id
 * @property string $given_name
 * @property string|null $family_name
 * @property string $email
 * @property string $address
 * @property string $subscription_status
 *
 * @property \App\Model\Entity\AdminAgent[] $admin_agents
 */
class Agent extends Entity
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
        'given_name' => true,
        'family_name' => true,
        'country' => true,
        'state' => true,
        'city' => true,
        'street' => true,
        'email' => true,
        'address' => true,
        'subscription_status' => true,
        'user_name' => true,
        'password' => true,
    ];
}

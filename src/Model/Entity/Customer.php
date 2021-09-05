<?php
//declare(strict_types=1);
namespace App\Model\Entity;


use Authentication\PasswordHasher\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property string $given_name
 * @property string $family_name
 * @property string $address
 * @property string $email
 * @property string $subscription_status
 * @property string $user_name
 * @property string $password
 *
 * @property \App\Model\Entity\Order[] $orders
 */
class Customer extends Entity
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
        'address' => true,
        'email' => true,
        'subscription_status' => true,
        'user_name'=>true,
        'password'=>true,
        'orders' => true,

    ];
//Zixin Add this method for sign in
    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
       return "you are not set password";
    }

}


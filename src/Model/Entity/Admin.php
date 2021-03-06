<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Authentication\PasswordHasher\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * Admin Entity
 *
 * @property int $id
 * @property string $given_name
 * @property string $family_name
 * @property string $email
 * @property string $password
 * @property string $user_name
 *
 * @property \App\Model\Entity\AdminAgent[] $admin_agents
 */
class Admin extends Entity
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
        'email' => true,
        'password' => true,
        'user_name' => true,
        'admin_agents' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    //Zixin Add this method for sign in
    protected function _setPassword(string $password): ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
        return "no password";
    }
}

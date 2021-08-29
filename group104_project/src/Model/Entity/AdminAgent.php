<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AdminAgent Entity
 *
 * @property int $id
 * @property int $price
 * @property string $comments
 * @property \Cake\I18n\FrozenDate $cooperation_start_date
 * @property \Cake\I18n\FrozenDate $cooperation_end_date
 * @property int $agent_id
 * @property int $admin_id
 *
 * @property \App\Model\Entity\Agent $agent
 * @property \App\Model\Entity\Admin $admin
 */
class AdminAgent extends Entity
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
        'price' => true,
        'comments' => true,
        'cooperation_start_date' => true,
        'cooperation_end_date' => true,
        'agent_id' => true,
        'admin_id' => true,
        'agent' => true,
        'admin' => true,
    ];
}

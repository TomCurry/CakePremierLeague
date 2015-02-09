<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Player Entity.
 */
class Player extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'first_name' => true,
        'last_name' => true,
        'birth' => true,
        'country' => true,
        'position' => true,
        'squad_number' => true,
        'club_id' => true,
        'club' => true,
        'teams' => true,
    ];
}

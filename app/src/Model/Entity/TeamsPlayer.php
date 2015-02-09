<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TeamsPlayer Entity.
 */
class TeamsPlayer extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'team_id' => true,
        'player_id' => true,
        'team' => true,
        'player' => true,
    ];
}

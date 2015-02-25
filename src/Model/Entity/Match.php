<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Match Entity.
 */
class Match extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'home_team_id' => true,
        'away_team_id' => true,
        'stadium_id' => true,
        'matchday_id' => true,
        'stadia' => true,
        'matchday' => true,
        'results' => true,
        'teams' => true,
    ];

    
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MatchesTeam Entity.
 */
class MatchesTeam extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'team_id' => true,
        'match_id' => true,
        'team' => true,
        'match' => true,
    ];
}

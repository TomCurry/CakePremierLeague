<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ranking Entity.
 */
class Ranking extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'league_id' => true,
        'club_id' => true,
        'played' => true,
        'won' => true,
        'draw' => true,
        'loss' => true,
        'goals_for' => true,
        'goals_against' => true,
        'goals_difference' => true,
        'points' => true,
        'league' => true,
        'club' => true,
    ];
}

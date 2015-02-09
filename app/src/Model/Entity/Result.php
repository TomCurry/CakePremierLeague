<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Result Entity.
 */
class Result extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'match_id' => true,
        'home_score' => true,
        'away_score' => true,
        'score' => true,
        'match' => true,
    ];
}

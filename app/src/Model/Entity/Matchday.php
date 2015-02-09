<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Matchday Entity.
 */
class Matchday extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'match_week' => true,
        'matches' => true,
    ];
}

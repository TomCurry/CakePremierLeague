<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Club Entity.
 */
class Club extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'full_name' => true,
        'nickname' => true,
        'abbreviation' => true,
        'founded' => true,
        'crest_image' => true,
        'site' => true,
        'manager_id' => true,
        'stadium_id' => true,
        'manager' => true,
        'stadia' => true,
        'players' => true,
        'rankings' => true,
        'teams' => true,
    ];
}

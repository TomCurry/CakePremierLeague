<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Stadia Entity.
 */
class Stadia extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'capacity' => true,
        'opened' => true,
        'location' => true,
    ];
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Manager Entity.
 */
class Manager extends Entity
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
        'clubs' => true,
    ];
    
    protected function _getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}

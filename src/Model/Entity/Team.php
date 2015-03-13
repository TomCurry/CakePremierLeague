<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Team Entity.
 */
class Team extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'club_id' => true,
        'player_id' => true,
        'club' => true,
        'players' => true,
        'matches' => true,
        'name' => true
    ];
    
    protected function _getTeamClub() {
        return $this->_properties['club']['abbreviation'] . ' - ' . $this->_properties['name'];
    }    
}
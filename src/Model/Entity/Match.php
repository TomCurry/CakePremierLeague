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
        'teams' => true
    ];
    
    protected function _getHomeClub() {
        return $this->_properties['home_team']['club_id'] . ' - ' . $this->_properties['home_team']['name'];
    }
    
    protected function _getAwayClub() {
        return $this->_properties['away_team']['club_id'] . ' - ' . $this->_properties['away_team']['name'];
    }    
    
}

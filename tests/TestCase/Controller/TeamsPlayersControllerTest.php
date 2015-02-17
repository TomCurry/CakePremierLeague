<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TeamsPlayersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TeamsPlayersController Test Case
 */
class TeamsPlayersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'TeamsPlayers' => 'app.teams_players',
        'Teams' => 'app.teams',
        'Clubs' => 'app.clubs',
        'Managers' => 'app.managers',
        'Stadia' => 'app.stadia',
        'Players' => 'app.players',
        'Rankings' => 'app.rankings',
        'Leagues' => 'app.leagues',
        'Matches' => 'app.matches',
        'Matchdays' => 'app.matchdays',
        'Results' => 'app.results',
        'MatchesTeams' => 'app.matches_teams'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

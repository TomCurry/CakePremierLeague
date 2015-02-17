<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ManagersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ManagersController Test Case
 */
class ManagersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Managers' => 'app.managers',
        'Clubs' => 'app.clubs',
        'Stadia' => 'app.stadia',
        'Players' => 'app.players',
        'Teams' => 'app.teams',
        'TeamsPlayers' => 'app.teams_players',
        'Matches' => 'app.matches',
        'Matchdays' => 'app.matchdays',
        'Results' => 'app.results',
        'MatchesTeams' => 'app.matches_teams',
        'Rankings' => 'app.rankings',
        'Leagues' => 'app.leagues'
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

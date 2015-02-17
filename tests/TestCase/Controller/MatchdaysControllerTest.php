<?php
namespace App\Test\TestCase\Controller;

use App\Controller\MatchdaysController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\MatchdaysController Test Case
 */
class MatchdaysControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Matchdays' => 'app.matchdays',
        'Matches' => 'app.matches',
        'Stadia' => 'app.stadia',
        'Results' => 'app.results',
        'Teams' => 'app.teams',
        'Clubs' => 'app.clubs',
        'Managers' => 'app.managers',
        'Players' => 'app.players',
        'TeamsPlayers' => 'app.teams_players',
        'Rankings' => 'app.rankings',
        'Leagues' => 'app.leagues',
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

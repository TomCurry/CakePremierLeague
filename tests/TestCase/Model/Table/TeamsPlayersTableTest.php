<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TeamsPlayersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TeamsPlayersTable Test Case
 */
class TeamsPlayersTableTest extends TestCase
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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TeamsPlayers') ? [] : ['className' => 'App\Model\Table\TeamsPlayersTable'];
        $this->TeamsPlayers = TableRegistry::get('TeamsPlayers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TeamsPlayers);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

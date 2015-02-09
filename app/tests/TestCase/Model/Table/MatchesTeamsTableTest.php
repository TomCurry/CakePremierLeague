<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MatchesTeamsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MatchesTeamsTable Test Case
 */
class MatchesTeamsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'MatchesTeams' => 'app.matches_teams',
        'Teams' => 'app.teams',
        'Matches' => 'app.matches',
        'Stadia' => 'app.stadia',
        'Matchdays' => 'app.matchdays',
        'Results' => 'app.results'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MatchesTeams') ? [] : ['className' => 'App\Model\Table\MatchesTeamsTable'];
        $this->MatchesTeams = TableRegistry::get('MatchesTeams', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MatchesTeams);

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

<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MatchesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MatchesTable Test Case
 */
class MatchesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Matches' => 'app.matches',
        'Stadia' => 'app.stadia',
        'Matchdays' => 'app.matchdays',
        'Results' => 'app.results',
        'Teams' => 'app.teams',
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
        $config = TableRegistry::exists('Matches') ? [] : ['className' => 'App\Model\Table\MatchesTable'];
        $this->Matches = TableRegistry::get('Matches', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Matches);

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

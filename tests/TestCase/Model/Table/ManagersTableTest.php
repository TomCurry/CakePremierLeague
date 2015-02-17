<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ManagersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ManagersTable Test Case
 */
class ManagersTableTest extends TestCase
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
        'Rankings' => 'app.rankings',
        'Teams' => 'app.teams'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Managers') ? [] : ['className' => 'App\Model\Table\ManagersTable'];
        $this->Managers = TableRegistry::get('Managers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Managers);

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
}

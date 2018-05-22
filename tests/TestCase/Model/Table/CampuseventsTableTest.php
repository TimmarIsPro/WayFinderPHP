<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CampuseventsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CampuseventsTable Test Case
 */
class CampuseventsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CampuseventsTable
     */
    public $Campusevents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.campusevents'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Campusevents') ? [] : ['className' => CampuseventsTable::class];
        $this->Campusevents = TableRegistry::get('Campusevents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Campusevents);

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

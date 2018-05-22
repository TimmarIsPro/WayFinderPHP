<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CampusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CampusesTable Test Case
 */
class CampusesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CampusesTable
     */
    public $Campuses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.campuses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Campuses') ? [] : ['className' => CampusesTable::class];
        $this->Campuses = TableRegistry::get('Campuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Campuses);

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

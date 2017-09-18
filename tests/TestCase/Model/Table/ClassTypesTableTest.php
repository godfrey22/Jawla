<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClassTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClassTypesTable Test Case
 */
class ClassTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClassTypesTable
     */
    public $ClassTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.class_types',
        'app.studios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ClassTypes') ? [] : ['className' => ClassTypesTable::class];
        $this->ClassTypes = TableRegistry::get('ClassTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClassTypes);

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

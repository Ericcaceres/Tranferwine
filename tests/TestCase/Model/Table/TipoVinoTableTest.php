<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoVinoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoVinoTable Test Case
 */
class TipoVinoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoVinoTable
     */
    public $TipoVino;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipo_vino'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TipoVino') ? [] : ['className' => TipoVinoTable::class];
        $this->TipoVino = TableRegistry::get('TipoVino', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TipoVino);

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

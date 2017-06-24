<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChamadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChamadosTable Test Case
 */
class ChamadosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ChamadosTable
     */
    public $Chamados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.chamados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Chamados') ? [] : ['className' => ChamadosTable::class];
        $this->Chamados = TableRegistry::get('Chamados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Chamados);

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

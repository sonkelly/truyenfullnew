<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaintagTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaintagTable Test Case
 */
class MaintagTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MaintagTable
     */
    protected $Maintag;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Maintag',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Maintag') ? [] : ['className' => MaintagTable::class];
        $this->Maintag = $this->getTableLocator()->get('Maintag', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Maintag);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MaintagTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

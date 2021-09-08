<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdminAgentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdminAgentsTable Test Case
 */
class AdminAgentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AdminAgentsTable
     */
    protected $AdminAgents;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.AdminAgents',
        'app.Agents',
        'app.Admins',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AdminAgents') ? [] : ['className' => AdminAgentsTable::class];
        $this->AdminAgents = $this->getTableLocator()->get('AdminAgents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->AdminAgents);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AdminAgentsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\AdminAgentsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

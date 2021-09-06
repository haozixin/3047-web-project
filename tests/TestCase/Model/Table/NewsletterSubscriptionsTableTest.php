<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NewsletterSubscriptionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NewsletterSubscriptionsTable Test Case
 */
class NewsletterSubscriptionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NewsletterSubscriptionsTable
     */
    protected $NewsletterSubscriptions;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.NewsletterSubscriptions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('NewsletterSubscriptions') ? [] : ['className' => NewsletterSubscriptionsTable::class];
        $this->NewsletterSubscriptions = $this->getTableLocator()->get('NewsletterSubscriptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->NewsletterSubscriptions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\NewsletterSubscriptionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

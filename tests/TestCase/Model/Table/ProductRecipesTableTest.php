<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductRecipesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductRecipesTable Test Case
 */
class ProductRecipesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductRecipesTable
     */
    protected $ProductRecipes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ProductRecipes',
        'app.Recipes',
        'app.Products',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ProductRecipes') ? [] : ['className' => ProductRecipesTable::class];
        $this->ProductRecipes = $this->getTableLocator()->get('ProductRecipes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ProductRecipes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProductRecipesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProductRecipesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

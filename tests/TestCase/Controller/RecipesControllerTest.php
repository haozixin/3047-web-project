<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\RecipesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\RecipesController Test Case
 *
 * @uses \App\Controller\RecipesController
 */
class RecipesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Recipes',
        'app.ProductRecipes',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\RecipesController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\RecipesController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\RecipesController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\RecipesController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\RecipesController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test display method
     *
     * @return void
     * @uses \App\Controller\RecipesController::display()
     */
    public function testDisplay(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test displayagent method
     *
     * @return void
     * @uses \App\Controller\RecipesController::displayagent()
     */
    public function testDisplayagent(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test displaycustomer method
     *
     * @return void
     * @uses \App\Controller\RecipesController::displaycustomer()
     */
    public function testDisplaycustomer(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test logout method
     *
     * @return void
     * @uses \App\Controller\RecipesController::logout()
     */
    public function testLogout(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

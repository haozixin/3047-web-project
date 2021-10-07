<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ProductsController Test Case
 *
 * @uses \App\Controller\ProductsController
 */
class ProductsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Products',
        'app.Orders',
        'app.ProductRecipes',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\ProductsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\ProductsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test restock method
     *
     * @return void
     * @uses \App\Controller\ProductsController::restock()
     */
    public function testRestock(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test update method
     *
     * @return void
     * @uses \App\Controller\ProductsController::update()
     */
    public function testUpdate(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test cancel method
     *
     * @return void
     * @uses \App\Controller\ProductsController::cancel()
     */
    public function testCancel(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\ProductsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\ProductsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\ProductsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test display method
     *
     * @return void
     * @uses \App\Controller\ProductsController::display()
     */
    public function testDisplay(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test logout method
     *
     * @return void
     * @uses \App\Controller\ProductsController::logout()
     */
    public function testLogout(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

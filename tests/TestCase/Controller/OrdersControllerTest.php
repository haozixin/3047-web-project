<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\OrdersController Test Case
 *
 * @uses \App\Controller\OrdersController
 */
class OrdersControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Orders',
        'app.Products',
        'app.Customers',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\OrdersController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test confirm method
     *
     * @return void
     * @uses \App\Controller\OrdersController::confirm()
     */
    public function testConfirm(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\OrdersController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\OrdersController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\OrdersController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\OrdersController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test mark method
     *
     * @return void
     * @uses \App\Controller\OrdersController::mark()
     */
    public function testMark(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test marking method
     *
     * @return void
     * @uses \App\Controller\OrdersController::marking()
     */
    public function testMarking(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test marking1 method
     *
     * @return void
     * @uses \App\Controller\OrdersController::marking1()
     */
    public function testMarking1(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

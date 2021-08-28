<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductRecipesFixture
 */
class ProductRecipesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'product_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'recipe_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pro_rec_title' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'product recipes title', 'precision' => null],
        'last_modify_time' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'the date and time last edit it', 'precision' => null],
        '_indexes' => [
            'recipe_id' => ['type' => 'index', 'columns' => ['recipe_id'], 'length' => []],
            'product_id' => ['type' => 'index', 'columns' => ['product_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'product_recipes_ibfk_2' => ['type' => 'foreign', 'columns' => ['recipe_id'], 'references' => ['recipes', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'product_recipes_ibfk_1' => ['type' => 'foreign', 'columns' => ['product_id'], 'references' => ['products', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'product_id' => 1,
                'recipe_id' => 1,
                'pro_rec_title' => 'Lorem ipsum dolor sit amet',
                'last_modify_time' => '2021-08-28',
            ],
        ];
        parent::init();
    }
}

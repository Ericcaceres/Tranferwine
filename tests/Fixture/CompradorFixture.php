<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CompradorFixture
 *
 */
class CompradorFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'comprador';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_compra' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_producto' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'tipo_producto1' => ['type' => 'index', 'columns' => ['tipo_producto'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_compra'], 'length' => []],
            'comprador_ibfk_1' => ['type' => 'foreign', 'columns' => ['tipo_producto'], 'references' => ['produto', 'tipo_producto'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'comprador_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_compra'], 'references' => ['login', 'usuario'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id_compra' => 1,
            'tipo_producto' => 1
        ],
    ];
}

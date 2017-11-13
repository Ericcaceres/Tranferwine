<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProdutoFixture
 *
 */
class ProdutoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'produto';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_venta' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_producto' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'variedad' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'procedencia_elaboracion' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'anio_elavoracion' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'volumen' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'alcohol' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'acidez_volatil' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'acidez_total' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'azucar' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'extracto_seco' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'grado_brix' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'precio' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_venta'], 'length' => []],
            'tipo_producto' => ['type' => 'unique', 'columns' => ['tipo_producto'], 'length' => []],
            'precio' => ['type' => 'unique', 'columns' => ['precio'], 'length' => []],
            'variedad' => ['type' => 'unique', 'columns' => ['variedad'], 'length' => []],
            'produto_ibfk_1' => ['type' => 'foreign', 'columns' => ['tipo_producto'], 'references' => ['tipo_vino', 'id_pruducto'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id_venta' => 1,
            'tipo_producto' => 1,
            'variedad' => 'Lorem ipsum dolor ',
            'procedencia_elaboracion' => 'Lorem ipsum dolor ',
            'anio_elavoracion' => '2017-11-07',
            'volumen' => 1,
            'alcohol' => 1,
            'acidez_volatil' => 1,
            'acidez_total' => 1,
            'azucar' => 1,
            'extracto_seco' => 1,
            'grado_brix' => 1,
            'precio' => 1
        ],
    ];
}

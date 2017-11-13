<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id_venta
 * @property int $tipo_producto
 * @property string $variedad
 * @property string $procedencia_elaboracion
 * @property \Cake\I18n\FrozenDate $anio_elavoracion
 * @property float $volumen
 * @property float $alcohol
 * @property float $acidez_volatil
 * @property float $acidez_total
 * @property float $azucar
 * @property float $extracto_seco
 * @property float $grado_brix
 * @property int $precio
 */
class Produto extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'tipo_producto' => true,
        'variedad' => true,
        'procedencia_elaboracion' => true,
        'anio_elavoracion' => true,
        'volumen' => true,
        'alcohol' => true,
        'acidez_volatil' => true,
        'acidez_total' => true,
        'azucar' => true,
        'extracto_seco' => true,
        'grado_brix' => true,
        'precio' => true
    ];
}

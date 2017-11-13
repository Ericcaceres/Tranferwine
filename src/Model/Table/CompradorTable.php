<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Comprador Model
 *
 * @method \App\Model\Entity\Comprador get($primaryKey, $options = [])
 * @method \App\Model\Entity\Comprador newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Comprador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Comprador|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Comprador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Comprador[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Comprador findOrCreate($search, callable $callback = null, $options = [])
 */
class CompradorTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('comprador');
        $this->setDisplayField('id_compra');
        $this->setPrimaryKey('id_compra');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id_compra')
            ->allowEmpty('id_compra', 'create');

        $validator
            ->integer('tipo_producto')
            ->requirePresence('tipo_producto', 'create')
            ->notEmpty('tipo_producto');

        return $validator;
    }
}

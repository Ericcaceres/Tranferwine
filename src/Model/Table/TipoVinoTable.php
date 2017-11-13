<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TipoVino Model
 *
 * @method \App\Model\Entity\TipoVino get($primaryKey, $options = [])
 * @method \App\Model\Entity\TipoVino newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TipoVino[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TipoVino|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoVino patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TipoVino[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TipoVino findOrCreate($search, callable $callback = null, $options = [])
 */
class TipoVinoTable extends Table
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

        $this->setTable('tipo_vino');
        $this->setDisplayField('id_pruducto');
        $this->setPrimaryKey('id_pruducto');
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
            ->integer('id_pruducto')
            ->allowEmpty('id_pruducto', 'create');

        $validator
            ->integer('tipo_producto')
            ->requirePresence('tipo_producto', 'create')
            ->notEmpty('tipo_producto');

        return $validator;
    }
}

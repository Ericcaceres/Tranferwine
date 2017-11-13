<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produto Model
 *
 * @method \App\Model\Entity\Produto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Produto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Produto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Produto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Produto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Produto findOrCreate($search, callable $callback = null, $options = [])
 */
class ProdutoTable extends Table
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

        $this->setTable('produto');
        $this->setDisplayField('id_venta');
        $this->setPrimaryKey('id_venta');
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
            ->integer('id_venta')
            ->allowEmpty('id_venta', 'create');

        $validator
            ->integer('tipo_producto')
            ->requirePresence('tipo_producto', 'create')
            ->notEmpty('tipo_producto')
            ->add('tipo_producto', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('variedad')
            ->requirePresence('variedad', 'create')
            ->notEmpty('variedad')
            ->add('variedad', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('procedencia_elaboracion')
            ->requirePresence('procedencia_elaboracion', 'create')
            ->notEmpty('procedencia_elaboracion');

        $validator
            ->date('anio_elavoracion')
            ->requirePresence('anio_elavoracion', 'create')
            ->notEmpty('anio_elavoracion');

        $validator
            ->numeric('volumen')
            ->requirePresence('volumen', 'create')
            ->notEmpty('volumen');

        $validator
            ->numeric('alcohol')
            ->requirePresence('alcohol', 'create')
            ->notEmpty('alcohol');

        $validator
            ->numeric('acidez_volatil')
            ->requirePresence('acidez_volatil', 'create')
            ->notEmpty('acidez_volatil');

        $validator
            ->numeric('acidez_total')
            ->requirePresence('acidez_total', 'create')
            ->notEmpty('acidez_total');

        $validator
            ->numeric('azucar')
            ->requirePresence('azucar', 'create')
            ->notEmpty('azucar');

        $validator
            ->numeric('extracto_seco')
            ->requirePresence('extracto_seco', 'create')
            ->notEmpty('extracto_seco');

        $validator
            ->numeric('grado_brix')
            ->requirePresence('grado_brix', 'create')
            ->notEmpty('grado_brix');

        $validator
            ->integer('precio')
            ->requirePresence('precio', 'create')
            ->notEmpty('precio')
            ->add('precio', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['tipo_producto']));
        $rules->add($rules->isUnique(['precio']));
        $rules->add($rules->isUnique(['variedad']));

        return $rules;
    }
}

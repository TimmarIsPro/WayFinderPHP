<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Floors Model
 *
 * @method \App\Model\Entity\Floor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Floor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Floor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Floor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Floor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Floor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Floor findOrCreate($search, callable $callback = null, $options = [])
 */
class FloorsTable extends Table
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

        $this->setTable('floors');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('buildings');
        $this->hasMany('rooms');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('floor')
            ->allowEmpty('floor');

        $validator
            ->integer('buildingId')
            ->allowEmpty('buildingId');

        $validator
            ->integer('mapId')
            ->allowEmpty('mapId');

        return $validator;
    }
}

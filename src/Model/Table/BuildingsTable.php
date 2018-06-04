<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Buildings Model
 *
 * @method \App\Model\Entity\Building get($primaryKey, $options = [])
 * @method \App\Model\Entity\Building newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Building[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Building|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Building patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Building[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Building findOrCreate($search, callable $callback = null, $options = [])
 */
class BuildingsTable extends Table
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

        $this->setTable('buildings');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('campuses');
        $this->hasMany('floors');
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
            ->integer('campusId')
            ->allowEmpty('campusId');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->allowEmpty('address');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmpty('name');

        $validator
            ->integer('gridPointA')
            ->allowEmpty('gridPointA');

        $validator
            ->integer('gridPointB')
            ->allowEmpty('gridPointB');

        $validator
            ->integer('gridPointC')
            ->allowEmpty('gridPointC');

        $validator
            ->integer('gridPointD')
            ->allowEmpty('gridPointD');

        return $validator;
    }
}

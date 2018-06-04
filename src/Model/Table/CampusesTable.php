<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Campuses Model
 *
 * @method \App\Model\Entity\Campus get($primaryKey, $options = [])
 * @method \App\Model\Entity\Campus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Campus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Campus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Campus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Campus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Campus findOrCreate($search, callable $callback = null, $options = [])
 */
class CampusesTable extends Table
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

        $this->setTable('campuses');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
        $this->hasMany('campusevents')
            ->setForeignKey('campusId');
        $this->hasMany('buildings')
            ->setForeignKey('id');
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
            ->scalar('address')
            ->maxLength('address', 255)
            ->allowEmpty('address');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmpty('name');

        $validator
            ->scalar('website')
            ->maxLength('website', 255)
            ->allowEmpty('website');

        $validator
            ->integer('mapId')
            ->allowEmpty('mapId');

        return $validator;
    }
}

<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Campusevents Model
 *
 * @method \App\Model\Entity\Campusevent get($primaryKey, $options = [])
 * @method \App\Model\Entity\Campusevent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Campusevent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Campusevent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Campusevent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Campusevent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Campusevent findOrCreate($search, callable $callback = null, $options = [])
 */
class CampuseventsTable extends Table
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

        $this->setTable('campusevents');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('campuses');
        $this->belongsTo('events');
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
            ->integer('eventId')
            ->allowEmpty('eventId');

        $validator
            ->integer('campusId')
            ->allowEmpty('campusId');

        return $validator;
    }
}

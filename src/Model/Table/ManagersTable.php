<?php
namespace App\Model\Table;

use App\Model\Entity\Manager;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Managers Model
 */
class ManagersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('managers');
        $this->displayField('FullName');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('Clubs', [
            'foreignKey' => 'manager_id'
        ]);
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name')
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name')
            ->add('appointed', 'valid', ['rule' => 'date'])
            ->requirePresence('appointed', 'create')
            ->notEmpty('appointed');

        return $validator;
    }
}

<?php
namespace App\Model\Table;

use App\Model\Entity\Stadia;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Stadia Model
 */
class StadiaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('stadia');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
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
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('capacity', 'valid', ['rule' => 'numeric'])
            ->requirePresence('capacity', 'create')
            ->notEmpty('capacity')
            ->add('opened', 'valid', ['rule' => 'date'])
            ->requirePresence('opened', 'create')
            ->notEmpty('opened')
            ->requirePresence('location', 'create')
            ->notEmpty('location');

        return $validator;
    }
}

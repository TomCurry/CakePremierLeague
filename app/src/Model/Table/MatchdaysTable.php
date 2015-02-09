<?php
namespace App\Model\Table;

use App\Model\Entity\Matchday;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Matchdays Model
 */
class MatchdaysTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('matchdays');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->hasMany('Matches', [
            'foreignKey' => 'matchday_id'
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
            ->add('match_week', 'valid', ['rule' => 'numeric'])
            ->requirePresence('match_week', 'create')
            ->notEmpty('match_week');

        return $validator;
    }
}

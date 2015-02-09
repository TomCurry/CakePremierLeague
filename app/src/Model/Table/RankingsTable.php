<?php
namespace App\Model\Table;

use App\Model\Entity\Ranking;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rankings Model
 */
class RankingsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('rankings');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Leagues', [
            'foreignKey' => 'league_id'
        ]);
        $this->belongsTo('Clubs', [
            'foreignKey' => 'club_id'
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
            ->add('league_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('league_id', 'create')
            ->notEmpty('league_id')
            ->add('club_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('club_id', 'create')
            ->notEmpty('club_id')
            ->add('played', 'valid', ['rule' => 'numeric'])
            ->requirePresence('played', 'create')
            ->notEmpty('played')
            ->add('won', 'valid', ['rule' => 'numeric'])
            ->requirePresence('won', 'create')
            ->notEmpty('won')
            ->add('draw', 'valid', ['rule' => 'numeric'])
            ->requirePresence('draw', 'create')
            ->notEmpty('draw')
            ->add('loss', 'valid', ['rule' => 'numeric'])
            ->requirePresence('loss', 'create')
            ->notEmpty('loss')
            ->add('goals_for', 'valid', ['rule' => 'numeric'])
            ->requirePresence('goals_for', 'create')
            ->notEmpty('goals_for')
            ->add('goals_against', 'valid', ['rule' => 'numeric'])
            ->requirePresence('goals_against', 'create')
            ->notEmpty('goals_against')
            ->add('goals_difference', 'valid', ['rule' => 'numeric'])
            ->requirePresence('goals_difference', 'create')
            ->notEmpty('goals_difference')
            ->add('points', 'valid', ['rule' => 'numeric'])
            ->requirePresence('points', 'create')
            ->notEmpty('points');

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
        $rules->add($rules->existsIn(['league_id'], 'Leagues'));
        $rules->add($rules->existsIn(['club_id'], 'Clubs'));
        return $rules;
    }
}

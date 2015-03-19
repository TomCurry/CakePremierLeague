<?php
namespace App\Model\Table;

use App\Model\Entity\Result;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Results Model
 */
class ResultsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('results');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('HomeMatches', [
            'foriegnKey' => 'home_team_id',
            'className' => 'App\Model\Table\MatchesTable'
        ]);
        $this->hasMany('AwayMatches', [
            'foriegnKey' => 'away_team_id',
            'className' => 'App\Model\Table\MatchesTable'
        ]);
        $this->belongsTo('Matches', [
            'foreignKey' => 'match_id'
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
            ->add('match_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('match_id', 'create')
            ->notEmpty('match_id')
            ->add('home_score', 'valid', ['rule' => 'numeric'])
            ->requirePresence('home_score', 'create')
            ->notEmpty('home_score')
            ->add('away_score', 'valid', ['rule' => 'numeric'])
            ->requirePresence('away_score', 'create')
            ->notEmpty('away_score')
            ->requirePresence('score', 'create')
            ->notEmpty('score');

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
        $rules->add($rules->existsIn(['match_id'], 'Matches'));
        return $rules;
    }
}

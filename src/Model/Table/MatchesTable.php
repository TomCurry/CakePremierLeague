<?php
namespace App\Model\Table;

use App\Model\Entity\Match;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Matches Model
 */
class MatchesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('matches');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Stadia', [
            'foreignKey' => 'stadium_id'
        ]);
        $this->belongsTo('Matchdays', [
            'foreignKey' => 'matchday_id'
        ]);
        $this->hasMany('Results', [
            'foreignKey' => 'match_id'
        ]);
        $this->belongsToMany('Teams', [
            'foreignKey' => 'match_id',
            'targetForeignKey' => 'team_id',
            'joinTable' => 'matches_teams'
        ]);
        $this->belongsToMany('HomeTeam', [
            'foreignKey' => 'home_team_id',
            'className' => 'App\Model\Table\TeamsTable',
        ]); 
        $this->belongsToMany('AwayTeam', [
            'foreignKey' => 'away_team_id',
            'className' => 'App\Model\Table\TeamsTable',
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
            ->add('home_team', 'valid', ['rule' => 'numeric'])
            ->requirePresence('home_team', 'create')
            ->notEmpty('home_team')
            ->add('away_team', 'valid', ['rule' => 'numeric'])
            ->requirePresence('away_team', 'create')
            ->notEmpty('away_team')
            ->add('stadium_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('stadium_id', 'create')
            ->notEmpty('stadium_id')
            ->add('matchday_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('matchday_id', 'create')
            ->notEmpty('matchday_id');

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
        $rules->add($rules->existsIn(['stadium_id'], 'Stadia'));
        $rules->add($rules->existsIn(['matchday_id'], 'Matchdays'));
        return $rules;
    }
}

<?php
namespace App\Model\Table;

use App\Model\Entity\Team;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Teams Model
 */
class TeamsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('teams');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsTo('Clubs', [
            'foreignKey' => 'club_id'
        ]);
        $this->belongsToMany('Matches', [
            'foreignKey' => 'team_id',
            'targetForeignKey' => 'match_id',
            'joinTable' => 'matches_teams'
        ]);
        $this->belongsToMany('Players', [
            'foreignKey' => 'team_id',
            'targetForeignKey' => 'player_id',
            'joinTable' => 'teams_players'
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
            ->add('club_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('club_id', 'create')
            ->notEmpty('club_id')
            ->requirePresence('name')
            ->notEmpty('name')
            ->add('players', 'custom', [
                'rule' => function($value) {
                    var_dump($value);
                    exit;
                    return (bool)(is_array($value['_ids']) && count($value['_ids']) === 18);
                },
                'message' => 'Please select 18 players.'
            ]);

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
        $rules->add($rules->existsIn(['club_id'], 'Clubs'));
        $rules->add($rules->existsIn(['player_id'], 'Players'));
        return $rules;
    }
}

<?php
namespace App\Model\Table;

use App\Model\Entity\TeamsPlayer;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TeamsPlayers Model
 */
class TeamsPlayersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('teams_players');
        $this->belongsTo('Teams', [
            'foreignKey' => 'team_id'
        ]);
        $this->belongsTo('Players', [
            'foreignKey' => 'player_id'
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
            ->add('team_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('team_id', 'create')
            ->notEmpty('team_id')
            ->add('player_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('player_id', 'create')
            ->notEmpty('player_id');

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
        $rules->add($rules->existsIn(['team_id'], 'Teams'));
        $rules->add($rules->existsIn(['player_id'], 'Players'));
        return $rules;
    }
}

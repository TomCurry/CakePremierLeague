<?php
namespace App\Model\Table;

use App\Model\Entity\Player;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Players Model
 */
class PlayersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('players');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Clubs', [
            'foreignKey' => 'club_id'
        ]);
        $this->hasMany('Teams', [
            'foreignKey' => 'player_id'
        ]);
        $this->belongsToMany('Teams', [
            'foreignKey' => 'player_id',
            'targetForeignKey' => 'team_id',
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
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name')
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name')
            ->add('birth', 'valid', ['rule' => 'date'])
            ->requirePresence('birth', 'create')
            ->notEmpty('birth')
            ->requirePresence('country', 'create')
            ->notEmpty('country')
            ->requirePresence('position', 'create')
            ->notEmpty('position')
            ->add('squad_number', 'valid', ['rule' => 'numeric'])
            ->requirePresence('squad_number', 'create')
            ->notEmpty('squad_number')
            ->add('club_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('club_id', 'create')
            ->notEmpty('club_id');

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
        return $rules;
    }
    
    public function findClubs(Query $query, array $options) {
        
    }
}

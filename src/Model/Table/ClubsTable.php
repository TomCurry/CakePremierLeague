<?php
namespace App\Model\Table;

use App\Model\Entity\Club;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clubs Model
 */
class ClubsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('clubs');
        $this->displayField('full_name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->addBehavior('Proffer.Proffer', [
            'crest_image' => [
                'dir' => 'crest_dir',
                'thumbnailSizes' => [
                    'square' => ['w' => 100, 'h' => 100],
                    'portrait' => ['w' => 100, 'h' => 300, 'crop' => true], 
                ],
                'thumbnailMethod' => 'Gmagick'
            ]
        ]);
        $this->belongsTo('Managers', [
            'foreignKey' => 'manager_id'
        ]);
        $this->belongsTo('Stadia', [
            'foreignKey' => 'stadium_id'
        ]);
        $this->hasMany('Players', [
            'foreignKey' => 'club_id'
        ]);
        $this->hasMany('Rankings', [
            'foreignKey' => 'club_id'
        ]);
        $this->hasMany('Teams', [
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
            ->requirePresence('full_name', 'create')
            ->notEmpty('full_name')
            ->requirePresence('nickname', 'create')
            ->notEmpty('nickname')
            ->requirePresence('abbreviation', 'create')
            ->notEmpty('abbreviation')
            ->requirePresence('crest_image', 'create')
            ->allowEmpty('crest_image')
            ->add('founded', 'valid', ['rule' => 'numeric'])
            ->requirePresence('founded', 'create')
            ->notEmpty('founded')
            ->requirePresence('site', 'create')
            ->notEmpty('site')
            ->add('manager_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('manager_id', 'create')
            ->notEmpty('manager_id')
            ->add('stadium_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('stadium_id', 'create')
            ->notEmpty('stadium_id');

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
        $rules->add($rules->existsIn(['manager_id'], 'Managers'));
        $rules->add($rules->existsIn(['stadium_id'], 'Stadia'));
        return $rules;
    }
}

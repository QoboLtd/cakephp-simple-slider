<?php
namespace SimpleSlider\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use SimpleSlider\Model\Entity\Slide;

/**
 * Slides Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Galleries
 * @property \Cake\ORM\Association\BelongsTo $Attrs
 */
class SlidesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('slides');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Galleries', [
            'foreignKey' => 'gallery_id',
            'joinType' => 'INNER',
            'className' => 'SimpleSlider.Galleries'
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
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('link', 'create')
            ->notEmpty('link');

        $validator
            ->requirePresence('class', 'create')
            ->notEmpty('class');

        $validator
            ->requirePresence('caption', 'create')
            ->notEmpty('caption');

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
        $rules->add($rules->existsIn(['gallery_id'], 'Galleries'));
        return $rules;
    }
}

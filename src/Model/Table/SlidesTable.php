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
 * @property \Cake\ORM\Association\BelongsTo $Sliders
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

        $this->belongsTo('Sliders', [
            'foreignKey' => 'slider_id',
            'joinType' => 'INNER',
            'className' => 'SimpleSlider.Sliders'
        ]);
        $this->hasMany('SlideImages', [
            'className' => 'SimpleSlider.SlideImages',
            'foreignKey' => 'foreign_key',
            'conditions' => [
                'SlideImages.model' => 'SlideImage'
            ]
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
        $rules->add($rules->existsIn(['slider_id'], 'Sliders'));
        return $rules;
    }

    /**
     * Reusable Query that return slides with the latest associated image.
     *
     * @param  Query  $query   To proceess it
     * @param  array  $options Extra options can be passed.
     * @return Query  $query   Return the query object which can be chained as usual.
     */
    public function findWithLatestImage(Query $query, array $options)
    {
        $query = $query
            ->find('all')
            ->order(['created' => 'DESC'])
            ->contain(['SlideImages' => ['sort' => ['created' => 'DESC']]]);

        return $query;
    }
}

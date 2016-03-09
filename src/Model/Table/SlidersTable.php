<?php
namespace SimpleSlider\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use SimpleSlider\Model\Entity\Slider;

/**
 * Sliders Model
 *
 */
class SlidersTable extends Table
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

        $this->table('sliders');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->hasMany('Slides', [
            'className' => 'SimpleSlider.Slides',
            'foreignKey' => 'slider_id',
            'joinType' => 'INNER',
            'dependent' => true,
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
            ->requirePresence('alias', 'create')
            ->notEmpty('alias');

        return $validator;
    }
}

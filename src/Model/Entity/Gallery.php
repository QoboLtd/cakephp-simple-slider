<?php
namespace SimpleSlider\Model\Entity;

use Cake\ORM\Entity;

/**
 * Gallery Entity.
 *
 * @property string $id
 * @property string $title
 * @property string $link
 * @property string $class
 * @property string $attr_id
 * @property \SimpleSlider\Model\Entity\Attr $attr
 * @property string $caption
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \SimpleSlider\Model\Entity\Slide[] $slides
 */
class Gallery extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}

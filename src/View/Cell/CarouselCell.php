<?php
namespace SimpleSlider\View\Cell;

use Cake\View\Cell;

/**
 * Carousel cell
 */
class CarouselCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @param string $alias the alias of the slider
     * @throws RecordNotFoundException if the slider is not found
     * @return void
     */
    public function display($alias = null)
    {
        $this->loadModel('Sliders');
        $this->loadModel('Slides');
        $sliderQuery = $this->Sliders->find()->where(['alias' => $alias])->first();
        if (!$sliderQuery) {
            throw new RecordNotFoundException(__('Cannot find the given slider!'));
        }
        $slideQuery = $this->Slides->find()->where(['slider_id' => $sliderQuery->id]);
        $this->set(['alias' => $alias, 'slides' => $slideQuery]);
    }
}

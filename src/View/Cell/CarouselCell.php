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
        $this->loadModel('SimpleSlider.Sliders');
        $slides = $this->Sliders->Slides->find('WithLatestImage');
        $slides = !$slides->isEmpty() ? $slides : false;
        $this->set(compact('slides', 'alias'));
    }
}

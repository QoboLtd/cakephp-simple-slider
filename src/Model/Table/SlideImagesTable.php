<?php
namespace SimpleSlider\Model\Table;

use Burzum\FileStorage\Model\Table\ImageStorageTable;

class SlideImagesTable extends ImageStorageTable
{
    /**
     * Upload image
     *
     * @param mixed $slideId Slide Id
     * @param Entity $entity Entity
     * @return Entity
     */
    public function uploadImage($slideId, $entity)
    {
        $entity = $this->patchEntity($entity, [
            'adapter' => 'Local',
            'model' => 'SlideImage',
            'foreign_key' => $slideId
        ]);

        return $this->save($entity);
    }
}

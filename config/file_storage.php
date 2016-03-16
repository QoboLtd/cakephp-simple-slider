<?php
use Burzum\FileStorage\Lib\StorageManager;
use Burzum\FileStorage\Storage\Listener\BaseListener;
use Burzum\FileStorage\Storage\StorageUtils;
use Cake\Core\Configure;
use Cake\Event\EventManager;

StorageManager::config(
    'Local',
    [
        'adapterOptions' => [WWW_ROOT, true],
        'adapterClass' => '\Gaufrette\Adapter\Local',
        'class' => '\Gaufrette\Filesystem'
    ]
);

$listener = new BaseListener([
    'imageProcessing' => true,
    'pathBuilderOptions' => [
        'pathPrefix' => '/uploads'
    ]
]);

EventManager::instance()->on($listener);

// Allow the app or other plugin to override this config.
if (!Configure::check('FileStorage.imageSizes.SlideImage')) {
    Configure::write('FileStorage.imageSizes.SlideImage', [
        'large' => [
            'thumbnail' => [
                'mode' => 'inbound',
                //Ratio 16:9
                //12 Columns based on Bootstrap 3
                'width' => 1170,
                'height' => 658
            ]
        ],
        'medium' => [
            'thumbnail' => [
                'mode' => 'inbound',
                //Ratio 16:9
                //8 Columns based on Bootstrap 3
                'width' => 750,
                'height' => 422
            ]
        ],
        'small' => [
            'thumbnail' => [
                'mode' => 'inbound',
                //Ratio 16:9
                //4 Columns based on Bootstrap 3
                'width' => 230,
                'height' => 129
            ]
        ]
    ]);
}

// This is very important! The hashes are needed to calculate the image versions!
StorageUtils::generateHashes();

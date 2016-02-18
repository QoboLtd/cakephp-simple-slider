<?php
use Cake\Routing\Router;

Router::plugin(
    'SimpleSlider',
    ['path' => '/simple-slider'],
    function ($routes) {
        $routes->fallbacks('DashedRoute');
    }
);

<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\TargetablesController::class,
    'router'     => [
        'as'     => 'targetable.',
        'prefix' => '/targetables',
    ],
];

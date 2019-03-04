<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\TargetablesController::class,
    'router'     => [
        'as'     => 'targetable.',
        'prefix' => '/targetables',
    ],
];

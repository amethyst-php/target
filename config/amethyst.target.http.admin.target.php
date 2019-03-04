<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\TargetsController::class,
    'router'     => [
        'as'     => 'target.',
        'prefix' => '/targets',
    ],
];

<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\TargetsController::class,
    'router'     => [
        'as'     => 'target.',
        'prefix' => '/targets',
    ],
];

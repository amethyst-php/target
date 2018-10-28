<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Data
    |--------------------------------------------------------------------------
    |
    | Here you can change the table name and the class components.
    |
    */
    'data' => [
        'target' => [
            'table'      => 'amethyst_targets',
            'comment'    => 'Target',
            'model'      => Railken\Amethyst\Models\Target::class,
            'schema'     => Railken\Amethyst\Schemas\TargetSchema::class,
            'repository' => Railken\Amethyst\Repositories\TargetRepository::class,
            'serializer' => Railken\Amethyst\Serializers\TargetSerializer::class,
            'validator'  => Railken\Amethyst\Validators\TargetValidator::class,
            'authorizer' => Railken\Amethyst\Authorizers\TargetAuthorizer::class,
            'faker'      => Railken\Amethyst\Fakers\TargetFaker::class,
            'manager'    => Railken\Amethyst\Fakers\TargetManager::class,
            'groups'     => [
                'buyer',
                'seller',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Http configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the routes
    |
    */
    'http' => [
        'admin' => [
            'target' => [
                'enabled'     => true,
                'controller'  => Railken\Amethyst\Http\Controllers\Admin\TargetsController::class,
                'router'      => [
                    'as'        => 'target.',
                    'prefix'    => '/targets',
                ],
            ],
        ],
    ],
];

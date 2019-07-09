<?php

return [
    'table'      => 'amethyst_targets',
    'comment'    => 'Target',
    'model'      => Amethyst\Models\Target::class,
    'schema'     => Amethyst\Schemas\TargetSchema::class,
    'repository' => Amethyst\Repositories\TargetRepository::class,
    'serializer' => Amethyst\Serializers\TargetSerializer::class,
    'validator'  => Amethyst\Validators\TargetValidator::class,
    'authorizer' => Amethyst\Authorizers\TargetAuthorizer::class,
    'faker'      => Amethyst\Fakers\TargetFaker::class,
    'manager'    => Amethyst\Managers\TargetManager::class,
    'groups'     => [
        'buyer',
        'seller',
    ],
];

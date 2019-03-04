<?php

return [
    'table'      => 'amethyst_targets',
    'comment'    => 'Target',
    'model'      => Railken\Amethyst\Models\Target::class,
    'schema'     => Railken\Amethyst\Schemas\TargetSchema::class,
    'repository' => Railken\Amethyst\Repositories\TargetRepository::class,
    'serializer' => Railken\Amethyst\Serializers\TargetSerializer::class,
    'validator'  => Railken\Amethyst\Validators\TargetValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\TargetAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\TargetFaker::class,
    'manager'    => Railken\Amethyst\Managers\TargetManager::class,
    'groups'     => [
        'buyer',
        'seller',
    ],
];
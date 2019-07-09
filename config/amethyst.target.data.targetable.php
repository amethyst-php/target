<?php

return [
    'table'      => 'amethyst_targetables',
    'comment'    => 'Targetable',
    'model'      => Amethyst\Models\Targetable::class,
    'schema'     => Amethyst\Schemas\TargetableSchema::class,
    'repository' => Amethyst\Repositories\TargetableRepository::class,
    'serializer' => Amethyst\Serializers\TargetableSerializer::class,
    'validator'  => Amethyst\Validators\TargetableValidator::class,
    'authorizer' => Amethyst\Authorizers\TargetableAuthorizer::class,
    'faker'      => Amethyst\Fakers\TargetableFaker::class,
    'manager'    => Amethyst\Managers\TargetableManager::class,
    'attributes' => [
        'targetable' => [
            'options' => [],
        ],
    ],
];

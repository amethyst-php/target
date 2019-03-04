<?php

return [
    'table'      => 'amethyst_targetables',
    'comment'    => 'Targetable',
    'model'      => Railken\Amethyst\Models\Targetable::class,
    'schema'     => Railken\Amethyst\Schemas\TargetableSchema::class,
    'repository' => Railken\Amethyst\Repositories\TargetableRepository::class,
    'serializer' => Railken\Amethyst\Serializers\TargetableSerializer::class,
    'validator'  => Railken\Amethyst\Validators\TargetableValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\TargetableAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\TargetableFaker::class,
    'manager'    => Railken\Amethyst\Managers\TargetableManager::class,
    'attributes' => [
        'targetable' => [
            'options' => [
                Railken\Amethyst\Models\Foo::class => Railken\Amethyst\Managers\FooManager::class,
            ],
        ],
    ],
];

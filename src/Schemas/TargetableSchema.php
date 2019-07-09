<?php

namespace Amethyst\Schemas;

use Amethyst\Managers\TargetManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class TargetableSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\BelongsToAttribute::make('target_id')
                ->setRelationName('target')
                ->setRelationManager(TargetManager::class)
                ->setRequired(true),
            Attributes\EnumAttribute::make('targetable_type', app('amethyst')->getMorphListable('targetable', 'targetable'))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('targetable_id')
                ->setRelationKey('targetable_type')
                ->setRelationName('targetable')
                ->setRelations(app('amethyst')->getMorphRelationable('targetable', 'targetable'))
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}

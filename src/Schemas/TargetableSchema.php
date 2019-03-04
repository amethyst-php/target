<?php

namespace Railken\Amethyst\Schemas;

use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Managers\TargetManager;
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
        $targetableConfig = Config::get('amethyst.target.data.targetable.attributes.targetable.options');

        return [
            Attributes\IdAttribute::make(),
            Attributes\BelongsToAttribute::make('target_id')
                ->setRelationName('target')
                ->setRelationManager(TargetManager::class)
                ->setRequired(true),
            Attributes\EnumAttribute::make('targetable_type', array_keys($targetableConfig))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('targetable_id')
                ->setRelationKey('targetable_type')
                ->setRelationName('targetable')
                ->setRelations($targetableConfig)
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}

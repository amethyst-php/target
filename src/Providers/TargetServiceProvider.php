<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Railken\Amethyst\Common\CommonServiceProvider;

class TargetServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function register()
    {
        parent::register();
    }

    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();

        \Illuminate\Database\Eloquent\Builder::macro('targetables', function (): MorphMany {
            return app('amethyst')->createMacroMorphRelation($this, \Railken\Amethyst\Models\Targetable::class, 'targetables', 'targetable');
        });
    }
}

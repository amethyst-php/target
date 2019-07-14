<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Targetable newEntity()
 * @method \Amethyst\Schemas\TargetableSchema getSchema()
 * @method \Amethyst\Repositories\TargetableRepository getRepository()
 * @method \Amethyst\Serializers\TargetableSerializer getSerializer()
 * @method \Amethyst\Validators\TargetableValidator getValidator()
 * @method \Amethyst\Authorizers\TargetableAuthorizer getAuthorizer()
 */
class TargetableManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.target.data.targetable';
}

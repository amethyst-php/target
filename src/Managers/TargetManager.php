<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Target newEntity()
 * @method \Amethyst\Schemas\TargetSchema getSchema()
 * @method \Amethyst\Repositories\TargetRepository getRepository()
 * @method \Amethyst\Serializers\TargetSerializer getSerializer()
 * @method \Amethyst\Validators\TargetValidator getValidator()
 * @method \Amethyst\Authorizers\TargetAuthorizer getAuthorizer()
 */
class TargetManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.target.data.target';
}

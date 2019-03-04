<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class TargetableAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'targetable.create',
        Tokens::PERMISSION_UPDATE => 'targetable.update',
        Tokens::PERMISSION_SHOW   => 'targetable.show',
        Tokens::PERMISSION_REMOVE => 'targetable.remove',
    ];
}

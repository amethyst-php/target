<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class TargetAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'target.create',
        Tokens::PERMISSION_UPDATE => 'target.update',
        Tokens::PERMISSION_SHOW   => 'target.show',
        Tokens::PERMISSION_REMOVE => 'target.remove',
    ];
}

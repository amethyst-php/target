<?php

namespace Amethyst\Http\Controllers\Admin;

use Amethyst\Core\Http\Controllers\RestManagerController;
use Amethyst\Core\Http\Controllers\Traits as RestTraits;
use Amethyst\Managers\TargetableManager;

class TargetablesController extends RestManagerController
{
    use RestTraits\RestCommonTrait;

    /**
     * The class of the manager.
     *
     * @var string
     */
    public $class = TargetableManager::class;
}

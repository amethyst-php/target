<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\TargetableFaker;
use Amethyst\Managers\TargetableManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class TargetableTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = TargetableManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = TargetableFaker::class;
}

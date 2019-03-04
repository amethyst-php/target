<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\TargetableFaker;
use Railken\Amethyst\Managers\TargetableManager;
use Railken\Amethyst\Tests\BaseTest;
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

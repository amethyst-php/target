<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\TargetFaker;
use Amethyst\Managers\TargetManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class TargetTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = TargetManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = TargetFaker::class;
}

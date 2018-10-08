<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\TargetFaker;
use Railken\Amethyst\Managers\TargetManager;
use Railken\Amethyst\Tests\BaseTest;
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

<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class TargetableFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('target', TargetFaker::make()->parameters()->toArray());
        $bag->set('targetable_type', \Railken\Amethyst\Models\Foo::class);
        $bag->set('targetable', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}

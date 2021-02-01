<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Peripheral;
use Faker\Generator as Faker;

$factory->define(Peripheral::class, function (Faker $faker) {
    return [
        'name' => ($faker->word),
        'model' => ($faker->unique()->sha256),
        'price' => ($faker->randomFloat(2,0,10000)),
        'consumption' => rand(1,1000),
    ];
});

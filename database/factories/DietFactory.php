<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Diet;
use Faker\Generator as Faker;
use Faker\Provider\pt_PT\Person;

$factory->define(Diet::class, function (Faker $faker) {
    return [
        'name' => $faker->colorName,
        'description' => $faker->text(200)
    ];
});

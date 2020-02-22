<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Recipe;
use Faker\Generator as Faker;
use Faker\Provider\pt_PT\Address;

$factory->define(Recipe::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
    ];
});

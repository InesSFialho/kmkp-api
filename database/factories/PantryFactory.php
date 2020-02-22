<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pantry;
use Faker\Generator as Faker;

$factory->define(Pantry::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});

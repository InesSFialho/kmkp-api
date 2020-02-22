<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SidedishType;
use Faker\Generator as Faker;

$factory->define(SidedishType::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});

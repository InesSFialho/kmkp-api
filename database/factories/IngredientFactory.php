<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ingredient;
use Faker\Generator as Faker;
use Faker\Provider\Miscellaneous;

$factory->define(Ingredient::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        // TODO garantir que só aparece emojis da categoria alimentos
        'emoji' => $faker->emoji,
    ];
});

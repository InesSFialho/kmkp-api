<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Direction;
use Faker\Generator as Faker;

$factory->define(Direction::class, function (Faker $faker) {
    return [
        // TODO cada receita pode ter de 1 a multos pontes na preparação da receita
        'point' => sentence(50, true)
    ];
});

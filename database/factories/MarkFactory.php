<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Mark::class, function (Faker $faker) {
    return [
        'mark' => $faker->numberBetween(1, 5)
    ];
});

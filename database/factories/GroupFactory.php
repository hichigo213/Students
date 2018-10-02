<?php

use Faker\Generator as Faker;

$factory->define(App\Group::class, function (Faker $faker) {
    return [
        'group_name' => $faker->name,
        'description' => $faker->name,
    ];
});

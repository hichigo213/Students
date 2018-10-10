<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'birthday' => $faker->dateTimeBetween($startDate = '-22 years', $endDate = '-16 years', $timezone = null)


    ];
});

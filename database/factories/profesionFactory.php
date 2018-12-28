<?php

use Faker\Generator as Faker;

$factory->define(App\profesion::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence
    ];
});

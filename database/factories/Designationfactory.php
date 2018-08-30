<?php

use Faker\Generator as Faker;
use App\Designation;

$factory->define(Designation::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

<?php

use Faker\Generator as Faker;
use App\Designation;

$factory->define(\App\Employee::class, function (Faker $faker)  {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'designation_id' => Designation::all()->random()->id,
    ];
});

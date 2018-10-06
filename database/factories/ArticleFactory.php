<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(\App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph(2),
        'user_id' => factory(User::class)->create()->id,
    ];
});

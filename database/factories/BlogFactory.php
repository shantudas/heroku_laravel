<?php

use App\Blog;
use App\User;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraph(2),
        'user_id' => factory(User::class)->create()->id,
    ];
});

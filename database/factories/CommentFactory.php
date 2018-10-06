<?php

use App\Article;
use App\User;
use Faker\Generator as Faker;

$factory->define(\App\Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph(2),
        'user_id' => factory(User::class)->create()->id,
        'article_id' => factory(Article::class)->create()->id,
    ];
});

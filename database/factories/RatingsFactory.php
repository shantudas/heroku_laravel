<?php

use App\Article;
use App\Rating;
use App\User;
use Faker\Generator as Faker;

$factory->define(Rating::class, function (Faker $faker) {
    return [
        'rating' => random_int(1, 5),
        'article_id' => factory(Article::class)->create()->id,
        'user_id' => factory(User::class)->create()->id,
    ];
});

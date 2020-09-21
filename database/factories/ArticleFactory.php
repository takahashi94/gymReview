<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'name' => Str::random(10),
        'place' => Str::random(10),
        'article' => Str::random(10),
        'like' => 3,
    ];
});

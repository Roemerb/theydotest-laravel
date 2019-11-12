<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Idea::class, function (Faker $faker) {
    $users = \App\User::all();
    return [
        'author_id' => \App\User::all()->random(1)->first()->id,
        'title' => $faker->title,
        'description' => $faker->text(255),
        'solution' => $faker->text(255)
    ];
});

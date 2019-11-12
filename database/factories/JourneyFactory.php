<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Journey::class, function (Faker $faker) {
    $status = ['published', 'draft'];
    return [
        'author_id' => \App\User::all()->random(1)->first()->id,
        'title' => $faker->title,
        'description' => $faker->text(255),
        'publish_status' => $status[random_int(0,1)],
        'type' => $faker->word
    ];
});

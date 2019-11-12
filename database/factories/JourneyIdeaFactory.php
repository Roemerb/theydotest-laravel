<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\JourneyIdea::class, function (Faker $faker) {
    return [
        'journey_id' => \App\Journey::all()->random(1)->first()->id,
        'idea_id' => \App\Idea::all()->random(1)->first()->id
    ];
});

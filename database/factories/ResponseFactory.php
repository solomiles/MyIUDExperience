<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Response;
use Faker\Generator as Faker;

$factory->define(Response::class, function (Faker $faker) {
    return [
        //
        'survey_id' => $faker->survey_id,
        'response' => $faker->response,
    ];
});

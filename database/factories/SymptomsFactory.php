<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\symptoms;
use Faker\Generator as Faker;

$factory->define(symptoms::class, function (Faker $faker) {
    return [
        //
        '' => $faker->hdj,
    ];
});

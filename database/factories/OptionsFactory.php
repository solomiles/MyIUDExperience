<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Options;
use Faker\Generator as Faker;

$factory->define(Options::class, function (Faker $faker) {
    return [
        //
        'option' => $faker->option,

    ];
});

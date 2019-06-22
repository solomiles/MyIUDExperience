<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Forum;
use Faker\Generator as Faker;

$factory->define(Forum::class, function (Faker $faker) {
    return [
        //

        'user_id' =>$faker->user_id,
        'topic' => $faker->topic,
    ];
});

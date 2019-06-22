<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ForumComments;
use Faker\Generator as Faker;

$factory->define(ForumComments::class, function (Faker $faker) {
    return [
        //
        'user_id' =>$faker->user_id,
        'forum_id' =>$faker->forum_id,
        'comments' => $faker->comments,
    ];
});

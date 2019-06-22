<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Survey;
use Faker\Generator as Faker;

$factory->define(Survey::class, function (Faker $faker) {
    return [
        //
        'question' => $faker->question,
        'option_one' => $faker->option_one,
        'option_two' => $faker->option_two,
        'option_three' => $faker->option_three,
        'option_four' => $faker->option_four,
        'option_five' => $faker->option_five,
        'option_six' => $faker->option_six,
        'option_seven' => $faker->option_seven,
        'option_eight' => $faker->option_eight,
        'type' => $faker->type,
    ];
});

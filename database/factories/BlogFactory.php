<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        //

        'title' =>$faker->title,
        'author' =>$faker->author,
        'text' =>$faker->text,
        'filename' =>$faker->filename,
    ];
});

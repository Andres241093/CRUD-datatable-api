<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articles;
use Faker\Generator as Faker;

$factory->define(Articles::class, function (Faker $faker) {
    return [
        'price'=>$faker->biasedNumberBetween($min = 1000, $max = 9000),
        'description'=>$faker->text($maxNbChars = 50) 
    ];
});

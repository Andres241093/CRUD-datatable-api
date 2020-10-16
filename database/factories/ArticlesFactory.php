<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articles;
use Faker\Generator as Faker;

$factory->define(Articles::class, function (Faker $faker) {
	$fruits=['Manzanas','Uvas','Peras','Sandias','Kiwis','Bananas','Piñas','Cerezas','Frambuesas','Fresas'];
    return [
        'price'=>$faker->biasedNumberBetween($min = 1000, $max = 9000),
        'description'=>$faker->randomElement($fruits)
    ];
});

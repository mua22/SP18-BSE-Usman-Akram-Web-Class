<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title'=>$faker->name,
        'price'=>rand(500,8500),
        'description'=>$faker->realText(250,3),

    ];
});

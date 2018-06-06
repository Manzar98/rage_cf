<?php

use Faker\Generator as Faker;

$factory->define(App\rfusers::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'age'=>rand( 0, 100 ) / 10,
        'height'=>rand( 0, 100 ) / 10,
        'weight'=>rand( 0, 100 ) / 10,
        'chest'=>rand( 0, 100 ) / 10,
        'rfcode'=>"rf".rand(200,220)
    ];
});

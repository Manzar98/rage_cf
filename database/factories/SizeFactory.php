<?php

use Faker\Generator as Faker;

$factory->define(App\Size::class, function (Faker $faker) {
    return [
        'age'=>rand( 0, 100 ) / 10,
        'height'=>rand( 0, 100 ) / 10,
        'weight'=>rand( 0, 100 ) / 10,
        'chest'=>rand( 0, 100 ) / 10
    ];
});

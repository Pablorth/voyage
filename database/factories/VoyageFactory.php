<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Voyage;
use Faker\Generator as Faker;

$factory->define(Voyage::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'place' => $faker->city(),
        'country' => $faker->country(),
        'date' => $faker->date(),
        'cost' => $faker->numberBetween(200, 1500),
        'organizer' => 'Martine Agency',
        'rating' => $faker->numberBetween(0, 5),
    ];
});

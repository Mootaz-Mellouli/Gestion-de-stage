<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Encadreur;
use Faker\Generator as Faker;

$factory->define(Encadreur::class, function (Faker $faker) {
    return [
        'first_name' => $faker->word,
        'last_name' => $faker->word,
        'email' => $faker->freeEmail,
        'specialty' => $faker->word,
        'password' => $faker->password,
        'created_at' => now()

    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employe;
use Faker\Generator as Faker;

$factory->define(Employe::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstNameMale,
        'last_name' => $faker->lastName,
        'phone_number' => $faker->e164PhoneNumber,
        'email' => $faker->freeEmail,
        'salaire' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 800, $max = 4000),
        'created_at' => now()
    ];
});
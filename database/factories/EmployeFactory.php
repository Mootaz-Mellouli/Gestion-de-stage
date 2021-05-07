<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employe;
use Faker\Generator as Faker;

$factory->define(Employe::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstNameMale,
        'last_name' => $faker->lastName,
        'phone_number' => $faker->randomNumber($nbDigits = 8, $strict = false),
        'email' => $faker->freeEmail,
        'password' => $faker->password,
        'created_at' => now()
    ];
});

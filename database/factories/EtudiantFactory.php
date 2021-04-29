<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Etudiant;
use Faker\Generator as Faker;

$factory->define(Etudiant::class, function (Faker $faker) {
    return [
        'nom'=> $faker->word,
        'prenom'=> $faker->word,
        'CIN'=> $faker->randomNumber($nbDigits=NULL,$strict=false),
        'email'=> $faker->email,
        'created_at'=>now()
    ];
});

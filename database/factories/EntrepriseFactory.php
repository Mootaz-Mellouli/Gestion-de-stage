<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entreprise;
use Faker\Generator as Faker;

$factory->define(Entreprise::class, function (Faker $faker) {
    return [
        //
        'nom'=> $faker->word,
        'prenom'=> $faker->word,
        'nomEntreprise'=> $faker->word,
        'emailEntreprise'=> $faker->word,
        'email'=> $faker->word
    ];
});

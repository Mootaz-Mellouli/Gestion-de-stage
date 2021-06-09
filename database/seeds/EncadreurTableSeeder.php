<?php

use Illuminate\Database\Seeder;
use App\Encadreur;

class EncadreurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Encadreur::class,10)->create();

    }
}

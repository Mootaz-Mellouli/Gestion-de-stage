<?php

use App\Encadreur;
use Illuminate\Database\Seeder;

class EncadreursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Encadreur::class, 5)->create();
    }
}

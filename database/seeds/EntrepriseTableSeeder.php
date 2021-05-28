<?php
use App\Entreprise;
use Illuminate\Database\Seeder;

class EntrepriseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Entreprise::class,3)->create();
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Domain;

class DomainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Domain::create([
            'name' => 'Aucun',
        ]);
        Domain::create([
            'name' => 'Vide',
        ]);
        Domain::create([
            'name' => 'Imagination',
        ]);
        Domain::create([
            'name' => 'Eléments'
        ]);
        Domain::create([
            'name' => 'Espace Temps'
        ]);
        Domain::create([
            'name' => 'Cycle de la vie'
        ]);
        Domain::create([
            'name' => 'Equilibre'
        ]);
        Domain::create([
            'name' => 'Connaissance'
        ]);
    }
}

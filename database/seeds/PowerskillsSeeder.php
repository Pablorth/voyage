<?php

use Illuminate\Database\Seeder;
use App\Powerskill;

class PowerskillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Powerskill::create([
            'name' => 'Aucun',
            'domain_id' => 1,
        ]);

        // Vide
        Powerskill::create([
            'name' => 'Absorbe la Matière',
            'domain_id' => 2,
        ]);
        Powerskill::create([
            'name' => "Absorbe l'Energie",
            'domain_id' => 2,
        ]);
        Powerskill::create([
            'name' => 'Tangibilité',
            'domain_id' => 2,
        ]);
        Powerskill::create([
            'name' => 'Vide Pure',
            'domain_id' => 2,
        ]);

        //Imagination
        Powerskill::create([
            'name' => 'Télépathie',
            'domain_id' => 3,
        ]);
        Powerskill::create([
            'name' => 'Télékinésie',
            'domain_id' => 3,
        ]);
        Powerskill::create([
            'name' => 'Arcane',
            'domain_id' => 3,
        ]);
        Powerskill::create([
            'name' => 'Probabilité',
            'domain_id' => 3,
        ]);

        //Eléments
        Powerskill::create([
            'name' => 'Terre',
            'domain_id' => 4,
        ]);
        Powerskill::create([
            'name' => 'Eau',
            'domain_id' => 4,
        ]);
        Powerskill::create([
            'name' => 'Feu',
            'domain_id' => 4,
        ]);
        Powerskill::create([
            'name' => 'Vent',
            'domain_id' => 4,
        ]);

        //Espace Temps
        Powerskill::create([
            'name' => 'Temps',
            'domain_id' => 5,
        ]);
        Powerskill::create([
            'name' => 'Zodiac',
            'domain_id' => 5,
        ]);
        Powerskill::create([
            'name' => 'Téléportation',
            'domain_id' => 5,
        ]);
        Powerskill::create([
            'name' => 'Etoiles',
            'domain_id' => 5,
        ]);

        //Cycle de la vie
        Powerskill::create([
            'name' => 'Source vital',
            'domain_id' => 6,
        ]);
        Powerskill::create([
            'name' => 'Bêtes',
            'domain_id' => 6,
        ]);
        Powerskill::create([
            'name' => 'Séléction naturelle',
            'domain_id' => 6,
        ]);
        Powerskill::create([
            'name' => 'Mort',
            'domain_id' => 6,
        ]);

        //Equilibre
        Powerskill::create([
            'name' => 'Ombre et Lumière',
            'domain_id' => 7,
        ]);
        Powerskill::create([
            'name' => 'Ange et Démons',
            'domain_id' => 7,
        ]);
        Powerskill::create([
            'name' => 'Bataille',
            'domain_id' => 7,
        ]);
        Powerskill::create([
            'name' => 'Pacifisme',
            'domain_id' => 7,
        ]);

        //Connaissance
        Powerskill::create([
            'name' => 'Mécamancie',
            'domain_id' => 8,
        ]);
        Powerskill::create([
            'name' => 'Altération',
            'domain_id' => 8,
        ]);
        Powerskill::create([
            'name' => "Générteur d'énergie",
            'domain_id' => 8,
        ]);
        Powerskill::create([
            'name' => 'Copie',
            'domain_id' => 8,
        ]);
    }
}

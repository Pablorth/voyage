<?php

use Illuminate\Database\Seeder;
use App\TalentCategory;

class TalentCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TalentCategory::create([
            'name'=>'Contextuel'
        ]);

        TalentCategory::create([
            'name'=>'Relance'
        ]);

        TalentCategory::create([
            'name'=>'Soutien'
        ]);

        TalentCategory::create([
            'name'=>'Combat'
        ]);

        TalentCategory::create([
            'name'=>'Défensif'
        ]);

        TalentCategory::create([
            'name'=>'Archétype'
        ]);

        TalentCategory::create([
            'name'=>'Stratégique'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\CharacterCategory;

class CharacterCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CharacterCategory::create([
            'category' => 'Héro',
        ]);
        CharacterCategory::create([
            'category' => 'PnJ',
        ]);
        CharacterCategory::create([
            'category' => 'Monstre']);
    }
}

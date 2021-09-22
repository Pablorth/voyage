<?php

use Illuminate\Database\Seeder;
use App\PostCategory;

class PostCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostCategory::create([
            'category' => 'Monde',
        ]);
        PostCategory::create([
            'category' => 'Peuples',
        ]);
        PostCategory::create([
            'category' => 'Faunes'
        ]);
        PostCategory::create([
            'category' => 'Système de jeu'
        ]);
        PostCategory::create([
            'category' => 'Compétences'
            ]);
        PostCategory::create([
            'category' => 'Autres']);
    }
}

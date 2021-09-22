<?php

use Illuminate\Database\Seeder;
use App\SkillCategory;

class SkillCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SkillCategory::create([
            'name'=>'Furtivité'
        ]);

        SkillCategory::create([
            'name'=>'Sens'
        ]);

        SkillCategory::create([
            'name'=>'Technique'
        ]);

        SkillCategory::create([
            'name'=>'Relation'
        ]);

        SkillCategory::create([
            'name'=>'Art'
        ]);

        SkillCategory::create([
            'name'=>'Combat'
        ]);

        SkillCategory::create([
            'name'=>'Mouvement'
        ]);

        SkillCategory::create([
            'name'=>'Science'
        ]);
    }
}

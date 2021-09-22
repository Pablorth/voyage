<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(CharacterCategoriesSeeder::class);
        $this->call(PostCategoriesSeeder::class);
        $this->call(DomainsSeeder::class);
        $this->call(PowerskillsSeeder::class);
        $this->call(SkillCategoriesSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(TalentCategoriesSeeder::class);
        $this->call(TalentSeeder::class);
    }
}

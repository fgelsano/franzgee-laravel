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
        $this->call(BlogsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(PortfoliosTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(ResumesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(SocialMediaTableSeeder::class);
    }
}

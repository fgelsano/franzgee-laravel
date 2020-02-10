<?php

use Illuminate\Database\Seeder;
use App\Skill;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Skill::create([
                'name' => $faker->name,
                'icon_url' => $faker->url,
                'level' => $faker->word,
                'extra_info' => $faker->sentence,
            ]);
        }
    }
}

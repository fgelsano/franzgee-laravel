<?php

use Illuminate\Database\Seeder;
use App\SocialMedia;

class SocialMediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SocialMedia::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            SocialMedia::create([
                'name' => $faker->word,
                'icon_url' => $faker->url,
                'profile_url' => $faker->url,
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Portfolio;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Portfolio::create([
                'name' => $faker->name,
                'thumbnail_url' => $faker->url,
                'description' => $faker->sentence,
                'techstack' => $faker->word,
                'category' => $faker->word,
            ]);
        }
    }
}

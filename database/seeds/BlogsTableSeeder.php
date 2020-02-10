<?php

use Illuminate\Database\Seeder;
use App\Blog;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Blog::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
                'categories' => $faker->word,
            ]);
        }
    }
}

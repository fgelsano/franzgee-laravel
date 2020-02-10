<?php

use Illuminate\Database\Seeder;
use App\Resume;

class ResumesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resume::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Resume::create([
                'resume_url' => $faker->url,
                'notes' => $faker->sentence,
            ]);
        }
    }
}

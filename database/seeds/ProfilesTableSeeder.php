<?php

use Illuminate\Database\Seeder;
use App\Profile;
use Faker\Generator as Faker;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 1; $i++) {
            Profile::create([
                'bio' => $faker->paragraphs(5, true),
                'profile_pic_url' => $faker->image('public/storage/images',480,640, null, false),
            ]);
        }
    }
}

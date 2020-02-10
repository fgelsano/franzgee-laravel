<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Setting::create([
                'mycontact_numbers' => $faker->phoneNumber,
                'myemail_address' => $faker->email,
                'myphysical_address' => $faker->address,
            ]);
        }
    }
}

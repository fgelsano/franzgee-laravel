<?php

use Illuminate\Database\Seeder;
use App\Message;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Message::create([
                'sender_email' => $faker->email,
                'sender_name' => $faker->name,
                'message' => $faker->realText,
                'status' => $faker->word,
            ]);
        }
    }
}

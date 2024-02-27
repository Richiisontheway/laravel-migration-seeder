<?php

// namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;



namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(Faker $faker): void
    {
        //Train::truncate();
        for ($i = 0; $i < 15; $i++) {

            $train = new Train();
            // Ne riempio le colonne
            $train->factory = fake()->words(rand(1,3), true);
            $train->departure_station = fake()->words(rand(1,3), true);
            $train->arrival_station = fake()->words(rand(1,3), true);
            $train->departure_time = fake()->date('Y_m_d').' '.fake()->time();
            $train->arrival_time = fake()->date('Y_m_d').' '.fake()->time();
            $train->train_code = fake()->randomNumber(5, true);
            $train->number_of_coaches = fake()->numberBetween(5, 24);
            $train->in_time = fake()->boolean();
            $train->deleted = fake()->boolean();
            // Lo salvo in persistenza
            $train->save();

        }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

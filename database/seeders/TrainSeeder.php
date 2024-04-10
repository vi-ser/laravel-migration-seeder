<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {

            $newTrain = new Train();

            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->arrival_time = $faker->dateTimeBetween($newTrain->departure_time, '+2 weeks');
            $newTrain->train_code = $faker->randomNumber(6, true);
            $newTrain->n_coach = $faker->randomDigitNotNull();
            $newTrain->in_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();

            $newTrain->save();
        }
    }
}

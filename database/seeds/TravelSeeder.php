<?php

use Faker\Generator as Faker;
use App\Travel;


use Illuminate\Database\Seeder;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $newTravel = new Travel;
            $newTravel->destination = $faker->address();
            $newTravel->city = $faker->city();
            $newTravel->days = $faker->numberBetween(1, 5);
            $newTravel->description = $faker->paragraph( 3, true);
            $newTravel->price = $faker->randomFloat(2, 100, 500);
            $newTravel->save();
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use Faker\Generator as Faker;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        
        for ($i=0; $i < 20; $i++){
            $restaurant = new Restaurant();

            $restaurant->name = $faker->name();
            $restaurant->address = $faker->streetAddress();
            $restaurant->VAT_number = $faker->randomNumber(6,true);
            $restaurant->email = $faker->email();
            $restaurant->opening_time= $faker->randomFloat(2, 1, 12);
            $restaurant->image= $faker->imageUrl(640, 480, 'foods', true);
            $restaurant->telephone_number = $faker->phoneNumber();
            $restaurant->vote= $faker->randomFloat(2, 1, 5);
            $restaurant->save();
        }
        
       



    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRestaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;



class UserRestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $userIds = User::all()->pluck('id');

        foreach ($userIds as $userId){
            $newRestaurant = new UserRestaurant();
            $newRestaurant->user_id = $userId;
            $newRestaurant->name = $faker->name();
            $newRestaurant->address = $faker->streetAddress();
            $newRestaurant->VAT_number = $faker->randomNumber(6,true);
            $newRestaurant->email = $faker->email();
            $newRestaurant->opening_time= $faker->randomFloat(2, 1, 12);
            $newRestaurant->image= $faker->imageUrl(640, 480, 'foods', true);
            $newRestaurant->telephone_number = $faker->phoneNumber();
            $newRestaurant->vote= $faker->randomFloat(2, 1, 5);
            $newRestaurant->save();

        }
    }
}
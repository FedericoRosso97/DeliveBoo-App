<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Restaurant;
use App\Models\Typology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;



class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $restaurantName = [
            "Pizzeria Amalia",
            "Pizzeria Amore",
            "Pizzeria L'arte della Pizza",
            "Pizzeria Bella Napoli",
            "Pizzeria Capuano's",
        ];


        $restaurantImage = [
            "https://diegocortes.it/wp-content/uploads/2021/03/pizzeria-900x550.jpeg",
            "https://m.media-amazon.com/images/I/51RPpTJkaUS._AC_UF894,1000_QL80_.jpg",
            "https://www.traplettipittori.ch/wp-content/uploads/2019/03/pizzeria.jpg",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREQcwUQQiofxCk0-jBwT1yTSQjDvCvKQnVgMl9LCsvo4uKMpkVQ7-p0sWhSTqae16vSJc&usqp=CAU",
            "https://www.horecabc.pl/wp-content/uploads/2022/02/pizza3.webp",
            "https://skycolor24.pl/photo/jpg/02/20/36/51/240_F_220365180_228e9M6HbPRGIjihitrAjbYw1D05uqZn.jpg"
        ];

        $userIds = User::all()->pluck('id');
       
        $typologyIds = Typology::all()->pluck('id')->toArray();
        foreach ( $userIds as  $userId){
            $newRestaurant = new Restaurant();
            $newRestaurant->user_id = $userId;
            $newRestaurant->name = $faker->$restaurantName;
            $newRestaurant->address = $faker->streetAddress();
            $newRestaurant->VAT_number = $faker->randomNumber(9,true);
            $newRestaurant->email = $faker->email();
            $newRestaurant->opening_time= $faker->randomFloat(2, 1, 12);
            $newRestaurant->image= $faker->randomElement($restaurantName);
            $newRestaurant->telephone_number = $faker->phoneNumber();
            $newRestaurant->vote= $faker->randomFloat(2, 1, 5);
            $newRestaurant->save();

           $newRestaurant->typologies()->sync([$faker->randomElement($typologyIds)]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Typology;
use App\Models\Restaurant;
use Faker\Generator as Faker;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $Array =[
                 'italiano', 'internazionale', 'cinese', 'giapponese','messicano', 
                 'indiano', 'pesce', 'carne', 'pizza',
                ];
        $restaurantIds = restaurant::all()->pluck('user_id')->toArray();
        foreach ($Array as $array){
          
           $typology= new Typology();
           $typology->name = $array;
           $typology->save();

           $typology->restaurants()->sync([$faker->randomElement( $restaurantIds)]);
        }
    }
}
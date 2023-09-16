<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Typology;
use Faker\Generator as Faker;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $Array =['italiano','giapponese','pizzeria','ristorante','cinese'];
      
        foreach ($Array as $array){
          
           $typology= new Typology();
           $typology->name = $array;
           $typology->save();
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plate;
use Faker\Generator as Faker;

class PlateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {

        $plateList = [
            [
                'name' => 'La margherita croccante',
                'description' => 'Pomodoro roma, mozzarella, grana, basilico',
                'plate_price' => '7,80 €',
                'image' => 'https://it.ooni.com/cdn/shop/articles/Margherita-9920.jpg?v=1644590028',
                'visibility' => true,
            ],
            [
                'name' => 'La pizza del diavolo',
                'description' => 'Pomodoro La Fiammante, Fiordilatte di Agerola La Montanina, Spianata
                piccante Raspini selezione Fradiavolo, Parmigiano Reggiano DOP,
                Basilico, Olio EVO',
                'plate_price' => '9,00 €',
                'image' => 'https://thepizzaheaven.com/wp-content/uploads/2021/07/Pizza-Diavola.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'La marinara',
                'description' => 'Pomodoro La Fiammante, Aglio, Origano, Basilico, Olio EVO',
                'plate_price' => '7,00 €',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/11/Pizza_marinara.jpg',
                'visibility' => false,
            ],
            [
                'name' => 'Spaghetti Tricolore',
                'description' => 'Spaghetti con passata di Pomodoro e stracciatella',
                'plate_price' => '11,50 €',
                'image' => 'https://www.uomosenzatonno.com/wp-content/uploads/2015/04/TEXT_2.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'La Carbonara',
                'description' => 'Piatto di Spaghetti di Semola alla Carbonara',
                'plate_price' => '11,00 €',
                'image' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2009/11/ricetta-spaghetti-carbonara/_jcr_content/header-par/image_single.img.jpg/1617198167116.jpg',
                'visibility' => false,
            ],
            [
                'name' => 'Cotoletta di Pollo con Patate a Spicchio',
                'description' => 'La vera Cotoletta di Pollo Milanese con contorno di Patate a Spicchio',
                'plate_price' => '13,90 €',
                'image' => 'https://www.eurofoodservice.it/7048-large_default/cotolpollo-patate-spic4x300gsur.jpg',
                'visibility' => true,
            ],
        ];

        foreach ($plateList as $plate){
            $newPlate = new Plate();
            $newPlate->name = $plate['name'];
            $newPlate->description = $plate['description'];
            $newPlate->plate_price = $plate['plate_price'];
            $newPlate->image = $plate['image'];
            $newPlate->visibility = $plate['visibility'];

            $newPlate->save();

        }
        

            // $newPlate = new Plate();
            // $newPlate->name = 'La pizza del diavolo';
            // $newPlate->description = 'Pomodoro La Fiammante, Fiordilatte di Agerola La Montanina, Spianata
            // piccante Raspini selezione Fradiavolo, Parmigiano Reggiano DOP,
            // Basilico, Olio EVO';
            // $newPlate->plate_price = '9,00€';
            // $newPlate->image = 'https://thepizzaheaven.com/wp-content/uploads/2021/07/Pizza-Diavola.jpg';
            // $newPlate->visibility = true;
            // $newPlate->save();

            // $boolPlate = [
            //     true,
            //     false,
            // ];


            // for ($i=0; $i < 10; $i++){
            //     $newPlate = new Plate();
            //     $newPlate->name = $faker->name();
            //     $newPlate->description = $faker->words(8, true);
            //     $newPlate->plate_price = $faker->randomFloat(1, 5, 15);
            //     $newPlate->image = $faker->imageUrl(640, 480, 'foods', true);
            //     $newPlate->visibility = $faker->randomElement($boolPlate);
            //     $newPlate->save();

            // }




    }
}

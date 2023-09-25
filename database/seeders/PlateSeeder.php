<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plate;
use App\Models\Restaurant;
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
                'name' => 'Salsiccia e funghi',
                'description' => 'Pomodoro San Marzano, fiordilatte, salsiccia',
                'plate_price' => '10,50€',
                'image' => 'https://www.dolcidee.it/media/uploads/recipe/5f27c80d1de9f_tmpbe6d34814b8e40bea08c9cdcd2210be0.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'Quattro formaggi',
                'description' => 'Fiore di latte, provola, brie, bufala',
                'plate_price' => '10,00 €',
                'image' => 'https://blog.giallozafferano.it/ricettechepassione/wp-content/uploads/2020/05/pizza-napoletana-4-formaggi-bianca.jpg',
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
                'name' => 'Gnocchi alla Sorrentina',
                'description' => 'Piatto di Gnocchi alla Sorrentina: Pomodoro e Mozzarella',
                'plate_price' => '10,30 €',
                'image' => 'https://www.giallozafferano.it/images/ricette/197/19745/foto_hd/hd650x433_wm.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'Strigoli al Pesto Genovese',
                'description' => 'Piatto di Strigoli al Pesto Genovese',
                'plate_price' => '10,60 €',
                'image' => 'https://dalmonegogelati.it/2294-thickbox_default/strigoli-al-pesto-genovese-c.jpg',
                'visibility' => false,
            ],
            [
                'name' => 'Spaghetti Cacio e Pepe',
                'description' => 'Piatto di Spaghetti Cacio e Pepe',
                'plate_price' => '11,60 €',
                'image' => 'https://www.giallozafferano.com/images/228-22822/Spaghetti-Cacio-e-Pepe-Pecorino-and-black-pepper-spaghetti_1200x800.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'Cotoletta di Pollo con Patate a Spicchio',
                'description' => 'La vera Cotoletta di Pollo Milanese con contorno di Patate a Spicchio',
                'plate_price' => '13,90 €',
                'image' => 'https://www.eurofoodservice.it/7048-large_default/cotolpollo-patate-spic4x300gsur.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'Lasagna alla bolognese',
                'description' => 'Piatto di Lasagne alla Bolognese',
                'plate_price' => '10,20 €',
                'image' => 'https://www.fattoincasadabenedetta.it/wp-content/uploads/2022/12/LASAGNA_SAPORITA_SITO-6.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'Risotto allo zafferano',
                'description' => 'Il classico risotto Milanese',
                'plate_price' => '10,50 €',
                'image' => 'https://www.cucchiaio.it/content/dam/cucchiaio/it/ricette/2009/11/ricetta-risotto-alla-milanese/risotto-alla-milanese-ante.jpg',
                'visibility' => false,
            ],
            [
                'name' => 'Insalata Caesar',
                'description' => 'Iceberg, Pollo Grigliato, Bacon, Scaglie di Parmigiano, Crostini, Salsa Caesar',
                'plate_price' => '12,90 €',
                'image' => 'https://media-assets.lacucinaitaliana.it/photos/643d6cc4a47a4b7c571e79b3/1:1/w_2560%2Cc_limit/Caesar-Salad.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'Involtini primaversa',
                'description' => 'Germogli di soia, peperoni',
                'plate_price' => '5,90 €',
                'image' => 'https://www.giallozafferano.it/images/ricette/230/23004/foto_hd/hd650x433_wm.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'Bao maiale 3pz',
                'description' => 'Maiale, cipollotti, zenzero',
                'plate_price' => '6,00 €',
                'image' => 'https://cuchina.it/wp-content/uploads/2021/01/2020-10-20-18-42-59-071-scaled-e1679851947587-755x1024.jpg',
                'visibility' => false,
            ],
            [
                'name' => 'Bao manzo 3pz',
                'description' => 'Manzo, zenzero, cipollotti',
                'plate_price' => '6,50 €',
                'image' => 'https://cuchina.it/wp-content/uploads/2021/01/2020-10-20-18-42-59-071-scaled-e1679851947587-755x1024.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'Ravioli manzo',
                'description' => 'Manzo, zenzero, erbe cipolline',
                'plate_price' => '6,50 €',
                'image' => 'https://cinaintavola.com/wp-content/uploads/2020/11/dscf4308-800x530.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'Riso alla cantonese',
                'description' => 'Riso basmati, prosciutto cotto, piselli, mais e uova',
                'plate_price' => '7,50 €',
                'image' => 'https://www.cucchiaio.it/content/dam/cucchiaio/it/ricette/2012/05/ricetta-riso-cantonese/_R5_7173.jpg',
                'visibility' => true,
            ],
            
            [
                'name' => 'Tempura roll flambe',
                'description' => '8pz di roll con tempura e avocado  esterno salmone alla fiamma con salsa teriyaki e sesamo',
                'plate_price' => '13,90 €',
                'image' => 'https://www.youkimagenta.it/wp-content/uploads/2020/11/202-salmon-flambe.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'Salmone  philadelphia roll',
                'description' => '9pz di roll con avocado, salmone, philadelphia e sesamo',
                'plate_price' => '10,00 €',
                'image' => 'https://www.principatodilucedio.it/admin/public/ricette/e96ead09d1aef03b908caa687d2d193f/thumb999_sushi_1563270300_1563270300.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'Tiger Roll',
                'description' => '8 pezzi - roll con tempura di gambero, ricoperto da fette di salmone e salsa teriyaki',
                'plate_price' => '10,90 €',
                'image' => 'https://134742494.cdn6.editmysite.com/uploads/1/3/4/7/134742494/s977809178166563819_p93_i1_w1920.jpeg',
                'visibility' => false,
            ],
            [
                'name' => 'Ebi in Tempura Crunch Roll',
                'description' => '8 pezzi - roll di gamberi in tempura con avocado, cetriolo, ricoperto con mayo piccante, salsa unagi e cipolla fritta',
                'plate_price' => '11,00 €',
                'image' => 'https://chefjar.com/wp-content/uploads/2021/05/crunchy-roll-sushi-01-2.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'Nigiri Salmone',
                'description' => '4 pezzi - riso e salmone',
                'plate_price' => '5,90 €',
                'image' => 'https://www.gustissimo.it/articoli/ricette/ricette-piatti-unici/nigiri-salmone.jpeg',
                'visibility' => true,
            ],
            [
                'name' => 'Sashimi Maguro',
                'description' => '6 pezzi - tonno',
                'plate_price' => '10,90 €',
                'image' => 'https://valenzasapporo.it/wp-content/uploads/2022/08/Sashimi-Maguro-2.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'Chicken karaage',
                'description' => 'Filetti di pollo fritto in stile giapponese',
                'plate_price' => '9,00 €',
                'image' => 'https://i8b2m3d9.stackpathcdn.com/wp-content/uploads/2022/02/Karaage_Chicken_7349sq.jpg',
                'visibility' => false,
            ],
            [
                'name' => 'Yakitori don',
                'description' => 'Bowl di riso al vapore con pollo yakitori e verdure',
                'plate_price' => '14,00 €',
                'image' => 'https://sudachirecipes.com/wp-content/uploads/2023/09/yakitori-don-thumb.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'El Pulled Burrito',
                'description' => 'Riso basmati, pulled pork, fagioli rossi, pico de gallo, panna acida e guacamole',
                'plate_price' => '9,90 €',
                'image' => 'https://cheatdaydesign.com/wp-content/uploads/2022/05/Pulled-Pork-Burrito-Recipe-720x405.jpg',
                'visibility' => false,
            ],
            [
                'name' => 'El Chili Burrito',
                'description' => 'Riso basmati, chili con carne, cheddar, pico de gallo, salsa chili, panna acida e guacamole',
                'plate_price' => '9,90 €',
                'image' => 'https://elmonterey.com/wp-content/uploads/2022/05/02309-8pk-GrnChiliBurr-HeroFoodImage.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'Tacos Fried Chicken',
                'description' => 'Fried chicken, Cheese mix, Insalata e Sour Cream',
                'plate_price' => '2,70 €',
                'image' => 'https://images-gmi-pmc.edge-generalmills.com/daab231c-fe99-4a41-83ca-15d863564572.jpg',
                'visibility' => false,
            ],
            [
                'name' => 'Quesadilla Burger',
                'description' => 'Burger, Cheese mix e salsa Smoky pepper',
                'plate_price' => '5,55 €',
                'image' => 'https://grillonadime.com/wp-content/uploads/2023/03/blackstone-cheeseburger-quesadilla-11-2.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'Nachos Ricos',
                'description' => 'Nachos e chili con carne ricoperti di salsa creamy jalapeño, guacamole fresco, pico de gallo e panna acida',
                'plate_price' => '5,00 €',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Nachos-cheese.jpg/800px-Nachos-cheese.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'Vegetarian Samosa',
                'description' => 'Fagottino ripieno di verdure cotte',
                'plate_price' => '2,00 €',
                'image' => 'https://www.indianhealthyrecipes.com/wp-content/uploads/2021/12/samosa-recipe.jpg',
                'visibility' => false,
            ],
            [
                'name' => 'Chicken curry',
                'description' => 'Bocconcini di pollo cotti con curry e spezie',
                'plate_price' => '8,20 €',
                'image' => 'https://www.cookingclassy.com/wp-content/uploads/2018/08/chicken-curry-11.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'Vegetable biryani',
                'description' => 'Riso basmati cotto con verdure miste',
                'plate_price' => '7,50 €',
                'image' => 'https://www.cookwithmanali.com/wp-content/uploads/2019/09/Vegetable-Biryani-Restaurant-Style.jpg',
                'visibility' => true,
            ],



            [
                'name' => 'Smoke Burgez Menu',
                'description' => 'Carne, cheddar, bacon e Smoke Burgez Sauce',
                'plate_price' => '7,45 €',
                'image' => 'https://static.mymenu.it/multimedia/img/eatery/745/burgez%20ante.jpg',
                'visibility' => true,
            ],
            [
                'name' => 'Manu Crash burger',
                'description' => 'Comprende Carne, cheddar, cipolla grigliata, cetriolini, bacon e Smoke Burgez Sauce - le patatine fritte e la bevanda a scelta',
                'plate_price' => '14,80 €',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9nnvAxIR63L5aMgDCYmrEchT2ACdZQlyYmub_bcLbLDFWtFLvY6cspXy5oVf-xggQ_Ow&usqp=CAU',
                'visibility' => false,
            ],
            
            
        ];

        $restaurantIds = Restaurant::all()->pluck('user_id')->toArray();

        foreach ($plateList as $plate){
            $newPlate = new Plate();
            $newPlate->restaurant_id = $faker->randomElement($restaurantIds);
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

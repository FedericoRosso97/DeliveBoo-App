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
            //pizzerie
            "Pizzeria Amalia",
            "Pizzeria Amore",
            "Pizzeria L'arte della Pizza",
            "Pizzeria Bella Napoli",
            "Pizzeria il Vicoletto",
            "Pizzeria Vulcano's",
            "Pizzeria Profumo di Pizza",
            "Pizzeria That's Amore",
            "Pizzeria Pizza Time",
            "Pizzeria Totò",
            "Pizzeria Peppino",
            "Pizzeria 'Na pizzetta e passa tutto",
            "Pizzeria Qualcuno ha detto Pizza?",
            "Pizzeria Pizza Lovers",
            "Pizzeria Cornicione e Cuore",
            "Pizzeria L'algoritmo della Pizza",
            "Pizzeria Questione di Pizza",
            "Pizzeria C'è Pizza & Pizza",
            "Pizzeria Pronti, Partenza, Pizza",
            "Pizzeria L'Alchimia della della Pizza",            //cinese
            "China Town",
            "I cinque elementi",
            "Uovo Centenario",
            "Le 5 leggende",
            "Il grande Panda",
            "Cina wushu",
            "kung fu panda",
            "Soia & Zenzero",
            "Il Coniglio di Giada",
            "Raviolincina",
            "Imperial",
            "Bao Bao",
            "Mah Jong",
            "Pechino Express",
            "Caiyuan - Orto Cinese",
            "Noodleria del Ponte",
            "Muraglia Fritta",
            "Beijing in Pentola",
            "Bistrò della Seta",
            "Città Wonton",            //Giapponese
            "California San",
            "Su & Shi",
            "Giappolove",
            "Paradiso Sushi World",
            "Arte Makisu",            //Messicano
            "Guacamore",
            "Tacopirina",
            "Nada di Nadia",
            "Tortillandia",
            "Griglia e Cactus",
            "Mucha Lucha",
            "Taco Te Amo",
            "Casa de la Piñata",            //Indiamo
            "Il Leone di Jaipur",
            "Chatni Chef",
            "Currimania",
            "Curry & Cumino",
            "Ghee Ghee",
            "Area Samosa",
            "La Dimora del Tandoor",
            "Il Chiosco del Naan",
            "Vegetindia",
            "Gusto Shava Shava",
            "Menta & Masala",       
        ];


        $restaurantImage = [            //Pizzerie
            "https://diegocortes.it/wp-content/uploads/2021/03/pizzeria-900x550.jpeg",
            "https://www.traplettipittori.ch/wp-content/uploads/2019/03/pizzeria.jpg",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREQcwUQQiofxCk0-jBwT1yTSQjDvCvKQnVgMl9LCsvo4uKMpkVQ7-p0sWhSTqae16vSJc&usqp=CAU",
            "https://www.horecabc.pl/wp-content/uploads/2022/02/pizza3.webp",
            "https://skycolor24.pl/photo/jpg/02/20/36/51/240_F_220365180_228e9M6HbPRGIjihitrAjbYw1D05uqZn.jpg",
            "https://www.aprireinfranchising.it/useruploads/images/costi-per-aprire-pizzeria-e-idee-per-finanziarla.jpg",
            "https://www.seostefano.it/wp-content/uploads/2019/05/pizza-forno-legna.jpg",
            "https://img.grouponcdn.com/deal/4ypmACg2SqzhN8m4zNjB/qu-700x420/v1/t600x362.jpg",
            "https://www.namesnack.com/images/namesnack-pizza-business-names-5184x3456-20200915.jpeg?crop=21:16,smart&width=420&dpr=2",
            "https://garage.pizza/wp-content/uploads/2019/11/DSCF5096-570x570.jpg",
            "https://www.scattidigusto.it/wp-content/uploads/2023/09/pizza-Sogni-di-Latte-pizzeria-Da-Lioniello-a-Succivo.jpg",
            "https://media.istockphoto.com/id/938742222/it/foto/pizza-al-peperoni-di-formaggio.jpg?s=612x612&w=0&k=20&c=-t1owSb9A8akOoiJFAQDGm9dTxNMCfGOuuonRLJ5opw=",
            "https://www.verdictfoodservice.com/wp-content/uploads/sites/17/2023/04/Rudys-Pizza-Napoletana.jpg",
            "https://restaurantportals.com/wp-content/uploads/2023/02/Easiest-Pizza_22-2_11.jpg",
            "https://static.standard.co.uk/s3fs-public/thumbnails/image/2019/07/19/11/yard-sale-pizza-1907.jpg?width=1200&auto=webp&quality=75",            "https://www.deliciousmagazine.co.uk/wp-content/uploads/2020/02/Best-Pizza-Restaurants-London.jpg",
            "https://www.ristorantelespecialita.it/wp-content/uploads/2016/05/condimenti-per-pizza-lespecialita.jpg",
            "https://www.ristorantelespecialita.it/wp-content/uploads/2016/05/condimenti-per-pizza-lespecialita.jpg",            //Cinese
            "https://www.hongkongcucciago.it/assets/img-temp/about/ristorante_cinese2.jpg",
            "https://static.cookist.it/wp-content/uploads/sites/21/2020/02/cucina-cinese-migliori-ristoranti-in-italia.jpg",
            "https://www.napolitoday.it/~media/horizontal-hi/7847824910662/copertina-cucina-cinese-2.jpg",
            "https://hips.hearstapps.com/hmg-prod/images/gettyimages-544042946-1537009788.jpg",
            "https://cinainitalia.com/wp-content/uploads/2019/03/Ristorante-Zen-2.jpg",
            "https://www.ristorantecineseinternazionale.it/wp-content/uploads/2020/07/ristorante-1.png",
            "https://static.gamberorosso.it/2021/05/song-sala.jpg",
            "https://www.pisatoday.it/~media/horizontal-hi/58503662459787/foto-pagina-facebook-ristorante-cinese-pechino-2.jpg",
            "https://res.cloudinary.com/tf-lab/image/upload/w_276,h_216,c_fill,g_auto:subject,q_auto,f_auto/restaurant/bbc1fbd1-2193-4c6c-95b7-43deae01a7ec/0aa87edc-5872-412a-9b63-31d644309f6e.jpg",
            "https://axwwgrkdco.cloudimg.io/v7/__gmpics__/4242809e1891448eba0eecbe5bea66d4",
            "https://www.bon-wei.it/wp-content/uploads/2018/10/UG_6704-480x760.jpg",
            "https://www.sushienoodles.it/wp-content/uploads/2020/03/sushi-e-noodles-set-per-4-perosne.jpg",
            "",
            "",
            "",
            "",
            "",
            "",
            "",
            "",            //Giapponese
            "https://media-cdn.tripadvisor.com/media/photo-s/0a/0e/74/b1/hachi-ristorante-giapponese.jpg",            "https://media-cdn.tripadvisor.com/media/photo-s/18/0c/84/97/take-sushi-ristorante.jpg",            "https://media-cdn.tripadvisor.com/media/photo-s/0a/0e/74/b1/hachi-ristorante-giapponese.jpg",            "https://media-cdn.tripadvisor.com/media/photo-s/18/0c/84/97/take-sushi-ristorante.jpg",            "https://media-cdn.tripadvisor.com/media/photo-s/0a/0e/74/b1/hachi-ristorante-giapponese.jpg",            "https://media-cdn.tripadvisor.com/media/photo-s/18/0c/84/97/take-sushi-ristorante.jpg",            "https://media-cdn.tripadvisor.com/media/photo-s/0a/0e/74/b1/hachi-ristorante-giapponese.jpg",            "https://media-cdn.tripadvisor.com/media/photo-s/18/0c/84/97/take-sushi-ristorante.jpg",            "",            //MESSICANO
            "https://www.ciceroristorantemessicano.it/templates/yootheme/cache/WhatsApp_Image_2022-12-02_at_142327-77f61d37.jpeg",
            "https://www.coolinmilan.it/cool24/wp-content/uploads/2022/09/ristorante-messicano-milano.jpg",
            "https://www.guidatorino.com/wp-content/uploads/2015/05/migliori-ristoranti-messicani-torino.jpg",
            "https://media-cdn.tripadvisor.com/media/photo-s/29/89/15/e2/la-nostra-sala-principale.jpg",
            "https://res.cloudinary.com/tf-lab/image/upload/restaurant/33ff48e9-b81f-4809-9fd0-3b5867b91696/d9aba3b6-a6ae-43de-ab2d-f46f914de387.jpg",
            "https://www.ilportaledimonzabrianza.it/wp-content/uploads/2019/11/6045301_dtlet8152-1024x768.jpg",
            "https://media-cdn.tripadvisor.com/media/photo-s/18/82/6a/66/sala-mexican.jpg",
            "https://www.scattidigusto.it/wp-content/uploads/2022/12/Madre-ristorante-messicano-a-Milano-sala-1280x1600.jpg",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNvai3f9MqWE3DfNh1OwU5A6QyB5wU3DxRSw&usqp=CAU",
            // "https://res.cloudinary.com/tf-lab/image/upload/restaurant/a46a055d-df1a-48ca-87db-d18645cfa268/4eb3b249-5962-4e72-ab37-2fc8eea4ab00.jpg",            //  INDIAMO
            "https://www.festadilaurearoma.org/wp-content/uploads/2020/07/c700x420.jpg",
            "https://media-cdn.tripadvisor.com/media/photo-s/09/e2/91/76/il-locale-interno.jpg",
            "https://wips.plug.it/cips/paginegialle.it/magazine/cms/2020/01/tara.jpg?w=744&h=418&a=c",
            "https://robysushi.com/wp-content/uploads/2018/10/curry-e1540389307635-1024x768.jpg",
            "https://mavericklodges.com/media/curry-house-indian-restaurant-budapest.jpg",
            "https://media-cdn.tripadvisor.com/media/photo-s/04/8d/d1/40/le-nostre-speciaita.jpg",
            "https://media-cdn.tripadvisor.com/media/photo-s/07/4f/17/1a/ristorante-pizzeria-nazionale.jpg",
            "https://www.ioscelgoveg.it/wp-content/uploads/2018/09/rangoli-ristorante-indiano.jpg"        ];

        $userIds = User::all()->pluck('id');
       
        $typologyIds = Typology::all()->pluck('id')->toArray();
        foreach ( $userIds as  $userId){
            $newRestaurant = new Restaurant();
            $newRestaurant->user_id = $userId;
            $newRestaurant->name = $faker->randomElement($restaurantName);
            $newRestaurant->address = $faker->streetAddress();
            $newRestaurant->VAT_number = $faker->randomNumber(9,true);
            // $newRestaurant->email = $faker->email();
            $newRestaurant->opening_time= $faker->randomFloat(2, 1, 12);
            $newRestaurant->image= $faker->randomElement($restaurantImage);
            $newRestaurant->telephone_number = $faker->phoneNumber();
            $newRestaurant->vote= $faker->randomFloat(2, 1, 5);
            $newRestaurant->save();

           $newRestaurant->typologies()->sync([$faker->randomElement($typologyIds)]);
        }
    }
}

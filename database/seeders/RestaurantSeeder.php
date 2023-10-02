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
            "Pizzeria L'algoritmo della Pizza",
            "Pizzeria L'algoritmo della Pizza",
            "Pizzeria L'algoritmo della Pizza",
            "Pizzeria L'algoritmo della Pizza",
        ];


        $restaurantImage = [
            "https://diegocortes.it/wp-content/uploads/2021/03/pizzeria-900x550.jpeg",
            "https://m.media-amazon.com/images/I/51RPpTJkaUS._AC_UF894,1000_QL80_.jpg",
            "https://www.traplettipittori.ch/wp-content/uploads/2019/03/pizzeria.jpg",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREQcwUQQiofxCk0-jBwT1yTSQjDvCvKQnVgMl9LCsvo4uKMpkVQ7-p0sWhSTqae16vSJc&usqp=CAU",
            "https://www.horecabc.pl/wp-content/uploads/2022/02/pizza3.webp",
            "https://skycolor24.pl/photo/jpg/02/20/36/51/240_F_220365180_228e9M6HbPRGIjihitrAjbYw1D05uqZn.jpg",
            "https://www.aprireinfranchising.it/useruploads/images/costi-per-aprire-pizzeria-e-idee-per-finanziarla.jpg",
            "https://www.seostefano.it/wp-content/uploads/2019/05/pizza-forno-legna.jpg",
            "https://t1.pixers.pics/img-1fb6f67c/quadri-su-tela-pizza-italiana-e-bicchieri-di-vino-bianco-in-chianti-italia.jpg?H4sIAAAAAAAAA3WOTW7EIAyFr0OkJDYQoHCA2c4RooSYadr8IGDaUU9fplWXlRd-tvX8PrgfeQoEno5CCfZ1WTaCsG51yi5RXr-IYTtw07i63RgiNu78oOTTGVknZNtxwVstTaukbdznVJ37lN7ZaykxO4As-7g-6rvafAa_ZxDINXAEZQIpScEsEtUYt7McZ8eRd_phdCf6eNxafFbzhzJghXkilLTurDKdNaywt3hr4J_AXw3VBZcrKAuDBGF_BOJ4uSo7SGGVHa01FpWfZwpeWAozFyboen7hWmia-5ryDT-bViMwAQAA",
            "https://www.namesnack.com/images/namesnack-pizza-business-names-5184x3456-20200915.jpeg?crop=21:16,smart&width=420&dpr=2",
            "https://garage.pizza/wp-content/uploads/2019/11/DSCF5096-570x570.jpg",
            "https://www.scattidigusto.it/wp-content/uploads/2023/09/pizza-Sogni-di-Latte-pizzeria-Da-Lioniello-a-Succivo.jpg",
            "https://media.istockphoto.com/id/938742222/it/foto/pizza-al-peperoni-di-formaggio.jpg?s=612x612&w=0&k=20&c=-t1owSb9A8akOoiJFAQDGm9dTxNMCfGOuuonRLJ5opw=",
            "https://www.verdictfoodservice.com/wp-content/uploads/sites/17/2023/04/Rudys-Pizza-Napoletana.jpg",
            "",
            "",
            "",
            "",
            "",
            "",

        ];

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

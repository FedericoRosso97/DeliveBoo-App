<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use Faker\Generator as Faker;


class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
            $statusList = [
                "The rider is delivering . . .",
                "Your order has been collected by the rider . . .",
            ];

        for ($i=0; $i < 20; $i++){
            $newOrder = new Order();
            $newOrder->status_order = $faker->randomElement($statusList);
            $newOrder->phone_number = $faker->phoneNumber;
            $newOrder->name = $faker->name();
            $newOrder->address = $faker->address();
            $newOrder->save();

        }

    }
}

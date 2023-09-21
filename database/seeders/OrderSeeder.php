<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Plate;

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
                "Delivered",
                "Delivering",
            ];

            $plateIds = Plate::all()->pluck('id')->toArray();

        for ($i=0; $i < 100; $i++){
            $newOrder = new Order();
            $newOrder->status_order = $faker->randomElement($statusList);
            $newOrder->phone_number = $faker->phoneNumber;
            $newOrder->name = $faker->name();
            $newOrder->address = $faker->address();
            $newOrder->save();

            $newOrder->plates()->sync([$faker->randomElement($plateIds)]);

        }

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;
use App\Models\Order;
use Faker\Generator as Faker;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $orderIds = Order::all()->pluck('id');
        foreach ($orderIds as $orderIds) {
            $payment = new Payment();
            $payment->order_id = $orderIds;
            $payment->date = $faker->date();
            $payment->total_price = $faker->randomFloat(2, 1, 50);
            $payment->payment_status = $faker->boolean();
            $payment->save();

        }
    }
}

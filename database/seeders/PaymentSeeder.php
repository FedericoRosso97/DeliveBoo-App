<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;
use Faker\Generator as Faker;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        
        for ($i=0; $i < 20; $i++) {
            $payment = new Payment();
            $payment->date = $faker->date();
            $payment->total_price = $faker->randomFloat(2, 1, 50);
            $payment->payment_status = $faker->boolean();
            $payment->save();

        }
    }
}

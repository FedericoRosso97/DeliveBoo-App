<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        for ($i=0; $i < 20; $i++) {
            $payment = new Payment();
            $payment->date= $faker->$faker->date();
            $payment->total_price= $faker->randomFloat(2, 1, 50);
            $payment->payment_status=$faker->boolean();
            $newUser->save();

        }
    }
}

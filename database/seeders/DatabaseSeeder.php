<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
<<<<<<< HEAD
          
            PlateSeeder::class,
            OrderSeeder::class,
            UserSeeder::class,
            RestaurantSeeder::class,
            TypologySeeder::class,
=======


            UserSeeder::class,
            RestaurantSeeder::class,
            TypologySeeder::class,
            PlateSeeder::class,
            OrderSeeder::class,

>>>>>>> origin/definitivo-relazione-risto-plates
            PaymentSeeder::class,
            
        ]);
    }
}

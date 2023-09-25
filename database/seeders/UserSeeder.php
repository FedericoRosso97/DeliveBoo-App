<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //

        $newUser = new User();
        $newUser->name = 'ginetta';
        $newUser->email= 'g@gmail.com';
        $newUser->password= Hash::make('12345678');
        $newUser->save();


        for ($i=0; $i < 30; $i++) {
            $newUser = new User();
            $newUser->name = $faker->name();
            $newUser->email= $faker->email();
            $newUser->password= Hash::make($faker->password());
            $newUser->save();

        }

    }
}

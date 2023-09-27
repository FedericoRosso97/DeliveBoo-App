<?php

namespace Database\Seeders;

use App\Models\Chart;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            array('mese' =>'Gennaio', 'anno'=>'2023','quantità'=>'10'),
            array('mese' =>'Febbraio', 'anno'=>'2023', 'quantità'=>'40'),
            array('mese' =>'Marzo', 'anno'=>'2023', 'quantità'=>'20'),
        ];

        Chart::insert($data);
    }
}

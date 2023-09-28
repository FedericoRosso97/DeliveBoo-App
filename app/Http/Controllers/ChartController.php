<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    public function LineChart()
    {
        
       // $result = DB::select(DB::raw("SELECT orders.name,sum(plates.plate_price)as plates FROM `orders` JOIN plates on plates.plate_price GROUP BY orders.id; "));

        //$data = '';
        
        //
        /*foreach ($result as $val){
            $data.="[".$val->name.",".$val->name."],";
        }
        //dd($data);
        */

        return view('line-chart');



        $charts = Chart::all();
        
        $data = [];

        foreach($charts as $chart){
            $data['label'][] = $chart->mese;
            $data['data'][] = $chart->anno;
            $data['value'][] = $chart->quantità;
        }
        $data['data'] =json_encode($data);

        return view('charts.index', $data);
        
    }
}

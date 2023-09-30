<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    public function LineChart()
    {
        return view('line-chart');
    }
}

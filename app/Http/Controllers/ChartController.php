<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    //
    public function index()
    {
        $charts = Chart::all();
        return view('charts.index', compact('charts'));
    }
}

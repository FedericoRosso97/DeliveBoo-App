<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $restaurant = Restaurant::all();
        return response()->json([
            'success'=>true,
            'result'=>$restaurant

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        $validation = Validator::make($data,
            [
                'name' => ['required', 'max: 60'],
                'address'=>['required','max:60'],
                'address'=>['required','max:60'],
                'email' =>['required','max:60'],
                'opening_time'=>'required',
                'image' => 'required',
                'telephone_number' => 'required',
            ]);

        if ( $validation->fails()){
            return response()->json([
                'success' => false,
                'errors' => $validation->errors(),
            ]);

            return response()->json([
                'success' => true
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $restaurant = Restaurant::findOrFail($id);

        return response()->json([
            'success'=>true,
            'result'=>$restaurant

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

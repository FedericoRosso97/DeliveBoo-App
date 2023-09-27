<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;//add
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Typology;
//add
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $restaurants = Restaurant::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //$restaurants = Restaurant::all();
        $typologies = Typology::all();

        return view('restaurants.create',compact('typologies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name' => ['required', 'unique:restaurants','min:3', 'max:255'],
            'address'=>['required','min:10'],
            'VAT_number' => ['required', 'min:8'],
            'typologies' => ['exists:typologies,id'],
           // 'id' => ['required', 'exists:categories,id'],
        ]);

        $data['user_id'] = Auth::user()->id;
        $newRestaurant = Restaurant::create($data);

        $newRestaurant->save();

        if ($request->has('typologies')){
            $newRestaurant->typologies()->sync( $request->typologies);
        }

        return redirect()->route('restaurants.show', $newRestaurant);
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        //
    
        return view('restaurants.show', compact('restaurant'));
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

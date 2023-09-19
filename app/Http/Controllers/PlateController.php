<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plate;
use Illuminate\Validation\Rule;

class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $plates = Plate::all();
        return view('plates.index', compact('plates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('plates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $data = $request->validate([
            'name' => ['required', 'unique:plates', 'max: 60', 'min:4'],
            'description' => ['required', 'max: 60'],
            'description' => ['required', 'max: 60'],
            'plate_price' => 'required',
            'image' => 'required',
            'visibility' => 'required|in:0,1',

        ]);

        $plate = Plate::create($data);
        return redirect()->route('plates.index', compact('plate'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Plate $plate)
    {
        //

        return view('plates.show', compact("plate"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plate $plate)
    {
        //

        return view ('plates.edit', compact('plate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plate $plate)
    {
        //
        $data = $request->validate([
            'name' => ['required', Rule::unique('plates')->ignore($plate->id), 'max: 60', 'min:4'],
            'description' => ['required', 'max: 60'],
            'description' => ['required', 'max: 60'],
            'plate_price' => 'required',
            'image' => 'required',
            'visibility' => 'required|in:0,1',

        ]);

        $plate->update($data);
        return redirect()->route('plates.show', compact('plate'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

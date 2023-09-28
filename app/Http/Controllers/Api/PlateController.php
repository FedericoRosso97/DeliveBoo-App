<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plate;

class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plates = Plate::paginate(40);

        return response()->json(
            [
                'success' => true,
                'results' => $plates,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        // $data = $request->all();
        // $plate = Plate::create($data);

        // return response()->json([
        //     'success' => true
        // ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        // $data = $request->all();

        // $validation = Validator::make($data,
        //     [
        //         'name' => ['required', 'max: 60'],
        //         'description' => ['required', 'max: 60'],
        //         'description' => ['required', 'max: 60'],
        //         'plate_price' => 'required',
        //         'image' => 'not required',
        //         'visibility' => 'required',

        //     ]);

        // if ( $validation->fails()){
        //     return response()->json([
        //         'success' => false,
        //         'errors' => $validation->errors(),
        //     ]);

        //     $plate = Plate::create($data);
            
        //     return response()->json([
        //         'success' => true
        //     ]);
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $plate = Plate::findOrFail($id);

        return response()->json([
            'success' => true,
            'results' => $plate
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

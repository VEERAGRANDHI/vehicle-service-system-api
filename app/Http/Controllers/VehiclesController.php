<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Vehicle::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //
        $vehicle = Vehicle::create($request->all());

        return response()->json($vehicle, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $vehicle = Vehicle::find($id);
        return response()->json($vehicle, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $vehicle = Vehicle::find($id);
        if ($vehicle) {
            $vehicle->update($request->all());
            return response()->json($vehicle, 200);
        } else {
            return response()->json(["message" => "Vehicle details are not found with given ID"], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $vehicle = Vehicle::find($id);
        if ($vehicle) {
            $vehicle->delete();
            return response()->json($vehicle, 200);
        }
        return response()->json(["message" => "Vehicle details are not found with the given ID"], 404);
    }
}

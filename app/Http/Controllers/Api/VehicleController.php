<?php

namespace App\Http\Controllers\Api;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehicleController extends Controller
{
    public function passToll(string $id, string $toll_id)
    {
       $vehicle = Vehicle::find($id);
       $vehicle->tolls()->attach([(int)$toll_id]);
       $toll = $vehicle->tolls()->find($toll_id);

       $vehicle->update(["total_expended" => $vehicle->total_expended + $vehicle->vehicleType->price]);
       $toll->update(["earnings" => $toll->earnings + $vehicle->vehicleType->price]);

       return response()->json([
        "name" => $toll->name,
        "earnings" => $toll->earnings,
        "license" => $vehicle->license,
        "total_expended" => $vehicle->total_expended
       ], 200);
    }

    public function store(Request $request)
    {
        $vehicle = Vehicle::create([
            "type_id" => $request->type_id,
            "license" => $request->license,
            "total_expended" => $request->total_expended
        ]);
        
        return response()->json($vehicle, 200);
    }
}

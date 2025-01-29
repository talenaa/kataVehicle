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

       $vehicle->update(["total_expense" => $vehicle->total_expense + $vehicle->vehicleType->price]);
       $toll->update(["earnings" => $toll->earnings + $vehicle->vehicleType->price]);

       return response()->json([
        "name" => $toll->name,
        "earnings" => $toll->earnings,
        "license" => $vehicle->license,
        "total_expense" => $vehicle->total_expense
       ], 200);
    }

    public function store(Request $request)
    {
        $vehicle = Vehicle::create([
            "type_id" => $request->type_id,
            "license" => $request->license,
            "total_expense" => $request->total_expense
        ]);
        
        return response()->json($vehicle, 200);
    }
}

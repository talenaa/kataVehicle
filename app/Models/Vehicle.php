<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        "type_id",
        "license",
        "total_expended"
    ];

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class,"type_id");
    }

    public function tolls()
    {
        return $this->belongsToMany(Toll::class, "vehicle_toll");
    }
}

<?php

namespace Database\Seeders;

use App\Models\Toll;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\VehicleType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
    
        Toll::create([
            "name" => "Campo Limpo",
            "city" => "São Paulo",
            "earnings" => 0
        ]);
    
        Toll::create([
            "name" => "Rota do Atlântico",
            "city" => "Recife",
            "earnings" => 0
        ]);

        Toll::create([
            "name" => "Laranjal",
            "city" => "Belo Horizonte",
            "earnings" => 0
        ]);

        Toll::create([
            "name" => "Casimiro de Abreu",
            "city" => "Rio de Janeiro",
            "earnings" => 0
        ]);

        Toll::create([
            "name" => "Synval Guazelli",
            "city" => "Farroupilha",
            "earnings" => 0
        ]);

        Toll::create([
            "name" => "Estrada do Coco",
            "city" => "Xique-Xique",
            "earnings" => 0
        ]);

        Toll::create([
            "name" => "Mossoró",
            "city" => "Natal",
            "earnings" => 0
        ]);

        Toll::create([
            "name" => "Régis Bittencourt",
            "city" => "Curitiba",
            "earnings" => 0
        ]);

        Toll::create([
            "name" => "Itapipoca",
            "city" => "Fortaleza",
            "earnings" => 0
        ]);

        Toll::create([
            "name" => "Arteris Litoral Sul",
            "city" => "Araquari",
            "earnings" => 0
        ]);
    
        VehicleType::create([
            "type" => "car",
            "price" => 100
        ]);
    
        VehicleType::create([
            "type" => "motorbike",
            "price" => 50
        ]);
    
        VehicleType::create([
            "type" => "2 axle truck",
            "price" => 100
        ]);
    
        VehicleType::create([
            "type" => "3 axle truck",
            "price" => 150
        ]);
    
        VehicleType::create([
            "type" => "4 axle truck",
            "price" => 200
        ]);
    
        VehicleType::create([
            "type" => "5 axle truck",
            "price" => 250
        ]);
    
        $car = Vehicle::create([
            "type_id" => 1,
            "license" => "7996HID",
            "total_expended" => 0
        ]);
    
        $bike = Vehicle::create([
            "type_id" => 2,
            "license" => "6483UGG",
            "total_expended" => 0
        ]);
    
        $truck1 = Vehicle::create([
            "type_id" => 3,
            "license" => "8882KOS",
            "total_expended" => 0
        ]);
    
        $truck2 = Vehicle::create([
            "type_id" => 4,
            "license" => "6372MND",
            "total_expended" => 0
        ]);
    
        $truck3 = Vehicle::create([
            "type_id" => 5,
            "license" => "1998PGS",
            "total_expended" => 0
        ]);
    
        $truck4 = Vehicle::create([
            "type_id" => 6,
            "license" => "1083HJA",
            "total_expended" => 0
        ]);
    }
}

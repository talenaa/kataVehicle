<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Toll;
use App\Models\Vehicle;
use App\Models\VehicleType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;


class VehicleTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfStoreMethodWorks(): void
    {
        VehicleType::create([
            "type" => "car",
            "price" => 100
        ]);

        $response = $this->post('/api/vehicles', [
            "type_id" => 1,
            "license" => "test",
            "total_expended" => 0
        ]);

        $response->assertStatus(200)
                ->assertJsonFragment([
                    "type_id" => 1,
                    "license" => "test",
                    "total_expended" => 0
                ]);
    }

    public function test_CheckIfPassTollMethodWorks(): void
    {
        Toll::create([
            "name" => "test",
            "city" => "test",
            "earnings" => 0
        ]);

        VehicleType::create([
            "type" => "car",
            "price" => 100
        ]);

        Vehicle::create([
            "type_id" => 1,
            "license" => "test",
            "total_expended" => 0
        ]);

        $response = $this->put(route('apipasstoll', ['id' => 1, 'tollId' => 1]));


        $response->assertStatus(200)
                ->assertJsonFragment([
                    "name" => "test",
                    "earnings" => 100,
                    "license" => "test",
                    "total_expended" => 100
                ]);
    }
}
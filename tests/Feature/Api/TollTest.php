<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TollTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfStoreMethodWorks(): void
    {
        $response = $this->post('/api/tolls', [
            "name" => "testName",
            "city" => "testCity",
            "earnings" => 0
        ]);

        $response->assertStatus(200)
                ->assertJsonFragment([
                    "name" => "testName",
                    "city" => "testCity",
                    "earnings" => 0
                ]);
    }
}
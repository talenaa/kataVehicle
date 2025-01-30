<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained("vehicle_types")->onDelete("cascade");
            $table->string('license');
            $table->bigInteger('total_expended');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};

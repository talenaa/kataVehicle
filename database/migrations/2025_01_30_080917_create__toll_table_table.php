<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('tolls', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('city');
            $table->bigInteger('earnings');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('tolls');
    }
};

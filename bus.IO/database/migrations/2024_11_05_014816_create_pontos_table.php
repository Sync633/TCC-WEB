<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pontos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('arrivalPrediction');
            $table->string('departurePrediction');
            $table->json('schedules'); //salva como JSON
            $table->string('fare');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pontos');
    }
};

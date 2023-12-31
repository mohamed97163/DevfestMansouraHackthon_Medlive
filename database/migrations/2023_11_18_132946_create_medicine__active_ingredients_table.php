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
        Schema::create('medicine__active_ingredients', function (Blueprint $table) {
            $table->unsignedBigInteger('medicine_id')->nullable();
            $table->foreign('medicine_id')->references('id')->on('medicines')
            ->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('activeingredient_id')->nullable();
            $table->foreign('activeingredient_id')->references('id')->on('active_ingerdients')
            ->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicine__active_ingredients');
    }
};


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
         Schema::create('pharmacists', function (Blueprint $table) {
             $table->id();
             $table->string('name');
             $table->string('image');
             $table->string('job');
             $table->string('experience');
             $table->unsignedBigInteger('pharmacy_id')->nullable();
             $table->foreign('pharmacy_id')->references('id')->on('pharmacies')
             ->cascadeOnUpdate()->cascadeOnDelete();
             $table->timestamps();
         });
     }
     /**      * Reverse the migrations.
      */
     public function down(): void
     {
         Schema::dropIfExists('pharmacists');
     }
 };  

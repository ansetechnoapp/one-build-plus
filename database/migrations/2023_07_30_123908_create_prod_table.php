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
        Schema::create('prod', function (Blueprint $table) {
            $table->id();
            $table->string('landOwner_propertyName')->nullable();
            // $table->unique('landOwner_propertyName');
            $table->string('address')->nullable(); 
            $table->string('department')->nullable(); 
            $table->string('communes');
            $table->string('borough')->nullable();
            $table->string('area')->nullable();
            $table->Integer('price'); // Utilisation de décimal pour les prix avec 2 décimales de précision
            $table->Integer('price_min')->nullable();
            $table->text('description')->nullable();
            $table->string('ground_type')->nullable();
            $table->string('status')->default('disponible');
            $table->Integer('number_of_bedrooms')->nullable();
            $table->Integer('number_of_bathrooms')->nullable();
            $table->string('location')->default('non');
            $table->string('locationType')->default('non sanitaire');
            $table->timestamps();
            // $table->index('location');
            // $table->index(['communes', 'ground_type']);
            // $table->index(['department', 'borough', 'location']);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prod');
    }
};

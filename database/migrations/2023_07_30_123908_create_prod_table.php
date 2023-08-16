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
            $table->string('land_owner')->nullable();
            $table->string('address')->nullable(); 
            $table->string('department')->nullable(); 
            $table->string('communes');
            $table->string('borough')->nullable();
            $table->string('area')->nullable();
            $table->Integer('price');
            $table->Integer('price_min');
            $table->text('description')->nullable();
            $table->string('ground_type');
            $table->timestamps();
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

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
            $table->string('communes')->nullable();
            $table->string('borough')->nullable();
            $table->string('area')->nullable();
            $table->Integer('price')->nullable();
            $table->Integer('price_min')->nullable();
            $table->string('main_image')->nullable();
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->string('img4')->nullable();
            $table->text('description')->nullable();
            $table->string('ground_type')->nullable();
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

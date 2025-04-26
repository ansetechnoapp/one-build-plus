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
        Schema::create('home_slider_images', function (Blueprint $table) {
            $table->id();
            $table->string('image1')->default('img.png'); // Renommé de img1 à image1
            $table->string('image2')->default('img.png'); // Renommé de img2 à image2
            $table->string('image3')->default('img.png'); // Renommé de img3 à image3
            $table->boolean('active')->default(true); // Ajout d'un champ pour activer/désactiver le slider
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_slider_images');
    }
};

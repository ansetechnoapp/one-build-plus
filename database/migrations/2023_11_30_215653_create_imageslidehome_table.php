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
        Schema::create('imageslidehome', function (Blueprint $table) {
            $table->id();
            $table->string('img1')->default('img.png');
            $table->string('img2')->default('img.png');
            $table->string('img3')->default('img.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imageslidehome');
    }
};

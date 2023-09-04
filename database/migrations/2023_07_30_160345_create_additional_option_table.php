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
        Schema::create('additional_option', function (Blueprint $table) {
            $table->id();
            $table->string('registration_andf')->nullable();
            $table->string('formality_fees')->nullable();
            $table->string('notary_fees')->nullable();
            $table->string('payment_frequency')->default('cash');
            $table->unsignedBigInteger('users_id'); // Clé étrangère
            $table->unsignedBigInteger('prod_id'); // Clé étrangère
            $table->timestamps();
            
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('prod_id')->references('id')->on('prod');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additional_option');
    }
};
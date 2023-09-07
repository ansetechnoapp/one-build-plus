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
            $table->Integer('registration_andf')->default('0');
            $table->Integer('formality_fees')->default('0');
            $table->Integer('notary_fees')->default('0');
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
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
            $table->string('email_users');
            $table->timestamps();
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
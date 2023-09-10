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
        Schema::create('devis', function (Blueprint $table) {
            $table->id();
            $table->decimal('prix', 10, 2);
            $table->decimal('montant', 10, 2);
            $table->date('dateDevis');
            $table->date('dateExpiration');
            $table->Integer('prod_id');
            $table->unsignedBigInteger('additional_option_id'); // Clé étrangère
            $table->unsignedBigInteger('users_id'); // Clé étrangère
            $table->timestamps();

            $table->foreign('additional_option_id')->references('id')->on('additional_option');
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devis');
    }
};

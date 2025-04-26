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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->decimal('price', 10, 2);
            $table->decimal('montant', 10, 2);
            $table->date('quote_date'); // Renommé de dateDevis
            $table->date('expiration_date'); // Renommé de dateExpiration
            $table->unsignedBigInteger('product_id'); // Renommé de prod_id
            $table->unsignedBigInteger('additional_option_id');
            $table->unsignedBigInteger('users_id');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('additional_option_id')->references('id')->on('additional_options');
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};

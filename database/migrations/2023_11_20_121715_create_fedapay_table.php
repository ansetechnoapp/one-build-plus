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
        Schema::create('fedapay_transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('transaction_id'); // Renommé de fedapayTransactionId
            $table->string('transaction_url'); // Renommé de fedapayTransactionUrl
            $table->string('status')->default('unpaid'); // Renommé de statut à status
            $table->unsignedBigInteger('quote_id'); // Renommé de devis_id
            $table->unsignedBigInteger('users_id');
            $table->timestamps();

            $table->foreign('quote_id')->references('id')->on('quotes');
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fedapay_transactions');
    }
};

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
        Schema::create('fedapay', function (Blueprint $table) {
            $table->id();
            $table->Integer('fedapayTransactionId');
            $table->string('fedapayTransactionUrl');
            $table->string('statut')->default('Non payer');
            $table->unsignedBigInteger('devis_id');
            $table->unsignedBigInteger('users_id');
            $table->timestamps();

            $table->foreign('devis_id')->references('id')->on('devis');
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fedapay');
    }
};

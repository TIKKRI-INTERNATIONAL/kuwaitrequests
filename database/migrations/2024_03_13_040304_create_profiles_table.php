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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->string('merchant_name')->nullable();
            $table->string('legal_name')->nullable();
            $table->string('legal_address')->nullable();
            $table->string('billing_address')->nullable();
            $table->text('contract_photo')->nullable();
            $table->text('signatory_document')->nullable();
            $table->text('articles_of_association')->nullable();
            $table->text('licence_photo')->nullable();
            $table->string('default_currency', 45)->nullable();
            $table->date('licence_expiry')->nullable();
            $table->text('note_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};

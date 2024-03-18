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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sub_id');
            $table->string('type');
            $table->string('area')->nullable();
            $table->string('block')->nullable();
            $table->string('street')->nullable();
            $table->string('building_no')->nullable();
            $table->string('jedda')->nullable();
            $table->string('apartment')->nullable();
            $table->string('floor')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};

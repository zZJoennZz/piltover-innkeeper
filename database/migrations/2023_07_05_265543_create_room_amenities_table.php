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
        Schema::create('room_amenities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('amenities_id');
            $table->unsignedBigInteger('rooms_id');
            $table->timestamps();

            $table->foreign('amenities_id')->references('id')->on('amenities');
            $table->foreign('rooms_id')->references('id')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_amenities');
    }
};

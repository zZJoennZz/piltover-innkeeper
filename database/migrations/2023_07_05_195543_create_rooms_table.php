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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('name');
            $table->string('description');
            $table->unsignedBigInteger('room_types_id');
            $table->decimal('rate');
            $table->integer('max_capacity');
            $table->boolean('is_smoking_allowed');
            $table->boolean('is_pet_allowed');
            $table->boolean('is_enabled');
            $table->unsignedBigInteger('users_id');
            $table->timestamps();

            $table->foreign('room_types_id')->references('id')->on('room_types');
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};

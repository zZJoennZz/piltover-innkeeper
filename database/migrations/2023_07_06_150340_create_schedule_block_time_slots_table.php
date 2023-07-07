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
        Schema::create('schedule_block_time_slots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schedule_blocks_id');
            $table->time('from_time');
            $table->time('to_time');
            $table->timestamps();

            $table->foreign('schedule_blocks_id')->references('id')->on('schedule_blocks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule_block_time_slots');
    }
};

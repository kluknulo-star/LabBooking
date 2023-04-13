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
        Schema::create('schedule_groups', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('group_id')->nullable()->index()->references('id')->on('groups');
            $table->foreignId('day_id')->nullable()->index()->references('id')->on('days');
            $table->foreignId('time_lesson_id')->nullable()->index()->references('id')->on('time_lessons');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule_groups');
    }
};

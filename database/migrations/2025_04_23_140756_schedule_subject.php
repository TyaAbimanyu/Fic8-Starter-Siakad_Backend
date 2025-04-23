<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('schedule_subject', function (Blueprint $table) {
            $table->id('schedule_subject_id');
            $table->foreignId('schedule_id')->references('schedule_id')->on('schedules')->constrained()->onDelete('cascade');
            $table->foreignId('subject_id')->references('subject_id')->on('subjects')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('schedule_subject');
    }
};

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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fieldOfStudyId');
            $table->foreign('fieldOfStudyId')->references('id')->on('fields')->onDelete('cascade');
            $table->string('name');
            $table->tinyInteger('credits');
            $table->string('timetable')->nullable();
            $table->string('pictureLocation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};

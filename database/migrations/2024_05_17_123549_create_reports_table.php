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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('subject_id');
            $table->string('comment');
            $table->smallInteger('points');
            $table->timestamps();

//            $table->foreign('teacher_id')->references('id')->on('users');
            $table->foreign('student_id')->references('id')->on('users');
            $table->foreign('subject_id')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
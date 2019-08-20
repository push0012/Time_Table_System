<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_subjects', function (Blueprint $table) {
            $table->integer('semester');
            $table->integer('week_hours');//lecture practicle
            $table->boolean('deleted');
            $table->string('user_data',255);
            $table->timestamps();
        });

        Schema::table('course_subjects', function (Blueprint $table) {
            $table->unsignedBigInteger('course_code');
        
            $table->foreign('course_code')->references('course_code')->on('courses')
            ->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('course_subjects', function (Blueprint $table) {
            $table->string('subject_id',10);
        
            $table->foreign('subject_id')->references('subject_id')->on('subjects')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_subjects');
    }
}

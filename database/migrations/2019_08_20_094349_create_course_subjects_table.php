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
            $table->integer('notional_hours');
            $table->integer('lesson_hours');
            $table->integer('week_lesson_hours');
            $table->year('ac_year');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('deleted');
            $table->string('user_data',255);
            $table->timestamps();
            $table->string('subject_id',10);
        });

        Schema::table('course_subjects', function (Blueprint $table) {
            $table->unsignedBigInteger('course_code');
        
            $table->foreign('course_code')->references('course_code')->on('courses')
            ->onDelete('cascade')->onUpdate('cascade');
        });

        /*Schema::table('course_subjects', function (Blueprint $table) {
            
        
            $table->foreign('subject_id')->references('subject_id')->on('subjects')
            ->onDelete('cascade')->onUpdate('cascade');
        });*/

        Schema::table('course_subjects', function (Blueprint $table) {
            $table->unsignedBigInteger('lecturer_id');
        
            $table->foreign('lecturer_id')->references('lecturer_id')->on('lecturers')
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

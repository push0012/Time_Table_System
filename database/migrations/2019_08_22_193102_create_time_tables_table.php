<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_tables', function (Blueprint $table) {
            $table->bigIncrements('schedule_id');
            $table->string('subject_id');
            //$table->integer('course_code');
            $table->integer('semester');
            $table->year('ac_year');
            $table->string('batch');
            $table->integer('dayofweek');
            $table->integer('sizeofday');
            $table->boolean('deleted');
            $table->string('user_data',255);
            $table->timestamps();
        });

        Schema::table('time_tables', function (Blueprint $table) {
            $table->unsignedBigInteger('course_code');
        
            $table->foreign('course_code')->references('course_code')->on('courses')
            ->onDelete('cascade')->onUpdate('cascade');
        });
        /*Schema::table('time_tables', function (Blueprint $table) {
            $table->foreign('subject_id')->references('subject_id')->on('subjects')
            ->onDelete('cascade')->onUpdate('cascade');
        });*/
        Schema::table('time_tables', function (Blueprint $table) {
            $table->unsignedBigInteger('lecturer_id');
        
            $table->foreign('lecturer_id')->references('lecturer_id')->on('lecturers')
            ->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('time_tables', function (Blueprint $table) {
            $table->unsignedBigInteger('classroom_id');
        
            $table->foreign('classroom_id')->references('classroom_id')->on('classrooms')
            ->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('time_tables', function (Blueprint $table) {
            $table->unsignedBigInteger('slot_id');
        
            $table->foreign('slot_id')->references('slot_id')->on('time_slots')
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
        Schema::dropIfExists('time_tables');
    }
}

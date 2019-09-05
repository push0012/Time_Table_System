<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomAllocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_allocations', function (Blueprint $table) {
            $table->date('start_date');
            $table->date('end_date');
            $table->year('ac_year');
            $table->string('subject_id');
        });

        Schema::table('room_allocations', function (Blueprint $table) {
            $table->unsignedBigInteger('course_code');
        
            $table->foreign('course_code')->references('course_code')->on('courses')
            ->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('room_allocations', function (Blueprint $table) {
            $table->unsignedBigInteger('classroom_id');
        
            $table->foreign('classroom_id')->references('classroom_id')->on('classrooms')
            ->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('room_allocations', function (Blueprint $table) {
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
        Schema::dropIfExists('room_allocations');
    }
}

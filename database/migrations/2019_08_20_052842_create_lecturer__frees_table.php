<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturerFreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturer_frees', function (Blueprint $table) {
            $table->string('free_time');
            $table->timestamps();
        });

        Schema::table('lecturer_frees', function (Blueprint $table) {
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
        Schema::dropIfExists('lecturer_frees');
    }
}

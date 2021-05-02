<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferedCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offered_course', function (Blueprint $table) {
            //$table->id();
            $table->integer('OfferedCourseId');
            $table->primary('OfferedCourseId');
            $table->string('IsOffered')->default('No');
            $table->integer('No_of_Sec')->nullable();
            $table->integer('isAssigned')->default(0);
            $table->integer('No_of_Teachers')->nullable();
            $table->integer('Loads')->nullable();
            $table->timestamps();
        });

        Schema::table('offered_course', function (Blueprint $table) {
            $table->foreign('OfferedCourseId')->references('id')->on('added_courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offered_courses');
    }
}

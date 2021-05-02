<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_teacher', function (Blueprint $table) {
            $table->integer('OfferedCourseId');
            $table->string('OfferedCourseCode');
            $table->string('Initials');
            $table->primary(array('OfferedCourseId', 'Initials'));
            $table->integer('Loads');
        });

        Schema::table('assign_teacher', function (Blueprint $table) {
            $table->foreign('OfferedCourseId')->references('OfferedCourseId')->on('offered_course');
            $table->foreign('Initials')->references('Initials')->on('add_teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assign_teacher');
    }
}

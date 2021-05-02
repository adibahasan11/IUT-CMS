<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_teacher', function (Blueprint $table) {
            $table->string('Initials');
            $table->primary('Initials');
            $table->string('Name');
            $table->string('Designations');
            $table->integer('Loads_remaining')->nullable();
            $table->string('IsActive')->default('No');
            $table->timestamps();
        });

        Schema::table('add_teachers', function (Blueprint $table) {
            $table->foreign('Designations')->references('Designations')->on('designation_loads');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_teachers');
    }
}

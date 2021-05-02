<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IdGeneration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER id_generation 
                        BEFORE INSERT ON `added_courses`
                        FOR EACH ROW
                        BEGIN
                        DECLARE max_id integer;
                        SELECT MAX(`id`) INTO max_id FROM `added_courses`;
                        IF max_id = NULL THEN 
                            SET NEW.id = 1;
                        ELSE
                            SET NEW.id = max_id +1;
                        END IF;
                        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

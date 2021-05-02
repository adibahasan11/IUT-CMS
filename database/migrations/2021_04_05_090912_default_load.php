<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DefaultLoad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER default_load 
                        BEFORE INSERT ON `add_teachers`
                        FOR EACH ROW
                        BEGIN
                        DECLARE v_loads integer;
                        SELECT `Loads` INTO v_loads FROM `designation_loads` WHERE Designations = NEW.Designations;
                        
                        SET NEW.Loads_remaining = v_loads;
                        
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AssignLoad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER teacher_assigned 
                        AFTER INSERT ON `assign_teachers`
                        FOR EACH ROW
                        BEGIN
                        DECLARE course_id integer;
                        
                        UPDATE `offered_course`
                        SET `isAssigned` = 1 
                        WHERE `OfferedCourseId` = NEW.OfferedCourseId;
                        
                        UPDATE `add_teachers` 
                        SET `Loads_remaining` = Loads_remaining - NEW.loads
                        WHERE `Initials` = NEW.Initials;
                        
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

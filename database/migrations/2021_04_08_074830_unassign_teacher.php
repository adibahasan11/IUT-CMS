<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UnassignTeacher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER unassign_teacher 
        AFTER DELETE ON `assign_teachers`
        FOR EACH ROW
        BEGIN
            UPDATE `offered_course` SET `isAssigned` = 0 WHERE `OfferedCourseId` = OLD.OfferedCourseId;
            
            UPDATE `add_teachers` 
            SET `Loads_remaining` = Loads_remaining + OLD.loads
            WHERE `Initials` = OLD.Initials;
        
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

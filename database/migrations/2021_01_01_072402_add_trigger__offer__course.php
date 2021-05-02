<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTriggerOfferCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER add_trigger_Offer_Course 
                        AFTER INSERT ON `added_courses`
                        FOR EACH ROW
                        BEGIN
                        INSERT INTO `offered_course`(`OfferedCourseId`) VALUES (NEW.id);
                        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `add_trigger_Offer_Course`');
    }
}

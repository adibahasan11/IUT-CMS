<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\AddedCourses;
use App\Models\AddTeachers;
use PDF;

class AddCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = DB::select('select * from added_courses');
        return view('Phase1.Reports.CourseList',['courses'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function downloadPdf()
    {
        $courses = AddedCourses::all();
        $pdf = PDF::loadView('Phase1.Reports.CoursePDF',compact('courses'));
        return $pdf->stream('CourseList.pdf');
    }

    public function create()
    {
        $courses = DB::select('select * from added_courses');
        return view('Phase1.Courses.AddCourses',['courses'=>$courses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $CourseCode = $request->input('CourseCode');
        $CourseTitle = $request->input('CourseTitle');
        $Dept = $request->input('Dept');
        $Sem = $request->input('Sem');
        $CourseType = $request->input('CourseType');
        $Comp_Mand = $request->input('Comp_Mand');
        $Credit = $request->input('Credit');
        $ContactHour = $request->input('ContactHour');
        $E_ContactHour = $request->input('E_ContactHour');

        DB::insert('insert into added_courses (CourseCode, CourseTitle, Dept, Sem, CourseType, Comp_Mand, Credit, ContactHour, E_ContactHour) values(?, ?, ?, ?, ?, ?, ?, ?, ?)',[$CourseCode, $CourseTitle, $Dept, $Sem, $CourseType, $Comp_Mand, $Credit, $ContactHour, $E_ContactHour]);

        return  redirect('/addcourse') -> with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $OldCredit)
    {
        $courses = DB::select('SELECT * FROM added_courses WHERE id = ?',[$id]);
        return view('Phase1.Courses.UpdateCourse',['courses'=>$courses]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id, $OldCredit)
    {
        $CourseCode = $request->input('CourseCode');
        $CourseTitle = $request->input('CourseTitle');
        $Dept = $request->input('Dept');
        $Sem = $request->input('Sem');
        $CourseType = $request->input('CourseType');
        $Comp_Mand = $request->input('Comp_Mand');
        $Credit = $request->input('Credit');
        $ContactHour = $request->input('ContactHour');
        $E_ContactHour = $request->input('E_ContactHour');

        DB::update('UPDATE added_courses 
            SET CourseCode = ?, CourseTitle=?, Dept=?, Sem=?, CourseType=?, Comp_Mand=?, Credit=?, ContactHour=?, E_ContactHour=? 
            WHERE id = ?',[$CourseCode, $CourseTitle, $Dept, $Sem, $CourseType, $Comp_Mand, $Credit, $ContactHour, $E_ContactHour, $id]);
        if($Credit != $OldCredit){
            return redirect('OfferingCourse/'.$id)->with('message' ,'Credit updated successfully.');
        }
        else {
            return redirect('/addcourse')->with('message' ,'Record updated successfully.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function report()
    {
        $courses = AddedCourses::count();
        $ActiveTeachers = AddTeachers::where([ ['IsActive', '=', 'Yes'] ])->count();
        return view('PhaseViews.PhaseOneView')->with(array('courses'=>$courses, 'ActiveTeachers'=>$ActiveTeachers));
    }
}

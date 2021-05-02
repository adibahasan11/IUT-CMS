@extends('layouts.admin')

@section('content')
<!--<div class="sidebar bar-block border-right" style="display:none" id="mySidebar1">
  <div class = "phase1-header">
    <button onclick="button3_close()" class="bar-item large phase1">Close</button>
    <h2 class="heading bar-item"> Reports </h2>
  </div>
  <br>
    <a href="CourseList" class="bar-item reports_button">Course List</a>
    <a href="TeacherList" class="bar-item reports_button">Teacher's List</a>
</div>

<div class="sidebar bar-block border-right" style="display:none" id="mySidebar2">
  <div class = "phase2-header">
    <button onclick="button5_close()" class="bar-item large phase2">Close</button>
    <h2 class="heading bar-item"> Reports </h2>
  </div>
  <br>
    <a href="OfferedCourseList" class="bar-item reports_button">Offered Courses</a>
    <a href="SummaryCourseLoad" class="bar-item reports_button">Summary of Course Loads</a>
    <a href="facultyRequirement" class="bar-item reports_button">Faculty Requirements Calculation</a>
</div>

<div class="sidebar bar-block border-right" style="display:none" id="mySidebar3">
  <div class = "phase3-header">
    <button onclick="button7_close()" class="bar-item large phase3">Close</button>
    <h2 class="heading bar-item"> Reports </h2>
  </div>
  <br>
    <a href="#" class="bar-item reports_button">Semester-Wise Course Load</a>
    <a href="TeacherWiseReport" class="bar-item reports_button">Teacher-Wise Course Load</a>
</div>

<div class= "main-part">
  <div class="p1-row">
    <span class="column Phase1">
      <div><button class="buttons1 button1" onclick="window.location.href='/addcourse';">Add Course</button></div>
      <div><button class="buttons1 button2" onclick="window.location.href='/addteacher';">Add Teacher</button></div>
      <div><button class="buttons1 button3" onclick = "button3_open()">Report for Lists</button></div>
    </span>

    <span class="column Phase2">
      <div><button class="buttons2 button4" onclick="window.location.href='/offeredcourses';">Offer Course</button></div>
      <div><button class="buttons2 button5" onclick = "button5_open()">Load Calculations</button></div>
    </span>

    <span class="column Phase3">
      <div><button class="buttons3 button6" onclick="window.location.href='/ViewAssignTeacher';">Assign Teacher</button></div>
      <div><button class="buttons3 button7" onclick = "window.location.href='/TeacherWiseReport';">Teacher Wise Load</button></div>
      <div><button class="buttons3 button7" onclick = "window.location.href='/SemesterWiseReport';">Semester Wise Load</button></div>
    </span>
  </div>
</div>-->

<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Phases</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Phases</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row" style="width: content-box; margin:0 auto; height: 100px; padding-top:10px; padding-left: 250px; padding-right: 0px;"
                centered content>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h2>Phase 1</h2>

                            <p  style="padding-left: 35px;">Add Courses and Teachers</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-notifications"></i>
                        </div>
                        <a href="/phaseOneView" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h2>Phase 2</h2>

                            <p style="padding-left: 15px;">Offer Courses and Calculate load</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-notifications"></i>
                        </div>
                        <a href="/phaseTwoView" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h2>Phase 3</h2>

                            <p style="padding-left: 15px;">Assign Teachers to offered Courses</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-notifications"></i>
                        </div>
                        <a href="/phaseThreeView" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
            </div>
        </div><!-- /.container-fluid -->
    </section>

@endsection

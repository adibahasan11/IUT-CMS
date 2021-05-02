@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Phase Three</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Phases/Phase 3</li>
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
            <div class="row" style="width: content-box; margin:0 auto; height: 100px ;padding-top:10px; padding-left: 200px; padding-right: 00px"
                 centered content>
                <div class="col-lg-3 col-6" style="margin-left: 0px">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h2 style="padding-right: 190px;" >Courses Assigned</h2>

                            <p style="padding-left: 55px;">No of Courses assigned</p>
                        </div>
                        <div class="icon">
                            <i class="ion" style="color: white; padding-right: 30px;">{{ $AssignedCourses }}</i>
                        </div>
                        <a href="AssignTeacher" class="small-box-footer">Assign  <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6" style="margin-left: 0px">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h2 style="padding-right: 90px;" >Courses Not Assigned</h2>

                            <p style="padding-left: 45px;">No of Courses not assigned</p>
                        </div>
                        <div class="icon">
                            <i class="ion" style="color: white; padding-right: 20px;">{{ $notAssignedCourses }}</i>
                        </div>
                        <a href="AssignTeacher" class="small-box-footer">Assign  <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6" style="margin-left: 0px">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h2 style="padding-right: 190px;" >Available Teachers</h2>

                            <p style="padding-left: 10px;">No of Teachers with loads remaining</p>
                        </div>
                        <div class="icon">
                            <i class="ion" style="color: white; padding-right: 30px;">{{ $teachers }}</i>
                        </div>
                        <a href="TeacherList" class="small-box-footer">See List <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
                
            </div>
                <!-- ./col -->
                <!-- ./col -->
                <!-- ./col -->
            </div>

            <div class="row" style="width: content-box; margin:0 auto; height: 100px ;padding-top: 160px; padding-left: 220px; padding-right: 00px;"
                 centered content>
                <div class="col-lg-4 col-6" style="margin-left: 50px">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h2>Assign Teacher</h2>

                            <p>Assign Teacher to Offered Courses based on availability</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-notifications"></i>
                        </div>
                        <a href="AssignTeacher" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
                <div class="col-lg-4 col-6" style="margin-left: 0px">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h2>Course Load</h2>

                            <p style="padding-left: 30px;">Show Reports of Calculated Individual Loads </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-notifications"></i>
                        </div>
                        <a href="/phaseThreeReports" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Phase One</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Phases/Phase 1</li>
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
            <div class="row" style="width: content-box; margin:0 auto; height: 100px ;padding-top: 00px; padding-left: 300px; padding-right: 0px;"
                 centered content>
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h2 style="padding-left: 0px; padding-right: 70px; padding-bottom: 0px;">Total courses</h2>
                            <p style="padding-left: 75px;">(Added to Syllabus)</p>
                        </div>
                        <div class="icon">
                            <i class="ion" style="color: white; padding-right: 20px;">{{ $courses }}</i>
                        </div>
                        <a href="CourseList" class="small-box-footer">Course List <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h2 style="padding-left: 0px; padding-right: 90px; padding-bottom: 0px;">Total Teachers</h2>
                            <p style="padding-left: 108px;">(Active)</p>
                        </div>
                        <div class="icon">
                            <i class="ion" style="color: white; padding-right: 20px;">{{ $ActiveTeachers }}</i>
                        </div>
                        <a href="TeacherList" class="small-box-footer">Teacher List <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
                <!-- ./col -->
            </div>

            <div class="row" style="width: content-box; margin:0 auto; height: 100px ;padding-top: 150px; padding-left: 100px; padding-right: 100px"
                 centered content>
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h2>Add courses</h2>

                            <p style="padding-left: 102px;">Add courses to database</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-notifications"></i>
                        </div>
                        <a href="addcourse" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h2>Add Teachers</h2>

                            <p style="padding-left: 102px;">Add available Teachers</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-notifications"></i>
                        </div>
                        <a href="addteacher" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h2>Lists</h2>

                            <p style="padding-left: 75px;">Get Lists for teachers and courses</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-notifications"></i>
                        </div>
                        <a href="/phaseOneReports" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

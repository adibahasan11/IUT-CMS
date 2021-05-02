@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Phase Two</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Phase Reports/Phase 2</li>
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
            <div class="row" style="width: content-box; margin:0 auto; height: 100px ;padding-top:50px; padding-left: 250px; padding-right: 0px;"
                 centered content>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h2>List of offered courses</h2>

                            <p style="padding-left: 25px;">View Report of offered courses</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-notifications"></i>
                        </div>
                        <a href="OfferedCourseList" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h2>Course Load Summary</h2>

                            <p style="padding-left: 20px;">View Summary of the course Load</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-notifications"></i>
                        </div>
                        <a href="SummaryCourseLoad" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h2>Faculty Requirements</h2>

                            <p style="padding-left: 25px;">Calculate faculty requirements</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-notifications"></i>
                        </div>
                        <a href="facultyRequirement" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

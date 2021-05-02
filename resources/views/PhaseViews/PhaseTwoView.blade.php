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
                        <li class="breadcrumb-item active">Phases/Phase 2</li>
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
            <div class="row" style="width: content-box; margin:0 auto; height: 100px ;padding-top:10px; padding-left: 300px; padding-right: 100px"
                 centered content>
                <div class="col-lg-8 col-6" style="margin-left: 50px">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h2 style="padding-right: 190px;" >Offered/ Not Offered Courses</h2>

                            <p style="padding-left: 130px;">Total courses offered and not offered</p>
                        </div>
                        <div class="icon">
                            <i class="ion" style="color: white; padding-right: 50px;">{{ $offeredcourses }}/{{ $notOfferedcourses }}</i>
                        </div>
                        <a href="OfferedCourseList" class="small-box-footer">List of Offered Courses <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
                
            </div>

            <div class="row" style="width: content-box; margin:0 auto; height: 100px ;padding-top:100px; padding-left: 300px; padding-right: 100px"
                 centered content>
                <div class="col-lg-4 col-6" style="margin-left: 50px">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h2>Offer Courses</h2>

                            <p style="padding-left: 40px;">Offer Courses and calculate Loads</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-notifications"></i>
                        </div>
                        <a href="/offeredcourses" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
                <div class="col-lg-4 col-6" style="margin-left: 0px">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h2>Load Calculations</h2>

                            <p style="padding-left: 45px;">Get Calculation Reports of Loads</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-notifications"></i>
                        </div>
                        <a href="/phaseTwoReports" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

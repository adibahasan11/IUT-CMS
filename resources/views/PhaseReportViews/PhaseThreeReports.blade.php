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
                        <li class="breadcrumb-item active">Phase Reports/Phase 3</li>
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
            <div class="row" style="width: content-box; margin:0 auto; height: 100px ;padding-top:50px; padding-left: 250px; padding-right: 00px"
                 centered content>
                <div class="col-lg-4 col-6" style="margin-left: 50px">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h2>Semester Wise Course Load</h2>

                            <p style="padding-left: 65px;">Course load based on semester</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-notifications"></i>
                        </div>
                        <a href="SemesterWiseReport" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
                <div class="col-lg-4 col-6" style="margin-left: 00px">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h2>Teacher Wise Course Load</h2>

                            <p style="padding-left: 65px;">Assign Load based on teachers</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-notifications"></i>
                        </div>
                        <a href="TeacherWiseReport" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@extends('Layouts.admin')

@section('content')

<h4 class = "summer"><b>Summer Semester</b></h4>
<h4 class = "summer"><b>Semester-Wise Load Distribution</b></h4>
<div class="table-holder"><div  align="right">
        <a href="{{url('/SemesterWiseReportPDF')}}" class="btn btn-outline-danger btn-sm">Print</a>
</div></div><br>
@for($i = 2; $i<=8; $i+=2)
<div class="table-holder-3">
<h4 class = "heading_text">Semester {{$i}}</h4><br>
<table class="table table-hover table-bordered">
  <thead class="thead-dark-2">
    <tr>
      <th scope="col"><b>Course Code</b></th>
      <th scope="col"><b>Course Title</b></th>
      <th scope="col"><b>Credit</b></th>
      <th scope="col"><b>Course Type</b></th>
      <th scope="col"><b>Compulsory/ Optional</b></th>
      <th scope="col">Contact Hour</th>
      <th scope="col">Effective Contact Hour</th>
      <th scope="col"><b>Offering Department</b></th>
      <th scope="col">Number of Sections</th>
      <th scope="col">Number of Teachers</th>
      <th scope="col">Assigned Teacher(s)</th>
      <th scope="col">Assigned Load</th>
      <th scope="col">Load (Other Department)</th>
      <th scope="col">Load (Part-time)</th>
      <th scope="col">Load (Full-time)</th>
    </tr></thead>
    <tbody>
    @foreach ($courses as $course)
    @php ($total = 0)
    @if($course->Sem == $i)
    <tr>
      <th scope="col">{{$course->CourseCode}}</th>
      <th scope="col">{{$course->CourseTitle}}</th>
      <th scope="col">{{$course->Credit}}</th>
      <th scope="col">{{$course->CourseType}}</th>
      <th scope="col">{{$course->Comp_Mand}}</th>
      <th scope="col">{{$course->ContactHour}}</th>
      <th scope="col">{{$course->E_ContactHour}}</th>
      <th scope="col">{{$course->Dept}}</th>
      <th scope="col">{{$course->No_of_Sec}}</th>
      <th scope="col">{{$course->No_of_Teachers}}</th>
      <th>@foreach($teachers as $teacher)
            @if ($teacher->OfferedCourseId == $course->id)
                <div>{{$teacher->Initials}}</div>
            @endif
        @endforeach</th>
      <th>@foreach($teachers as $teacher)
            @if ($teacher->OfferedCourseId == $course->id) 
                    <div>{{$teacher->Loads}}</div>
                    @php($total = $total + $teacher->Loads)
            @endif
        @endforeach</th>
        
        @if($course->Dept == "CSE(Part-time)")
        <th></th>
        <th>{{$total}}</th>
        <th></th>
        @elseif($course->Dept == "CSE")
        <th></th>
        <th></th>
        <th>{{$total}}</th>
        @else
        <th>{{$total}}</th>
        <th></th>
        <th></th>
        @endif
    </tr>
    @endif
    @endforeach
  </tbody>
</table>
</div>
@endfor
@endsection
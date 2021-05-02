@extends('Layouts.admin')

@section('content')

<h4 class = "summer"><b>Summer Semester</b></h4>
<h4 class = "summer"><b>Teacher-Wise Load Distribution</b></h4>
<div class="table-holder"><div  align="right">
        <a href="{{url('/TeacherWiseReportPDF')}}" class="btn btn-outline-danger btn-sm">Print</a>
</div></div><br>
@foreach($teachers as $teacher)
@if ($teacher->Initials != " ")
@php ($theory = 0)
@php ($lab = 0)
<div class="table-holder">
<table class="table table-hover table-bordered-2">
  <thead class="thead-dark-2">
    <tr>
      <td colspan = 2><b>{{$teacher->Name}}</b></td>
      <td colspan = 2><b>Remaining Load = {{$teacher->Loads_remaining}}</b></td>
    </tr>
    <tr>
      <th scope="col">{{$teacher->Designations}}</th>
      <th scope="col"></th>
      <th scope="col">Theory</th>
      <th scope="col">Lab</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($courses as $course)
<tr>
    @if($course->Initials == $teacher->Initials)
    <td>{{ $course->CourseCode }}</td>
    <td>{{ $course->CourseTitle }}</td>

        @if($course->CourseType === 'Theory')
            <td>{{$course->Loads}}</td>
            <td></td>
            @php($theory = $theory + $course->Loads)
        @elseif($course->CourseType === 'Lab')
            <td></td>
            <td>{{$course->Loads}}</td>
            @php($lab = $lab + $course->Loads)
        @endif
    @endif
</tr>
    @endforeach
    <tr>
    <td><b>Total</b></td>
    <td></td>
    <td><b>{{ $theory }}</b></td>
    <td><b>{{ $lab }}</b></td>
    </tr>
  </tbody>
</table>
</div>
@endif
@endforeach
@endsection
@extends('Layouts.admin')

@section('content')

@php ($a_teacher = 0)
@php ($i = 0)
@php ($id = 0)

@if (\Session:: has('success'))
<div class="alert alert-success">
  <p>{{\Session::get('success')}}</p>
</div> 
@endif

@if(Session::has('message'))
  <div class="alert alert-success" id="res_message">
  <p>{{ \Session::get('message') }}</p>
  </div>
@endif
<h4 class = "summer"><b>Summer Semester</b></h4>
<div class="table-holder-2">
<form action = "AssignTeacher" method = "post">
	@csrf
  <h5 class = "summer"><b>Courses assigned with Teachers</b></h5>
  <table class="table table-hover">
  <thead class="thead-dark-2">
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Course Code</th>
      <th scope="col">Course Title</th>
      <th scope="col">Department</th>
      <th scope="col">Semester</th>
      <th scope="col">Course Type</th>
      <th scope="col">Credit</th>
      <th scope="col">Effective Contact Hour</th>
      <th scope="col">No Of Teachers</th>
      <th scope="col">Total Load</th>
      <th scope="col">Assign Teacher</th>
      <th scope="col">Assigned Load</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>  
  @foreach ($offeredcourses_assigned as $offeredcourse_assigned)
  <tr>
  <td>{{ $offeredcourse_assigned->OfferedCourseId }}</td>
  <td>{{ $offeredcourse_assigned->CourseTitle }}</td>
  <td>{{ $offeredcourse_assigned->CourseCode }}</td>
  <td>{{ $offeredcourse_assigned->Dept }}</td>
  <td>{{ $offeredcourse_assigned->Sem }}</td>
  <td>{{ $offeredcourse_assigned->CourseType }}</td>
  <td>{{ $offeredcourse_assigned->Credit }}</td>
  <td>{{ $offeredcourse_assigned->E_ContactHour }}</td>
  <td>{{ $offeredcourse_assigned->No_of_Teachers }}</td>
  <td>{{ $offeredcourse_assigned->Loads }}</td>
  <td>@foreach ($assignedteachers as $assignedteacher)
        @if ( $assignedteacher->OfferedCourseId == $offeredcourse_assigned->OfferedCourseId )
          <div>{{$assignedteacher->Initials}}</div>
        @endif
      @endforeach
  </td>
  <td>@foreach ($assignedteachers as $assignedteacher)
        @if ( $assignedteacher->OfferedCourseId == $offeredcourse_assigned->OfferedCourseId )
          <div>{{$assignedteacher->Loads}}</div>
        @endif
      @endforeach
  </td>
  <td><div class="form-group">
        <a class="btn btn-primary btn-edit" id="edit" href ='editAssignTeacher/{{ $offeredcourse_assigned->OfferedCourseId }}'> Edit </a></div><div>
        <a class="btn btn-primary btn-edit" id="edit" href ='deleteAssignTeacher/{{ $offeredcourse_assigned->OfferedCourseId }}'> Unassign </a>
  </div></td>
  @endforeach
  </tbody>
</table>

<h5 class = "summer"><b>Courses not assigned Teachers</b></h5>
<table class="table table-hover">
  <thead class="thead-dark-2">
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Course Code</th>
      <th scope="col">Course Title</th>
      <th scope="col">Department</th>
      <th scope="col">Semester</th>
      <th scope="col">Course Type</th>
      <th scope="col">Credit</th>
      <th scope="col">Effective Contact Hour</th>
      <th scope="col">No Of Teachers</th>
      <th scope="col">Total Load</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($offeredcourses as $offeredcourse)
<tr>
  <td>{{ $offeredcourse->OfferedCourseId }}</td>
  <td>{{ $offeredcourse->CourseTitle }}</td>
  <td>{{ $offeredcourse->CourseCode }}</td>
  <td>{{ $offeredcourse->Dept }}</td>
  <td>{{ $offeredcourse->Sem }}</td>
  <td>{{ $offeredcourse->CourseType }}</td>
  <td>{{ $offeredcourse->Credit }}</td>
  <td>{{ $offeredcourse->E_ContactHour }}</td>
  <td>{{ $offeredcourse->No_of_Teachers }}</td>
  <td>{{ $offeredcourse->Loads }}</td>
  @php($a_teacher = $offeredcourse->No_of_Teachers)
  <!--<td>
  @for ($i = 1; $i <= $a_teacher; ++$i)
    <div class="form-group">
            <select class="form-control" id="sel1" name="Initials[]" required>
              <!--<option> </option>->
            @foreach($teachers as $teacher)
            <option>{{$teacher->Initials}}</option>
            @endforeach
            </select>
    </div> 
  @endfor
  </td>
  <td>
  @for ($i = 1; $i <= $a_teacher; ++$i)
  <div class="form-group"><input type="text" class="form-control" id="inputDefault" name="Loads[]" value="{{ceil($offeredcourse->Loads/$a_teacher)}}" required></div>
  @endfor
  </td>-->
  <td><div>
  <a class="btn btn-primary btn-edit" id="edit" href ='InsertAssignedTeacher/{{ $offeredcourse->OfferedCourseId }}'> Assign </a></div></td>
  <!--<button class="btn btn-primary btn-edit" onclick = "edit()" id="edit"> Assign </button></td>-->
</tr>
 @endforeach

</tbody>
</table>
</form>
</div>

@endsection
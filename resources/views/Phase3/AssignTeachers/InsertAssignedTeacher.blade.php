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
<form action = "AssignTeacher" method = "post">
@csrf
<h5 class = "summer"><b>Courses not assigned Teachers</b></h5>
<div class="table-holder-2">
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
      <th scope="col">Total Load</th>
      <th scope="col">Assign Teacher</th>
      <th scope="col">Assigned Load</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($offeredcourses as $offeredcourse)
<tr>
  <td><div class="form-group"><input type="text" class="form-control" id="inputDefault" name="OfferedCourseId" value="{{ $offeredcourse->OfferedCourseId }}" required></div></td>
  <td>{{ $offeredcourse->CourseTitle }}</td>
  <td><div class="form-group"><input type="text" class="form-control" id="inputDefault" name="CourseCode" value="{{ $offeredcourse->CourseCode }}" required></div></td>
  <td>{{ $offeredcourse->Dept }}</td>
  <td>{{ $offeredcourse->Sem }}</td>
  <td>{{ $offeredcourse->CourseType }}</td>
  <td>{{ $offeredcourse->Credit }}</td>
  <td>{{ $offeredcourse->E_ContactHour }}</td>
  <td>{{ $offeredcourse->Loads }}</td>
  @php($a_teacher = $offeredcourse->No_of_Teachers)
  <td>
  @for ($i = 1; $i <= $a_teacher; ++$i)
    <div class="form-group">
            <select class="form-control" id="sel1" name="Initials[]" required>
              <!--<option> </option>-->
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
  </td>
  <td><button class="btn btn-primary btn-edit" onclick = "edit()" id="edit"> Assign </button></td>
</tr>
 @endforeach

</tbody>
</table>
</div>
</form>

@endsection
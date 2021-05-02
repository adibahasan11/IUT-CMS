@extends('Layouts.admin')

@section('content')

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
<form action = "/offeredcourses" method = "post">
  @csrf
  <div class="table-holder-2">
<table class="table table-hover">
  <thead class="thead-dark">
    <tr><td></td>
      <th scope="col">Course Code</th>
      <th scope="col">Course Title</th>
      <th scope="col">Department</th>
      <th scope="col">Semester</th>
      <th scope="col">Course Type</th>
      <th scope="col">Compulsory/ Optional</th>
      <th scope="col">Credit</th>
      <th scope="col">Contact Hour</th>
      <th scope="col">Effective Contact Hour</th>
      <th scope="col">Number of Sections</th>
      <th scope="col">Number of Teachers</th>
      <th scope="col">Load</th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
  <th>Offered Courses</th></tr>
  @foreach ($offeredcourses as $offeredcourse)
<tr><td></td>
  <td>{{ $offeredcourse->CourseCode }}</td>
  <td>{{ $offeredcourse->CourseTitle }}</td>
  <td>{{ $offeredcourse->Dept }}</td>
  <td>{{ $offeredcourse->Sem }}</td>
  <td>{{ $offeredcourse->CourseType }}</td>
  <td>{{ $offeredcourse->Comp_Mand }}</td>
  <td>{{ $offeredcourse->Credit }}</td>
  <td>{{ $offeredcourse->ContactHour }}</td>
  <td>{{ $offeredcourse->E_ContactHour }}</td>
  <td>{{ $offeredcourse->No_of_Sec }}</td>
  <td>{{ $offeredcourse->No_of_Teachers }}</td>
  <td>{{ $offeredcourse->Loads }}</td>
  <td><div class="form-group"><a class="btn btn-primary btn-edit" id="edit" href ='OfferingCourse/{{ $offeredcourse->id }}'> Edit </a></div></td>
</tr>
 @endforeach
</tbody>
</table>
</div>
<div class = "table-holder-2">
<table class="table table-hover">
<thead class="thead-dark">
    <tr><td></td>
      <th scope="col">Course Code</th>
      <th scope="col">Course Title</th>
      <th scope="col">Department</th>
      <th scope="col">Semester</th>
      <th scope="col">Course Type</th>
      <th scope="col">Compulsory/Optional</th>
      <th scope="col">Credit</th>
      <th scope="col">Contact Hour</th>
      <th scope="col">Effective Contact Hour</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
<th>Courses to be Offered</th>
  @foreach ($courses as $course)
<tr><td></td>
  <td>{{ $course->CourseCode }}</td>
  <td>{{ $course->CourseTitle }}</td>
  <td>{{ $course->Dept }}</td>
  <td>{{ $course->Sem }}</td>
  <td>{{ $course->CourseType }}</td>
  <td>{{ $course->Comp_Mand }}</td>
  <td>{{ $course->Credit }}</td>
  <td>{{ $course->ContactHour }}</td>
  <td>{{ $course->E_ContactHour }}</td>
  
  <!--<td><div class="form-group c-box"><input type="checkbox" class= "teacher-checkbox" id="IsActive" name="IsOffered" value="Offered"></div></td>
  <td><div class="form-group"><input type="text" class="form-control" id="inputDefault" name="No_of_Sec" required></div></td>
  <td><div class="form-group"><input type="text" class="form-control" id="inputDefault" name="No_of_Teachers" required></div></td>
  <td><div class="form-group"><input type="text" class="form-control" id="inputDefault" name="Load" value= {{ $course->ContactHour }} required></div></td>-->
  
  <td><div class="form-group"><a class="btn btn-primary btn-edit" id="edit" href ='OfferingCourse/{{ $course->id }}'> Offer </a></div></td>
</tr>
 @endforeach
    </form>

  </tbody>
</table>
</div>
</form>

@endsection
@extends('Layouts.admin')

@section('content')
<div class = "table-holder"><br>
<div  align="right">
        <a href="{{url('/CourseListpdf')}}" class="btn btn-outline-danger btn-sm">Print</a>
</div>
<br>
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Course Code</th>
      <th scope="col">Course Title</th>
      <th scope="col">Department</th>
      <th scope="col">Semester</th>
      <th scope="col">Course Type</th>
      <th scope="col">Compulsory/Optional</th>
      <th scope="col">Credit</th>
      <th scope="col">Contact Hour</th>
      <th scope="col">Effective Contact Hour</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($courses as $course)
<tr>
  <td>{{ $course->id }}</td>
  <td>{{ $course->CourseCode }}</td>
  <td>{{ $course->CourseTitle }}</td>
  <td>{{ $course->Dept }}</td>
  <td>{{ $course->Sem }}</td>
  <td>{{ $course->CourseType }}</td>
  <td>{{ $course->Comp_Mand }}</td>
  <td>{{ $course->Credit }}</td>
  <td>{{ $course->ContactHour }}</td>
  <td>{{ $course->E_ContactHour }}</td>
</tr>
 @endforeach
 </tbody>
</table>
</div>
@endsection
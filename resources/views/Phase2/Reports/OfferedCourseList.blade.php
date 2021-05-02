@extends('Layouts.admin')

@section('content')
<div class = "table-holder"><br>
<div  align="right">
        <a href="{{url('/offeredpdf')}}" class="btn btn-outline-danger btn-sm">Print</a>
</div><br>
<table class="table table-hover table-bordered">
  <thead class="thead-dark">
    <tr>
    <th scope="col">Course Code</th>
      <th scope="col">Course Title</th>
      <th scope="col">Semester</th>
      <th scope="col">Offer Course?</th>
      <th scope="col">Credit</th>
      <th scope="col">Number of Sections</th>
      <th scope="col">Number of Teachers</th>
      <th scope="col">Loads</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($courses as $course)
<tr>
  <td>{{ $course->CourseCode }}</td>
  <td>{{ $course->CourseTitle }}</td>
  <td>{{ $course->Sem }}</td>
  <td>{{ $course->IsOffered }}</td>
  <td>{{ $course->Credit }}</td>
  <td>{{ $course->No_of_Sec }}</td>
  <td>{{ $course->No_of_Teachers }}</td>
  <td>{{ $course->Loads }}</td>
</tr>
 @endforeach

 </tbody>
</table>
</div>
@endsection


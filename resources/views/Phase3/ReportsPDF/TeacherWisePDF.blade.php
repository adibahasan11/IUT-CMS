<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><b>Teacher Wise Load Distribution</b></title>
</head>
<style>
    th,
    td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    th,
    td{
        padding: 5px;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.7rem;
    }
    table {
        width:100%;
  border-left: 5px solid  #C5C1C0;
  border-right: 5px solid #C5C1C0;
  border-collapse: collapse;
    }
.table-bordered {
  border: 1px solid black;
}
.table-bordered th,
.table-bordered td {
  border: 1px solid black;
}

.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}
.table-holder{
  padding-left: 50px;
  padding-right: 50px;
  padding-bottom: 50px;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  /*margin-bottom: 0.5rem;*/
  /*font-weight: 500;*/
  /*line-height: 1.2;*/
  text-align: center;
}

h1,
.h1 {
  font-size: 2.25rem;
}

h2,
.h2 {
  font-size: 1.8rem;
}

h3,
.h3 {
  font-size: 1.575rem;
}

h4,
.h4 {
  font-size: 1.35rem;
}

h5,
.h5 {
  font-size: 1.125rem;
}

h6,
.h6 {
  font-size: 0.9rem;
}
img{
    height: 90px;
    width: 60px;
}
p{
  font-family: Arial, Helvetica, sans-serif;
  font-size: 1.125rem;
  text-align: center
}
</style>
<body>
<div style="text-align: center"><img src="assets/img/IUT-logo.jpg" class="img-fluid" alt=""></div>
<p>ISLAMIC UNIVERSITY OF TECHNOLOGY</p>
<p>Dhaka, Bangladesh</p>
<h4 style="font: Arial">Teacher Wise Load Distribution</h4> <br>
@foreach($teachers as $teacher)
@php ($theory = 0)
@php ($lab = 0)
<div class="table-holder">
<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <td colspan = 2><b>{{$teacher->Name}}</b></td>
      <td colspan = 2><b>Remaining Load = {{$teacher->Loads_remaining}}</b></td>
    </tr>
    <tr>
      <th colspan=2 scope="col">{{$teacher->Designations}}</th>
      <th scope="col">Theory</th>
      <th scope="col">Lab</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($courses as $course)
  @if($course->Initials == $teacher->Initials)
<tr>
        <td>{{ $course->CourseCode }}</td>
        <td>{{ $course->CourseTitle }}</td>

        @if($course->CourseType === 'Theory')
            <td>{{$course->Loads}}</td>
            <td>0</td>
            @php($theory = $theory + $course->Loads)

        @elseif($course->CourseType === 'Lab')
            <td>0</td>
            <td>{{$course->Loads}}</td>
            @php($lab = $lab + $course->Loads)
        @endif
    @else
</tr>
@endif
@endforeach
    <tr>
    <td colspan=2><b>Total</b></td>
    <td><b>{{ $theory }}</b></td>
    <td><b>{{ $lab }}</b></td>
    </tr>
  </tbody>
</table>
</div>
@endforeach
</body>
</html>
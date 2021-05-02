<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><b>Semester Wise Load Distribution</b></title>
</head>
<style>
    th,
    td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    th,
    td{
        padding: 2px;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.59rem;
    }
    table {
        width:100%;
        border-left: 1px solid  black;
        border-right: 1px solid black;
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
  /*padding-left: 50px;
  padding-right: 50px;
  padding-bottom: 50px;*/
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
<h4 style="font-family: Arial">Semester Wise Load Distribution</h4> <br>
@for($i = 2; $i<=8; $i+=2)
<div class="table-holder">
<h4 class = "heading_text">Semester {{$i}}</h4>
<table class="table table-hover table-bordered">
  <thead class="thead-dark">
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
</body>
</html>
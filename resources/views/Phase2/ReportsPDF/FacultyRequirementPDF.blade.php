<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><b>Faculty Requirement Calculations</b></title>
</head>
<style>
    th,
    td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    th,
    td{
        padding: 15px;
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
<h4 style="font: Arial">Faculty Requirement Calculations</h4> <br><br>
@php ($i = 0)
@php ($result = 0)

@foreach ($sumOfLoads as $sumOfLoad)
@php($result = $result + $sumOfLoad->Loads)
@endforeach
<div class = "table-holder">
<table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">Designation</th>
      <th scope="col">Offered Load</th>
      <th scope="col">Number of Available Teachers</th>
      <th scope="col">Total Load</th>
    </tr>
    </thead>
<tbody>
    @foreach ($teachers as $teacher)
<tr>
  <td>{{ $teacher->Designations }}</td>
  <td>{{$teacher->Loads}}</td>

  @if($teacher->Designations === 'Professor')
  @php($i = $i + $teacher->Loads*$Professor)
  <td>{{ $Professor }}</td>
  <td>{{$teacher->Loads*$Professor}}</td>
  @endif
  @if($teacher->Designations === 'Associate Professor')
  @php($i = $i + $teacher->Loads*$AscProfessor)
  <td>{{ $AscProfessor }}</td>
  <td>{{$teacher->Loads*$AscProfessor}}</td>
  @endif
  @if($teacher->Designations === 'Assistant Professor')
  @php($i = $i + $teacher->Loads*$AstProfessor)
  <td>{{ $AstProfessor }}</td>
  <td>{{$teacher->Loads*$AstProfessor}}</td>
  @endif
  @if($teacher->Designations === 'Lecturer')
  @php($i = $i + $teacher->Loads*$Lecturer)
  <td>{{ $Lecturer }}</td>
  <td>{{$teacher->Loads*$Lecturer}}</td>
  @endif
</tr>
 @endforeach
 <tr>
    <th>Total Capacity</th>
    <td></td>
    <th>{{$Professor + $AscProfessor + $AstProfessor + $Lecturer}}</th>
    <th>{{$i}}</th>
 </tr>
 <tr>
    <th>Total Load for Internal Teachers</th>
    <td></td>
    <td></td>
    <th>{{ $result }}</th>
 </tr>
 <tr>
    <th>Deficit</th>
    <td></td>
    <td></td>
    <th>{{ $result - $i }}</th>
 </tr> 
    <tr> 
      <th scope="col" colspan = 4 class= "heading"><b>Required Faculties</b></th>
    </tr>
  
 
    <tr>
      <th scope="col">Designation</th>
      <th scope="col">Offered Load</th>
      <th scope="col">Number of Required Teachers</th>
      <th scope="col">Total Load</th>
    </tr>
  <tr>
    <td>Lecturer</td>
    <td>{{ $teachers[3]->Loads }}</td>
    @if ( $result - $i < 0 )  
        <td>0</td>
        <td>0</td>
    @else 
        <td>{{ ceil(($result - $i)/$teachers[3]->Loads) }}</td>
        <td>{{ $teachers[3]->Loads*ceil(($result - $i)/$teachers[3]->Loads) }}</td>
    @endif
 </tr>
 <tr>
    <td>Total Capacity</td>
    <td></td>
    <td></td>
    @if ( $result - $i < 0 )  
        <td>0</td>
    @else 
        <td>{{ $teachers[3]->Loads*ceil(($result - $i)/$teachers[3]->Loads) }}</td>
    @endif
 </tr>
 <tr>
    <td>Deficit After Recruitment</td>
    <td></td>
    <td></td>
    @if ( $result - $i < 0 )  
        <td>0</td>
    @else 
        <td>{{ ($result - $i) - ($teachers[3]->Loads*ceil(($result - $i)/$teachers[3]->Loads)) }}</td>
    @endif
 </tr>
  </tbody>
</table>
</div>
</body>
</html>
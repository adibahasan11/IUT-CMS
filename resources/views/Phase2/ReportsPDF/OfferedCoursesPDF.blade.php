<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><b>Offered Course List</b></title>
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
  padding-left: 0px;
  padding-right: 0px;
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
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2;
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
<h4 style="font: Arial"> Offered Course List</h4> <br><br>
<div class = "table-holder">
<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">Course Code</th>
        <th scope="col">Course Title</th>
        <th scope="col">Semester</th>
        <th scope="col">Offering Department</th>
        <th scope="col">Offer Course</th>
        <th scope="col">Credit</th>
        <th scope="col">Number of Sections</th>
        <th scope="col">Number of Teachers</th>
        <th scope="col">Loads</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($courses as $course)
        <tr>
            <td>
                {{$course->CourseCode}}
            </td>
            <td>
                {{$course->CourseTitle}}
            </td>
            <td>
                {{$course->Sem}}
            </td>
            <td>
                {{$course->Dept}}
            </td>
            <td>
                {{$course->IsOffered}}
            </td>
            <td>
                {{$course->Credit}}
            </td>
            <td>
                {{$course->No_of_Sec}}
            </td>
            <td>
                {{$course->No_of_Teachers}}
            </td>
            <td>
                {{$course->Loads}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
</body>
</html>
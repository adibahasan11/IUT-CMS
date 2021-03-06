@extends('Layouts.admin')

@section('content')

@php ($fulltime2 = 0)
@php ($ptime2 = 0)
@php ($otherDept2 = 0)
@php ($theory2 = 0)
@php ($lab2 = 0)

@php ($fulltime4 = 0)
@php ($ptime4 = 0)
@php ($otherDept4 = 0)
@php ($theory4 = 0)
@php ($lab4 = 0)

@php ($fulltime6 = 0)
@php ($ptime6 = 0)
@php ($otherDept6 = 0)
@php ($theory6 = 0)
@php ($lab6 = 0)

@php ($fulltime8 = 0)
@php ($ptime8 = 0)
@php ($otherDept8 = 0)
@php ($theory8 = 0)
@php ($lab8 = 0)

@foreach ($courses as $course)

    @if ($course->Sem === "2") 
        @if($course->Dept === 'CSE')  @php($fulltime2 = $fulltime2 + $course->Loads)
        @elseif($course->Dept === 'CSE(Part-time)')  @php($ptime2 = $ptime2 + $course->Loads)
        @else {{$otherDept2 = $otherDept2 + $course->Loads}}
        @endif  
    
        @if ($course->CourseType === 'Theory')  @php($theory2 = $theory2 + $course->Loads)
        @elseif ($course->CourseType === 'Lab')  @php($lab2 = $lab2 + $course->Loads) 
        @endif

    @elseif ($course->Sem === "4") 
        @if($course->Dept === 'CSE')  @php($fulltime4 = $fulltime4 + $course->Loads)
        @elseif($course->Dept === 'CSE(Part-time)')  @php($ptime4 = $ptime4 + $course->Loads)
        @else @php($otherDept4 = $otherDept4 + $course->Loads)
        @endif  
    
        @if ($course->CourseType === 'Theory')  @php($theory4 = $theory4 + $course->Loads)
        @elseif ($course->CourseType === 'Lab')  @php($lab4 = $lab4 + $course->Loads)
        @endif

    @elseif ($course->Sem === "6") 
        @if($course->Dept === 'CSE')  @php($fulltime6 = $fulltime6 + $course->Loads)
        @elseif($course->Dept === 'CSE(Part-time)')  ($ptime6 = $ptime6 + $course->Loads)
        @else @php($otherDept6 = $otherDept6 + $course->Loads)
        @endif  
    
        @if ($course->CourseType === 'Theory')  @php($theory6 = $theory6 + $course->Loads)
        @elseif ($course->CourseType === 'Lab')  @php($lab6 = $lab6 + $course->Loads)
        @endif

    @else
        @if($course->Dept === 'CSE')  @php($fulltime8 = $fulltime8 + $course->Loads)
        @elseif($course->Dept === 'CSE(Part-time)')  @php($ptime8 = $ptime8 + $course->Loads)
        @else @php($otherDept8 = $otherDept8 + $course->Loads)
        @endif  
    
        @if ($course->CourseType === 'Theory')  @php($theory8 = $theory8 + $course->Loads)
        @elseif ($course->CourseType === 'Lab')  @php($lab8 = $lab8 + $course->Loads)
        @endif

    @endif

@endforeach

<h4 class = "summer"><b>Summary Of CourseLoad</b></h4>
<h4 class = "summer"><b>Summer Semester</b></h4>
<div class = "table-holder">
<div  align="right">
        <a href="{{url('/SummeryCoursePDF')}}" class="btn btn-outline-danger btn-sm">Print</a>
</div><br>
<table class="table table-hover table-bordered">
  <thead class="thead-dark">
    <tr>
     
      <th scope="col">Department</th>
      <th scope="col">Semester</th>
      <th scope="col">Other Department</th>
      <th scope="col">Part Time</th>
      <th scope="col">Full Time</th>
      <th scope="col">Theory</th>
      <th scope="col">Lab</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
  <tr>
  
    <td>CSE</td>
    <td>2</td>
    <td>{{ $otherDept2 }}</td>
    <td>{{ $ptime2 }}</td>
    <td>{{ $fulltime2 }}</td>
    <td>{{ $theory2 }}</td>
    <td>{{ $lab2 }}</td>
    <td>{{ $ptime2 + $fulltime2 + $otherDept2 }}</td>  
</tr>
<tr>
    <td></td>
    <td>4</td>
    <td>{{ $otherDept4 }}</td>
    <td>{{ $ptime4 }}</td>
    <td>{{ $fulltime4 }}</td>
    <td>{{ $theory4 }}</td>
    <td>{{ $lab4 }}</td>
    <td>{{ $ptime4 + $fulltime4 + $otherDept4 }}</td>  
</tr>
<tr>
    <td></td>
    <td>6</td>
    <td>{{ $otherDept6 }}</td>
    <td>{{ $ptime6 }}</td>
    <td>{{ $fulltime6 }}</td>
    <td>{{ $theory6 }}</td>
    <td>{{ $lab6 }}</td>
    <td>{{ $ptime6 + $fulltime6 + $otherDept6 }}</td>  
</tr>
<tr>
    <td></td>
    <td>8</td>
    <td>{{ $otherDept8 }}</td>
    <td>{{ $ptime8 }}</td>
    <td>{{ $fulltime8 }}</td>
    <td>{{ $theory8 }}</td>
    <td>{{ $lab8 }}</td>
    <td>{{ $ptime8 + $fulltime8 + $otherDept8 }}</td>  
</tr>
<tr>
    <th>Total</th>
    <th></th>
    <th>{{ $otherDept2 + $otherDept4 + $otherDept6 + $otherDept8 }}</th>
    <th>{{ $ptime2 + $ptime4 + $ptime6 + $ptime8 }}</th>
    <th>{{ $fulltime2 + $fulltime4 + $fulltime6 + $fulltime8 }}</th>
    <th>{{ $theory2 + $theory4 + $theory6 + $theory8 }}</th>
    <th>{{ $lab2 + $lab4 + $lab6 + $lab8 }}</th>
    <th>{{ $ptime2 + $fulltime2 + $otherDept2 + $ptime4 + $fulltime4 + $otherDept4 + $ptime6 + $fulltime6 + $otherDept6 + $ptime8 + $fulltime8 + $otherDept8 }}</th>  
</tr>
  </tbody>
</table>
</div>
@endsection
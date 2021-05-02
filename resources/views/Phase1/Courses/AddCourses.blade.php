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
<form action = "/create" method = "post">
	@csrf
  <div class="table-holder-3">
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
      <th scope="col"></th>
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
  <td><div class="form-group">
        <a class="btn btn-primary btn-edit" id="edit" href ='edit/{{ $course->id }}/{{ $course->Credit }}'> Edit </a></div></td>
</tr>
 @endforeach
    <tr id="row1">
      <td>{{$course->id+1}}</td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault" name="CourseCode" required></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault" name="CourseTitle" required></div</td>
      <td><div class="form-group">
        <select class="form-control" id="sel1" name="Dept" required>
        <option>CSE</option>
        <option>CSE(Part-time)</option>
        <option>EEE</option>
        <option>MCE</option>
        <option>CEE</option>
        </select>
    </div></td>
      <td><div class="form-group">
        <select class="form-control" id="sel1" name="Sem" required>
        <option>2</option>
        <option>4</option>        
        <option>6</option>
        <option>8</option>
        </select>
    </div></td>
      <td><div class="form-group1"><select class="form-control" id="sel1" name="CourseType" required>
        <option>Theory</option>
        <option>Lab</option>
        </select></div></td>
      <td><div class="form-group"><select class="form-control" id="sel1" name="Comp_Mand" required>
        <option>C</option>
        <option>O</option>
        </select></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault" name="Credit" required></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault" name="ContactHour" required></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault" name="E_ContactHour" required></div></td>
      <td><div class="form-group">
              <button class="btn btn-primary btn-edit" onclick = "edit()" id="edit"> Submit </button></div></td>
        <!--<button class="btn btn-primary btn-edit" style= "display:none" onclick = "DeleteRow()" id="delete"> Delete </button></div></td>-->
    </tr>
  </tbody>
</table>
</div>
</form>

@endsection

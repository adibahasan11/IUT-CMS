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
<form action = "/createteacher" method = "post">
@csrf
<table class="table table-hover">
  <thead class="thead-dark">
    <tr><th></th><th></th>
      <th scope="col">Full Name</th>
      <th scope="col">Initials</th>
      <th scope="col">Designation</th>
      <th scope="col">Load Remaining</th>
      <th scope="col">Active?</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($teachers as $teacher)
<tr> @if ($teacher->Initials != " ")
<td></td><th></th>
  <td>{{ $teacher->Name }}</td>
  <td>{{ $teacher->Initials }}</td>
  <td>{{ $teacher->Designations }}</td>
  <td>{{ $teacher->Loads_remaining }}</td>
  <td>{{ $teacher->IsActive }}</td>
  <td><div class="form-group">
    <a class="btn btn-primary btn-edit" id="edit" href ='editTeacher/{{ $teacher->Initials }}'> Edit </a></div></td>
    @endif
</tr>
 @endforeach
    <tr id="row1"><th></th><th></th>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault" name="Name" required></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault" name="Initials" required></div</td>
      <td><div class="form-group">
        <select class="form-control" id="sel1" name="Designations" required>
        <option>Professor</option>
        <option>Associate Professor</option>
        <option>Assistant Professor</option>
        <option>Lecturer</option>
        </select></div>
        <td></td>
      <td><div class="form-group c-box"><input type="radio" class= "teacher-checkbox" id="IsActive" name="IsActive" value="Yes" required> Yes </div>
      <div class="form-group c-box"><input type="radio" class= "teacher-checkbox" id="IsActive" name="IsActive" value="No" required> No </div>
      </td>
      <td><div class="form-group">
      <button class="btn btn-primary btn-edit" id="edit"> Submit </button>
      <button class="btn btn-primary btn-edit" style= "display:none" onclick = "DeleteRow()" id="delete"> Delete </button>
      </div></td>
    </tr>
  </tbody>
</table>
</form>

@endsection
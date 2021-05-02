@extends('Layouts.admin')

@section('content')
<div class="container">
        <form action = "/editTeacher/<?php echo $teachers[0]->Initials; ?>" method = "post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <table  class="table table-hover">
                <tr>
                    <td>Name</td>
                    <td>
                    <input type = 'text' class="form-control input-sm" name ='Name' value = '<?php echo$teachers[0]->Name; ?>'/> </td>
                </tr>
                <tr>
                    <td>Initials</td>
                    <td>
                    <input type = 'text'class="form-control input-sm" name = 'Initials' value = '<?php echo$teachers[0]->Initials; ?>'/>
                    </td>
                </tr>
                <tr>
                    <td>Designation</td>
                    <td>
                    <select class="form-control" id="sel1" name = 'Designations' value = '<?php echo$teachers[0]->Designations; ?>'>
                        @if ($teachers[0]->Designations === 'Professor') then
                        <option>Professor</option>
                        <option>Associate Professor</option>
                        <option>Assistant Professor</option>
                        <option>Lecturer</option>
                        @elseif ($teachers[0]->Designations === 'Associate Professor') then
                        <option>Associate Professor</option>
                        <option>Professor</option>
                        <option>Assistant Professor</option>
                        <option>Lecturer</option>
                        @elseif ($teachers[0]->Designations === 'Assistant Professor') then
                        <option>Assistant Professor</option>
                        <option>Professor</option>
                        <option>Associate Professor</option>
                        <option>Lecturer</option>
                        @else
                        <option>Lecturer</option>
                        <option>Professor</option>
                        <option>Associate Professor</option>
                        <option>Assistant Professor</option>
                        @endif
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Is Active?</td>
                    <td>
                    <div><input type="radio" class= "teacher-checkbox" id="IsActive" name="IsActive" value = 'Yes' required/> Yes</div>
                    <div><input type="radio" class= "teacher-checkbox" id="IsActive" name="IsActive" value = 'No' required/> No</div>
                    </td>
                </tr>
                    <br></br>
                    <td></td>
                    <td>
                    <input type = 'submit'class="btn btn-primary btn-edit" value = "Update" />
                    </td>
                </tr>
            </table>
        </form>
    </div>

@endsection
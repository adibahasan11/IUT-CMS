@extends('Layouts.admin')

@section('content')
<div class="container">
    <form action = "/editAssignTeacher/<?php echo $courses[0]->OfferedCourseId; ?>" method = "post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            @php ($loads = $offered_course[0]->Loads)
            <table  class="table table-hover">
                <tr>
                    <td><b>Course Code</b></td>
                    <td>{{$courses[0]->OfferedCourseCode}}</td>
                </tr>
                <tr>
                    <td><b>Total Load</b></td>
                    <td>{{$offered_course[0]->Loads}}</td>
                    <td><b>Assigned Loads</b></td>
                </tr>
                <tr>
                    <td><b>Assigned Teachers</b></td>
                    <td>
                    @foreach($courses as $course)
                    <select class="form-control" id="sel1" name="Initials[]" value = '<?php echo$course->Initials; ?>'>
                    @foreach($teachers as $teacher)
                        @if ($teacher->Initials == $course->Initials)
                            <option value ="{{$teacher->Initials}}" selected = "">{{$teacher->Initials}}</option>
                        @else
                        <option value ="{{$teacher->Initials}}" >{{$teacher->Initials}}</option>
                        @endif
                    @endforeach
                    </select>
                    @endforeach
                    </td>
                    <td>
                    @foreach($courses as $course)
                    <div>
                    <input type = 'text' id = "B_load" class="form-control input-sm" name ='Loads[]' value = '<?php echo$course->Loads; ?>'/></div>
                    @endforeach
                    </td>
                </tr>
                <tr>
                    <br><br>
                    <td></td>
                    <td>
                    <input type = 'submit'class="btn btn-primary btn-edit" value = "Update" />
                    </td>
                </tr>
            </table>
        </form> 
    </div>

@endsection
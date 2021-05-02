@extends('Layouts.admin')

@section('content')

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-custom shadow-sm">
            <div class="container">
                <a class="navbar-brand">IUTcms</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <!--<li class="nav-item">
                            <a class="nav-link" onclick="AddMore_open()">Add More</a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="/offeredcourses">Back</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

<div class="container">
        <form action = "/OfferingCourse/<?php echo $courses[0]->id; ?>" method = "post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            @php ($fulltime2 = $courses[0]->Credit)
            <table  class="table table-hover">
            <tbody>
                <tr>
                    <td>Course Code</td>
                    <td>{{ $courses[0]->CourseCode }}</td>
                </tr>
                <tr>
                    <td>Course Title</td>
                    <td>{{$courses[0]->CourseTitle}}</td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>{{$courses[0]->Sem}}</td>
                </tr>
                <tr>
                    <td>Credit</td>
                    <td id="credit">{{$fulltime2}}</td>
                </tr>
                <tr>
                <td>Offer Course?</td>
                <td><div class="form-group c-box"><input type="radio" class= "teacher-checkbox" id="IsActive" name="IsOffered" value='Offered' required> Offer </div>
                <div class="form-group c-box"><input type="radio" class= "teacher-checkbox" id="IsActive" name="IsOffered" value='No' required> Don't Offer </div>
                </td>
                </tr>
                <tr>
                    <td>Number of Sections</td>    
                    <td><div class="form-group No_of_Sec"><input type="text" class="form-control" id="inputDefault" name="No_of_Sec" value='<?php echo$courses[0]->No_of_Sec; ?>' onkeyup="mult(this.value)"></div></td>
                </tr>
                <tr>
                    <td>Number of Teachers</td>    
                    <td><div class="form-group No_of_Teachers"><input type="text" class="form-control" id="inputDefault" name="No_of_Teachers" value='<?php echo$courses[0]->No_of_Teachers; ?>'></div></td>
                </tr>

                <tr>
                    <td>Load</td>    
                    <td><div class="form-group Loads"><input type="text" class="form-control" id="inputDefaultLoad" name="Loads" value='<?php echo$courses[0]->Loads; ?>'></div></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                    <input type = 'submit'class="btn btn-primary btn-edit" value = "Offer" />
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
        <script type="text/javascript">
        function mult(value){
            var load, credit;
            credit = '<?php echo $fulltime2 ;?>';
            load = credit * value;

            document.getElementById('inputDefaultLoad').value = load;
        }
    </script> 
    </div>
    </main>
    </div>
@endsection


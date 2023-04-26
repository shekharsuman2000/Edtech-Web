@extends('layouts.admin-main')
@section('admin')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
    	#main{
    		margin-top: 10%;
    	}
        
    </style>
</head>
<body>

    <main class="container my-4" id="main">
        <section class="dashboard-section" id="main">
            <h2>Dashboard</h2>
            <p>Welcome to your edtech web application's admin dashboard. Here, you can view important information and manage various aspects of your application.</p>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Registered Students</h5>
                            <p class="card-text">There are currently <strong>@if(!is_null($users) && count($users) > 0)
                            {{count($users) +1}}
                            @else
                            0
                            @endif</strong> students enrolled in your edtech web application.</p>
                            <a href="{{ Route('students')}}" class="btn btn-primary">View Students</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Active Course</h5>
                            <p class="card-text">There are currently <strong>@if(!is_null($courses) && count($courses) > 0)
                            {{count($courses)}}
                            @else
                                0 
                            @endif</strong> active courses are running on the website.</p>
                            <a href="{{ Route('displaycourses') }}" class="btn btn-primary">View Courses</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Upload a course</h5>
                            <p class="card-text">Add a new course. <br> <br> </p>
                            <a href="{{Route('upload')}}" class="btn btn-primary">Add Course</a>
                        </div>
                    </div>
               
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="card" style="margin-top: 8%;">
                        <div class="card-body">
                            <h5 class="card-title">View messages</h5>
                            <p class="card-text">Here you can view all the messages and queries came from end users.<br> <br> </p>
                            <a href="{{Route('displaymessages')}}" class="btn btn-primary">View</a>
                        </div>
                    </div>
               
                </div>
            </div>
        </section>

        <!-- <section class="students-section">
            <h2>Students</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>johndoe@gmail.com</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Doe</td>
                        <td>janedoe@gmail.com</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Bob Smith</td>
                        <td>bobsmith@gmail.com</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="teachers-section">
            <h2>Teachers</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Adam Smith</td>
                        <td>adamsmith@gmail.com</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Sara Johnson</td>
                        <td>sarajohnson@gmail.com</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section> -->
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper-base.min.js"
        integrity="sha384-SbVJgOZpAY7Fxr8HYwOzMOvCszGgnoyEtsn/oLc9X02vI5zQnZD5mtFJ5ue5a5ii"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-O
    H0uuOdTpUPFw4KUXcX4wTsfLiJgsbHq3wqgtT3T9i6ksC1Yz2fPLQWjv9yyQGQ6"
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            // Hide all sections except the first one
            $(".section").not(":first").hide();

            // Add active class to the first tab and show the corresponding section
            $(".nav-link:first").addClass("active");
            $(".section:first").show();

            // When a tab is clicked, show the corresponding section and add the active class to the tab
            $(".nav-link").click(function () {
                $(".nav-link").removeClass("active");
                $(this).addClass("active");
                $(".section").hide();
                var selectedTab = $(this).attr("href");
                $(selectedTab).show();
                return false;
            });
        });
    </script>
</body>

</html>


@endsection
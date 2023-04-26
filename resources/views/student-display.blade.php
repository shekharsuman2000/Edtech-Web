@extends('layouts.student-display-main')
@section('section')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        #main{
                margin-top: 100px;
        }
        .button-row {
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
        }
        .flex{
            display: flex;
/*            flex-wrap: wrap;*/
            justify-content: space-between;
        }
        form{
            flex-basis: calc(75% - 10px);
        }
        button{
            flex-basis: calc(30% - 10px);
        }
                
    </style>
</head>
<body>
    <main id="main">
        <section class="students-section">
            <div class="flex">  
                <h2>Students</h2>
                <a href="{{ URL::previous() }}" class=""><button class="btn btn-dark">Back</button></a>
             </div>
            @if (session()->has('status'))
                <div class="text text-success">
                    <small>{{ session()->get('status') }}</small>
                </div>
            @endif
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
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td><a href="{{ route('student.dashboard', $user->id) }}">{{$user->name}}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <div class="flex">
                                <a href="{{ route('admin.edit.student', $user->id) }}" class="btn btn-primary btn-sm button-row">Edit</a> 
                                
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm button-row">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                
                </tbody>
            </table>
        </section>

        <!-- <section class="teachers-section">
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

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
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
    </script> -->
</body>

</html>


@endsection
@extends('layouts.dashboard_main')
@section('dashboard_section')


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <style>
      .card {
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
      }

      .card h5 {
        color: #2d2d2d;
        font-size: 22px;
        text-align: center;
        margin-top: 20px;
      }

      .card p {
        color: #737373;
        font-size: 16px;
        margin-top: 20px;
        margin-bottom: 20px;
      }

      .courses-container {
        background-color: #f3f3f3;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
      }

      .course {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        display: flex;
        align-items: center;
      }

      .course-title {
        font-size: 18px;
        color: #2d2d2d;
        margin-left: 20px;
      }
      #container-main{
        margin-top: 130px;
        margin-bottom: 150px;
      }
    </style>
    <title>Student Dashboard</title>
  </head>
  <body>
    <div id="container-main">
    <div class="container-fluid my-3">
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Student Information</h5>
              <p class="card-text"> 
                <strong>Name:</strong> @if(Auth::check()==true) {{Auth::user()->name}} @endif
                @if(Auth::guard('admin')->check()==true) {{ $user_id->name }} @endif
              </p>
              <p class="card-text">
                <strong>Email:</strong> @if(Auth::check()==true)
                                        {{Auth::user()->email}} 
                                        @endif
                @if(Auth::guard('admin')->check()==true) {{ $user_id->email }} @endif
              </p>
              <p class="card-text">
                <strong>Enrolled Courses: @if(Auth::check()) @if(!is_null($courseDetails) && count($courseDetails) > 0)
                            {{count($courseDetails)}}
                            @else
                            0
                            @endif
                          @endif
                          <!-- @if(Auth::guard('admin')) @if(!is_null($courseDetails) && count($courseDetails) > 0)
                            {{count($courseDetails)}}
                            @else
                            0
                            @endif
                          @endif --></strong> 
              </p>
            </div>
          </div>
                </div>






        <div class="col-md-9">
          <h3 class="text-center my-3">@if(Auth::check()==true) {{Auth::user()->name}} 's Enrolled Courses @endif @if(Auth::guard('admin')->check()) Enrolled Course @endif</h3>

          @if(Auth::check()==true)
           @if(!is_null($courseDetails) && count($courseDetails) > 0) @endif
          
            <div class="courses-container">
              @foreach($courseDetails as $course)
                  <div class="course d-flex">
                    @if($course->file)
                    <a href="{{ Route('coursedetails', $course->courseid) }}">
                       <img src="{{ asset($course->thumbnailpath)}}" alt="{{ $course->title }} Thumbnail" height="100" width="150" />
                    </a>
                    @endif
                    <h2 class="display-4" style="font-size: 40px; color: coral;">{{$course->name}}</h2>
                    <!-- <h5 class="course-title ml-3">{{$course->name}}</h5> -->
                  </div>
              @endforeach
            </div>
           

           @elseif(Auth::guard('admin'))
            @if(!is_null($courseDetails) && count($courseDetails) > 0) @endif
          
            <div class="courses-container">
              @foreach($courseDetails as $course)
                  <div class="course d-flex">
                    @if($course->file)
                    <a href="{{ Route('coursedetails', $course->courseid) }}">
                       <img src="{{ asset($course->thumbnailpath)}}" alt="{{ $course->title }} Thumbnail" height="100" width="150" />
                    </a>
                    @endif
                    <h5 class="course-title ml-3">{{$course->name}}</h5>
                  </div>
              @endforeach
            </div>
           @else 
            <h2 style="text-align:center; color:lightgray; font-size: 20px;">Not Enrolled in any courses</h2>
           @endif


        </div>
      </div>
    </div>
    </div>
  </body>
</html>

       
@endsection
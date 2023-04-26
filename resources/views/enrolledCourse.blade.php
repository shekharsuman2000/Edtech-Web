@extends('layouts.course-main')
@section('main')
<!DOCTYPE html>
<html>
<head>
  <title>List of Courses</title>
  <style>
    /* Global Styles */
    body {
      background-color: rgb(170, 173, 171);
      font-family: Arial, sans-serif;
      font-size: 16px;
      line-height: 1.5;
      color: #333;
    }

    /* Styling for course cards */
    .course-card {
      border: 1px solid #e0e0e0;
      padding: 10px;
      margin-bottom: 20px;
      width: 100%;
      background-color: #fff;
      box-shadow: 1px 2px 5px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }
    .course-card img {
      max-width: 100%;
      height: auto;
      border-radius: 5px;
    }

    /* Styles for container */
    #container {
      max-width: 800px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 1px 2px 5px rgba(0, 0, 0, 0.1);
      margin-bottom: 2%;
    }

    /* Styles for table */
    table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
    }
    th, td {
      text-align: left;
      padding: 8px;
    }
    th {
      background-color: #f1f1f1;
    }

    /* Styles for headings */
    h1, h2, h3 {
      margin: 0;
      padding: 0;
    }
    h1 {
      font-size: 36px;
      font-weight: bold;
      color: #333;
      text-align: center;
      margin-bottom: 20px;
      margin-top: 50px;
    }
    h2 {
      font-size: 24px;
      font-weight: bold;
      color: #333;
      margin-bottom: 10px;
    }
    p, small {
      margin: 0;
      padding: 0;
    }
    p {
      font-size: 16px;
      color: #666;
      margin-bottom: 10px;
    }
    small {
      font-size: 14px;
      color: #999;
      display: block;
      margin-top: 5px;
    }
    section{
     margin-top: 120px;
   }
   .flex{
      display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-left: 30%;
    }

 </style>
 <script>

 </script>
</head>
<body>
  <section>
    <div class="flex">
      <h1>@if(Auth::check()==true) {{Auth::user()->name}} @endif's Enrolled Courses</h1>
      <a href="{{ URL::previous() }}" class=""><button class="btn btn-dark">Back</button></a>
    </div>
    @if(count($courseDetails)>0)
      @foreach ($courseDetails as $course)
  
      <div id="container">
        <table>
          <tr>
            <td>
              @if($course->file)
                <a href="{{ Route('coursedetails', $course->courseid) }}">
                <img src="{{ asset($course->thumbnailpath)}}" alt="{{ $course->title }} Thumbnail" height="100" width="150" /></a>
              @endif
            </td>
            <td>
              <a href="{{ Route('coursedetails', $course->courseid) }}" style="text-decoration:none; color: saddlebrown;"><h2 class="display-4" style="font-size: 40px">{{ $course->name }}</h2></a>

              <small style="width: 500px; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">{{ $course -> description }}&gt;</small>
            </td>
            <!-- <td><h2>$12</h2></td> -->
          </tr>
        </table>
      </div>
  </section>
 @endforeach

 @else 
 <h2 style="text-align:center; color:lightgray; font-size: 20px;">Not Enrolled in any courses</h2>
 @endif
  
</body>
</html>
@endsection
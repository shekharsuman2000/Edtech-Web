@extends('layouts.course_explorer_main')
@section('course_explorer')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Course Explorer</title>
  <style>
    .course-container {
      height: 200px;
      background-position: center;
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center;
      color: grey;
      font-weight: bold;
      text-shadow: 1px 1px;
      width: 250px;
      margin-top: 120px;
      
    }
    #course-name{
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-4" id="course-name">
        <div class="course-container" style="background-image: url('images/courses/web_development.jpg');">
          <br><br><br><br><br><br><br><br><br><br>Web Development
        </div>
      </div>
      <div class="col-sm-4">
        <div class="course-container" style="background-image: url('images/courses/Java.jpg');">
          <br><br><br><br><br><br><br><br><br><br>Java
        </div>
      </div>
      <div class="col-sm-4">
        <div class="course-container" style="background-image: url('images/courses/artificial_inteligence.jpg');">
          <br><br><br><br><br><br><br><br><br><br>Artificial Inteligence
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="course-container" style="background-image: url('images/courses/sql.jpg');">
          <br><br><br><br><br><br><br><br><br><br>Oracle
        </div>
      </div>
      <div class="col-sm-4">
        <div class="course-container" style="background-image: url('images/courses/web_development.jpg');">
          <br><br><br><br><br><br><br><br><br><br>Web Development
        </div>
      </div>
      <div class="col-sm-4">
        <div class="course-container" style="background-image: url('images/courses/web_development.jpg');">
          <br><br><br><br><br><br><br><br><br><br>Web Development
        </div>
      </div>
    </div>
  </div>
</body>
</html>


@endsection
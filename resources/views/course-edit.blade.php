@extends('layouts.course-edit-main')

@section('content')
    <style type="text/css">
        .main-section{
            margin-top: 10%;
        }
        #container{
            border: 1px solid black;
            padding: 2% 5%;
            border-radius: 20px;
            margin-top: 2%;
            margin-right: 20%;
            margin-left: 20%;

            border: white 1px solid;
            box-shadow: 1px 5px 50px 5px grey;
            border-radius: 15px;
        }
        .box{
            background-color: rgb(208, 216, 217);
            padding: 1rem;
            border: 1px solid #dee2e6;
            border-radius: 0.3rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            color: rgb(194, 114, 79);
            line-height: 1.5;
        }
        .flex{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-left: 40%;
        }
    </style>
    <!-- <div class="container">
        <h1>Edit Course</h1>
        <form method="POST" action="{{ route('courses.update', $course->courseid) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Course Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $course->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Course Description</label>
                <textarea class="form-control" id="description" name="description" required>{{ $course->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Course</button>
        </form>
    </div> -->

    <div class="main-section">
        <div class="flex">
            <h1 class="h1 text-center">Edit Course</h1>
            <a href="{{ URL::previous() }}" class=""><button class="btn btn-dark">Back</button></a>
        </div>
        <section id="container">
            <form method="POST" action="{{ route('courses.update', $course->courseid) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

                @if (session()->has('status'))
                    <div class="alert alert-success text text-center text-info">
                        {{ session()->get('status') }}
                    </div>
                @endif
                <p class="box">You can edit only course title and course description of particular course. </p>
                <div class="form-group">
                    <label for="courseName">Course Name <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" id="courseName" name="courseName" value="{{ $course->name }}">
                    <small class="text-danger">
                        @error('courseName')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
                <div class="form-group">
                    <label for="courseDesc">Course Description <small class="text-danger">*</small></label>
                    <textarea class="form-control" id="courseDesc" name="description" rows="3">{{ $course->description }}</textarea>
                    <small class="text-danger">
                        @error('description')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
                <!-- <div class="form-group">
                    <label for="courseThumbnail">Course Thumbnail<small class="text-danger">*</small></label>
                    <input type="file" class="form-control-file" id="courseThumbnail" name="courseThumbnail" accept="image/*" value="{{ $course->thumbnail }}"> 
                    <a href="{{ Route('coursedetails', $course->courseid) }}">
                      <img src="{{ asset($course->thumbnailpath)}}" alt="{{ $course->title }} Thumbnail" height="100" width="150" />
                    </a>   
                </div> -->
                 <!-- <div class="form-group">
                    <label for="courseFile">Course Video<small class="text-danger">*</small></label>
                    <input type="file" class="form-control-file" id="courseFile" name="courseFile" accept=""> 
                    <br>
                    <video width="150" controls>
                        <source src="{{ asset($course->filepath)}}" type="video/mp4">
                    </video>
                </div>  -->
                <button type="submit" class="btn btn-primary">Update Course</button>
            </form>
        </section>
    </div>
@endsection

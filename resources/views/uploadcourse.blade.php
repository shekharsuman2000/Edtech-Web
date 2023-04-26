@extends('layouts.upload_course-main')
@section('upload-section')

<!DOCTYPE html>
<html>
<head>
	<title>Upload File</title>
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
	</style>
</head>
<body>
	<div class="main-section">
		<a href="{{ URL::previous() }}" class="" style="float: right; margin-right: %;"><button class="btn btn-dark">Back</button></a>
		<h1 class="h1 text-center">Upload Course</h1>

		<section id="container">
			

			<form method="post" action="/addcourse" enctype="multipart/form-data">
				@csrf

				@if (session()->has('status'))
				    <div class="alert alert-success text text-center">
				        {{ session()->get('status') }}
				    </div>
				@endif

				<div class="form-group">
					<label for="courseName">Course Name <small class="text-danger">*</small></label>
					<input type="text" class="form-control" value="{{ old('courseName') }}" id="courseName" name="courseName">
				</div>
				<span class="text-danger">
					@error('courseName')
						<div class="text text-danger"> {{$message}}</div>
					@enderror
				</span>
				<div class="form-group">
					<label for="courseDesc">Course Description <small class="text-danger">*</small></label>
					<textarea class="form-control" id="courseDesc" value="{{ old('description') }}" name="description" rows="3"></textarea>
				</div>
						@error('description')
							<div class="text text-danger"> {{$message}}</div>
						@enderror
				<div class="form-group">
					<label for="courseThumbnail">Course Thumbnail<small class="text-danger">*</small></label>
					<input type="file" class="form-control-file" id="courseThumbnail" value="{{ old('courseThumbnail') }}" name="courseThumbnail" accept="image/*">
				</div>
					@error('courseThumbnail')
						<div class="text text-danger"> {{$message}}</div>
					@enderror
				<div class="form-group">
					<label for="courseFile">Course File<small class="text-danger">*</small></label>
					<input type="file" class="form-control-file" id="courseFile" value="{{ old('courseFile') }}" name="courseFile" accept="">
						@error('courseFile')
							<div class="text text-danger"> {{$message}}</div>
						@enderror
				</div>
				<button type="submit" class="btn btn-primary">Upload Course</button>
			</form>
		</section>
	</div>

</body>
</html>

@endsection
@extends('layouts.course-details-main')

@section('content')
    

    <!DOCTYPE html>
	<html>
	<head>
		<title>Course Description Page</title>
		<!-- Bootstrap CSS -->
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<style type="text/css">
			#section{
				margin-top: 120px;
			}
			.flex{
				display: flex;
			    flex-wrap: wrap;
			    justify-content: space-between;
			    align-items: flex-start;
			}
			video{
				border: 1px solid black;
				border-radius: 10px;
				flex-basis: 40%;
    			margin-left: auto;
			}
			.img{
				border: 1px solid black;
				border-radius: 10px;
				flex-basis: 35%;
    			margin-left: auto;
    			position: revert-layer;
			}
			p{
				flex-basis: 55%;
			}
		</style>
	</head>
	<body>
		<section id="section">
			@if (session()->has('status'))
				    <div class="alert alert-success">
				        {{ session()->get('status') }}
				    </div>
			@endif
			<a href="{{ URL::previous() }}" class="" style="float: right; margin-right: %;"><button class="btn btn-dark">Back</button></a>
			<h1 class="h1 text-center">Course Detail</h1>
			<main class="container ">
				<div class="row">
					<h2 class="mb-4">{{ $course->name }}</h2>
					<div class="flex">
						<!-- <p><strong>Course Fee:</strong> $99</p> -->
						<p class="lead"><strong>Description:</strong> {{ $course->description }}</p>

						@if(Auth::check()==true)
							@if(!is_null($courses) && count($courses) > 0) 
								<video width="400" height="180" controls>
									  <source src="{{ asset($course->filepath)}}" type="video/mp4">
								</video>
							@else
								<img src="{{ asset($course->thumbnailpath)}}" class="img" alt="{{ $course->title }} Thumbnail" height="200" width="200" />
							@endif
						@elseif(Auth::guard('admin')->check())
							<video width="400" height="180" controls>
									<source src="{{ asset($course->filepath)}}" type="video/mp4">
							</video>
						@else
							<img src="{{ asset($course->thumbnailpath)}}" class="img" alt="{{ $course->title }} Thumbnail" height="200" width="200" />
						@endif

					</div>
					@if(!Auth::guard('admin')->check())
					<form method="POST" action="{{ Route('courses.enroll', $course->courseid) }}">
						@csrf
						<button class="btn btn-primary" type="submit">Enroll</button>
					</form>
					@endif
				</div>
			</main>
		</section>

	</body>
	</html>

@endsection

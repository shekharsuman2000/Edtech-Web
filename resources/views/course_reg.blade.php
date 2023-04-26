@extends('layouts.course_reg_main')
@section('course_reg')
<!DOCTYPE html>
<html>
<head>
	@push('title')
	<title>Course | Registration</title>
	@endpush

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

	<style type="text/css">
		 #form-section{
	      border: white 1px solid;
	      margin-left: 30%;
	      margin-right: 30%;
	      margin-top: 2%;
	      box-shadow: 1px 5px 50px 5px grey;
	      border-radius: 15px;
	  }
	  #section-main{
	  	margin-left: 20%;
	  	margin-right: 20%;
	  	margin-top: 70px;
	  	margin-bottom: 200px;
	  }
	</style>
</head>
<body>

	<section class="vh-100" id="section-main">
		<div class="container mt-5">
			<div class="row d-flex justify-content-center align-items-center h-100">
					<br>
				<h1 class="h1 text-center">Registration</h1>
			<br>
				<br><br>
           
				<div  id="form-section">
					
					<form action="/coursereg" method="post" class="p-4 rounded">
						@csrf

					<!--<div class="container mt-5">
				    <div class="shadow p-3 mb-5 bg-white rounded">
				      <h2 class="text-center mb-4">Registration Form</h2>
				      <div id="form-section">
				        <form class="p-4 rounded">
				          <div class="form-group">
				            <label for="name">Name:</label>
				            <input type="text" class="form-control" id="name" required>
				          </div>

-->

						@if(session('success'))
						    <div class="alert alert-danger text text-center">
						        {{ session('success') }}
						    </div>
						@endif

                            
						<div class="form-outline mb-4">
							<label class="form-label" for="form3Example3">Full Name <span class="text-danger">*</span></label>
							<input type="text" id="form3Example3" name="name" class="form-control"
							placeholder="Enter a your full name" value="{{ old('name') }}"/>
							<span class="text-danger">
								@error('name')
									{{ $message }}
								@enderror
							</span>
						</div>

						<div class="form-outline mb-4">
							<label class="form-label" for="form3Example3">Phone no<span class="text-danger">*</span></label>
							<input type="tel" id="form3Example3" name="phone" value="{{ old('phone') }}" class="form-control "
							placeholder="Enter a valid phone no" />

							<span class="text-danger">
								@error('phone')
									{{ $message }}
								@enderror
							</span>
						</div>

						<div class="form-outline mb-4">
							<label class="form-label" for="form3Example3">Email address<span class="text-danger">*</span></label>
							<input type="email" id="form3Example3" name="email" value="{{ old('email') }}" class="form-control "
							placeholder="Enter a valid email address" />

							<span class="text-danger">
								@error('email')
									{{ $message }}
								@enderror
							</span>
						</div>


						<div class="form-outline mb-4">
							<label class="form-label" for="form3Example3">Password<span class="text-danger">*</span></label>
							<input type="password" id="form3Example3" name="password" class="form-control "
							placeholder="Enter a strong password" />

							<span class="text-danger">
								@error('password')
									{{ $message }}
								@enderror
							</span>
						</div>


						<div class="form-outline mb-4">
							<label class="form-label" for="form3Example3">Confirmed Password<span class="text-danger">*</span></label>
							<input type="password" id="form3Example3" name="confirm_password" class="form-control "
							placeholder="Re-enter your password" />

							<span class="text-danger">
								@error('confirm_password')
									{{ $message }}
								@enderror
							</span>
						</div>

						
						

						<div class="text-center text-lg-start mt-4 pt-2">
							<button type="submit" class="btn btn-primary btn-lg"
							style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
							<p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="{{route('user.login')}}"
								class="link-danger">Login</a>
							</p>
						</div>

						</form>
					</div>
				</div>
			</div>
			
	</section>

</body>
</html>
@endsection



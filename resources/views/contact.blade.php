@extends('layouts.contact-main')
@section('contact')
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
	  	margin-top: 100px;
	  	margin-bottom: 20px;
	  }
	</style>
</head>
<body>

	<section class="vh-100" id="section-main">
		<div class="container mt-5">
			<div class="row d-flex justify-content-center align-items-center h-100">
					<br>
				<h1 class="h1 text-center">Contact us</h1>
			<br>
				<br><br>
           
				<div  id="form-section">
					
					<form action="/sendmessage" method="post" class="p-4 rounded">
						@csrf

                        @if (session()->has('status'))
						    <div class="alert alert-success text text-center text-info">
						        {{ session()->get('status') }}
						    </div>
						@endif

						<div class="form-outline mb-4">
							<label class="form-label" for="form3Example3">Full Name <span class="text-danger">*</span></label>
							<input type="text" id="form3Example3" name="name" class="form-control"
							placeholder="Enter a your full name" />
							<span class="text-danger">
								@error('name')
									{{ $message }}
								@enderror
							</span>
						</div>


						<div class="form-outline mb-4">
							<label class="form-label" for="form3Example3">Email address<span class="text-danger">*</span></label>
							<input type="email" id="form3Example3" name="email" class="form-control "
							placeholder="Enter a valid email address" />

							<span class="text-danger">
								@error('email')
									{{ $message }}
								@enderror
							</span>
						</div>


						<div class="form-outline mb-4">
							<label class="form-label" for="form3Example3">Message<span class="text-danger">*</span></label>
							<textarea  id="form3Example3" name="message" class="form-control"placeholder="Enter a your message..." rows="6"></textarea>

							<span class="text-danger">
								@error('message')
									{{ $message }}
								@enderror
							</span>
						</div>

						
						

						<div class="text-center text-lg-start mt-4 pt-2">
							<button type="submit" class="btn btn-primary btn-lg"
							style="padding-left: 2.5rem; padding-right: 2.5rem;">Send</button>
						</div>

						</form>
					</div>
				</div>
			</div>
			
	</section>

</body>
</html>
@endsection
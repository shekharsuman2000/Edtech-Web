@extends('layouts.loginmain')
@section('loginform')
<!DOCTYPE html>
<html>
<head>
	@push('title')
	<title>SQE | Login</title>
	@endpush

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

	<style type="text/css">
		.divider:after,
		.divider:before {
			content: "";
			flex: 1;
			height: 1px;
			background: #eee;
		}
		.h-custom {
			height: calc(100% - 73px);
		}
		@media (max-width: 450px) {
			.h-custom {
				height: 100%;
			}
		}
		.vh-100{
			margin-top: 5%;
		}
	</style>
</head>
<body>
	<section class="vh-100">
		<div class="container-fluid h-custom">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-md-9 col-lg-6 col-xl-5">
					<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
					class="img-fluid" alt="Sample image">
				</div>
				<div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
					
					<form action="/login" method="post">
						@csrf
						<!--<div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
							<p class="lead fw-normal mb-0 me-3">Sign in with</p>
							<button type="button" class="btn btn-primary btn-floating mx-1">
								<i class="fab fa-facebook-f"></i>
							</button>

							<button type="button" class="btn btn-primary btn-floating mx-1">
								<i class="fab fa-twitter"></i>
							</button>

							<button type="button" class="btn btn-primary btn-floating mx-1">
								<i class="fab fa-linkedin-in"></i>
							</button>
						</div>

						<div class="divider d-flex align-items-center my-4">
							<p class="text-center fw-bold mx-3 mb-0">Or</p>
						</div>
					-->

						<h1 class="h1">Sign in</h1>
						@if(session('success'))
						    <div class="alert alert-danger">
						        {{ session('success') }}
						    </div>
						@endif	
						
						<div class="form-outline mb-4">
							<label class="form-label" for="form3Example3">Email address<span class="text-danger">*</span></label>
							<input type="email" id="form3Example3" name="email" class="form-control form-control-lg"
							placeholder="Enter a valid email address" value="{{ old('email')}}" />
							<span class="text-danger">
								@error('login_email')
									{{ $message }}
								@enderror
							</span>
						</div>

						
						<div class="form-outline mb-3">
							<label class="form-label" for="form3Example4">Password<span class="text-danger">*</span></label>
							<input type="password" id="form3Example4" name="password" class="form-control form-control-lg"
							placeholder="Enter password" />

							<span class="text-danger">
								@error('login_pass')
									{{ $message }}
								@enderror
							</span>
						</div>

						<div class="d-flex justify-content-between align-items-center">
							<!-- Checkbox -->
							<div class="form-check mb-0">
								<input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
								<label class="form-check-label" for="form2Example3">
									Remember me
								</label>
							</div>
							<!-- <a href="#!" class="text-body">Forgot password?</a> -->
						</div>

						<div class="text-center text-lg-start mt-4 pt-2">
							<button type="submit" class="btn btn-primary btn-lg"
							style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
							<p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{url('/register')}}"
								class="link-danger">Register</a></p>
						</div>

						</form>
					</div>
				</div>
			</div>
			
	</section>

</body>
</html>
@endsection
@extends('layouts.admin-register-main')
@section('admin')
	
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<style type="text/css">
			#form-body{
				border: white 1px solid;
				margin-left: 30%;
				margin-right: 30%;
			    /*margin-top: 10%;*/
		  	    box-shadow: 1px 5px 50px 5px grey;
				border-radius: 15px;
				padding: 3%;
			}
			.body{

			  	margin-top: 100px;
			  	margin-bottom: 20px;
			}
		</style>
	</head>
	<body>
		<div class="body">
			<h1 class="h1 text-center">Admin Login</h1>
			<div id="form-body">
			@if (session('success'))
			    <div class="alert alert-danger text text-center">
			        {{ session('success') }}
			    </div>
			@endif	
				<form action="{{ route('admin.login') }}" method="post">
					@csrf
					<div class="form-group">
						<label for="user">Username: <small class="text-danger">*</small></label>
						<input class="form-control" name="email" type="text" value="{{ old('email') }}" required autofocus>
					</div>
					<div class="form-group">
						<label for="password">Password:<small class="text-danger">*</small></label>
						<input class="form-control" name="password" type="password" required>
					</div>
					<div class="text-center text-lg-start mt-4 pt-2">
						<button class="btn btn-primary text-center btn-lg" type="submit">Login</button>
					
						<!-- <a href="{{ Route('admin.registration') }}">Register</a> -->
						<p class="small fw-bold mt-2 pt-1 mb-0 text-center">Don't have an account? <a href="{{Route('admin.registration')}}"
						class="link-danger">Register</a></p>
					</div>
				</form>
			</div>
		</div>
	</body>
	</html>

@endsection
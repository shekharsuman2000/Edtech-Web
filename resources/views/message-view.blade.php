@extends('layouts.message-view-main')
@section('message-view')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<style type="text/css">
		#container{
			margin-top: 120px;
			margin-left: 5%;
			margin-right: 5%;
		}
	</style>
</head>
<body>
	
	<div id="container">
		<a href="{{ URL::previous() }}" class="" style="float: right; margin-right: %;"><button class="btn btn-dark">Back</button></a>
		<h1 class="h1">View Messages</h1>
			<table class="table" style="margin-top: 2%;">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name</th>
			      <th scope="col">Email</th>
			      <th scope="col">Messages</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach ($messages as $message)
			    <tr>
			      <th scope="row">{{ $message->cotactid}}</th>
			      <td>{{ $message->name }}</td>
			      <td><a href="mailto:{{ $message->email }}?subject=Mail from SQE System"">{{ $message->email }}</a></td>
			      <td style="text-overflow: ellipsis; overflow: hidden;">{{ $message->message }}</td>
			      <td><a href="mailto:{{ $message->email }}?subject=Mail from SQE System"><button class="btn btn-info btn-sm">Reply</button></a></td>
			    </tr>
			    @endforeach
			   </tbody>
			</table>
	</div>
</body>
</html>


@endsection
@extends('layouts.main')

@section('main-section')
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	@push('title')
		<title>Home | Page</title>
	@endpush
	<script type="text/javascript" src="https://releases.jquery.com/git/jquery-git.js"></script>
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Roboto:300,400);
    	@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);
		.container {
			width: 100%;
		}
	

	.mySlides {display:none;}
	.snip1533 {
		box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
		color: #9e9e9e;
		display: inline-block;
		font-family: 'Roboto', Arial, sans-serif;
		font-size: 16px;
		max-width: 310px;
		min-width: 250px;
		position: relative;
		text-align: center;
		width: 100%;
		background-color: #ffffff;
		border-radius: 5px;
		border-top: 5px solid #d2652d;
		margin-right: 3%;
	}
	.blockquote{
		padding-bottom: 0.01rem;
	}
	blockquote{
		padding-bottom: 0.01rem;
		
	}

	.snip1533 *,
	.snip1533 *:before {
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		-webkit-transition: all 0.1s ease-out;
		transition: all 0.1s ease-out;
	}

	.snip1533 figcaption {
		padding: 13% 10% 12%;
	}

	.snip1533 figcaption:before {
		-webkit-transform: translateX(-50%);
		transform: translateX(-50%);
		background-color: #fff;
		border-radius: 50%;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
		color: #007bff;
		content: "\f10e";
		font-family: 'FontAwesome';
		font-size: 32px;
		font-style: normal;
		left: 50%;
		line-height: 60px;
		position: absolute;
		top: -30px;
		width: 60px;
	}

	.snip1533 h3 {
		color: #007bff;
		font-size: 20px;
		font-weight: 300;
		line-height: 24px;
		margin: 10px 0 5px;
	}

	.snip1533 h4 {
		font-weight: 400;
		margin: 0;
		opacity: 0.5;
	}

	.snip1533 blockquote {
		font-style: italic;
		font-weight: 300;

	}
	.navbar{
		background-color: white;
	}
	.mySlides {display:none}
	.w3-left, .w3-right, .w3-badge {cursor:pointer}
	.w3-badge {height:13px;width:13px;padding:0}


	.navbar .navbar-expand-lg{
		background: transparent;

	}
	#navbar{
		background-color: transparent;
		color: black;
	}
	#body-content{
		margin-top: 10%;
	}
	#excourse{
		color: white;
	}
	#list{
		color: #E0FFFF;
	}
	
	}


	body {
		margin: 0;
		padding: 0;
	}

	.bg-image {
		background-image: url('images/background.jpg');
		filter: blur(5px);
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: -1;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		background-attachment: fixed;
	}

	.content {
		position: relative;
		z-index: 1;
		text-align: center;
		padding: 50px;
		color: white;
		margin-top: 16%;
	}
	#mainsection{
		margin-top: 16%;
	}

</style>
</head>
<body>
	<div class="bg-image"></div>
	<div class="content">
		<h1 class="h1">ABC SYSTEM & SOLUTIONS</h1>
		<p>Software || Quality || Education <br><br> <!-- <a href="{{route('courseexplorer')}}" id="excourse">EXPLORE COURSE</a> --></p>
	</div>
</div>
</div>
<br><br>
	<div id="mainsection">
		<center><h1 class="h1">Gallery</h1></center>
		<br>
		<center><div class="w3-content w3-display-container">
		  <img class="mySlides" src="images/gal.jpg" width="700" height="400">
		  <img class="mySlides" src="images/gal2.jpg" width="700" height="400">
		  <img class="mySlides" src="images/gal1.jpg" width="700" height="400">
		  <img class="mySlides" src="images/gal3.jpg" width="700" height="400">
		  <img class="mySlides" src="images/gal4.jpg" width="700" height="400">
		  <img class="mySlides" src="images/gal5.jpg" width="700" height="400">
		  <img class="mySlides" src="images/gal6.jpg" width="700" height="400">
		  <img class="mySlides" src="images/gal7.jpg" width="700" height="400">

		  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
		  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
		</div></center>
		<br>
		<br>




		 <center><!--<h1 class="h1">{{Auth::user()}}</h1> -->
		 	<center><h1 class="h1">Testimonials</h1></center>
			<br>
			<div>
				<figure class="snip1533">
					<figcaption>
						<blockquote>
							<p>Hello Naveen sir,
							I am Sanjana from OraApps Batch-2. I had a very good experience during the whole training period. It was nice to revise all the basics that helped me learn the other concepts in detail. You made us understand all the concepts easily and the everyday assignments helped me remember the concepts better. I will try to adapt to this learning method in the future and thank you sir 😄</p>
						</blockquote>
						<h3>Sanjana</h3>
						<h4>Student</h4>
					</figcaption>
				</figure>
				<figure class="snip1533">
					<figcaption>
						<blockquote class="blockquote">
							<p>You made the sessions very intresting sir. It wasn't boring even on one day. Nav ela esto sala matadkondidivi that you are the best trainer and we were really blessed to have you as our trainer sir. Nim tara mathe yaru sigala ansathe munde. We'll miss you. Thank you so much!</p>
						</blockquote>
						<h3>Kavya</h3>
						<h4>Student</h4>
					</figcaption>
				</figure>
			</div>
		</center>
	</div>

	<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
		  showDivs(slideIndex += n);
		}

		function showDivs(n) {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  if (n > x.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
		    x[i].style.display = "none";  
		  }
		  x[slideIndex-1].style.display = "block";  
		}
	</script>

</body>
</html>


@endsection
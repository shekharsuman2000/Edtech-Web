<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
<meta name="description" content="Navigation  menu with submenu examples for any type of project, Bootstrap 4" />  

<title></title>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>


<script type="text/javascript">

$(document).ready(function() {

    $(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
    });

    if ($(window).width() < 992) {
	  	$('.dropdown-menu a').click(function(e){
	  		e.preventDefault();
	        if($(this).next('.submenu').length){
	        	$(this).next('.submenu').toggle();
	        }
	        $('.dropdown').on('hide.bs.dropdown', function () {
			   $(this).find('.submenu').hide();
			})
	  	});
	}
	
});
</script>

<style type="text/css">
	@media (min-width: 992px){
		.dropdown-menu .dropdown-toggle:after{
			border-top: .3em solid transparent;
		    border-right: 0;
		    border-bottom: .3em solid transparent;
		    border-left: .3em solid;
		}

		.dropdown-menu .dropdown-menu{
			margin-left:0; margin-right: 0;
		}

		.dropdown-menu li{
			position: relative;
		}
		.nav-item .submenu{ 
			display: none;
			position: absolute;
			left:100%; top:-7px;
		}
		.nav-item .submenu-left{ 
			right:100%; left:auto;
		}

		.dropdown-menu > li:hover{ background-color: #f1f1f1 }
		.dropdown-menu > li:hover > .submenu{
			display: block;
		}
	}
</style>
</head>
<body class="bg-light">



	<nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo03">

			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item"><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li
					<li class="nav-item"><a class="nav-link" href="#">About</a></li>


					<li class="nav-item active"><a class="nav-link" href="#"> About Us</a></li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Training  </a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item dropdown-toggle" href="#">Oracle Training Services</a>
								<ul class="submenu dropdown-menu">
									<li><a class="dropdown-item" href="">SQL</a></li>
									<li><a class="dropdown-item" href="">PL/SQL</a></li>
									<li><a class="dropdown-item" href="">JAVA</a></li>
									<li><a class="dropdown-item" href="">HTML</a></li>
									<li><a class="dropdown-item" href="">CSS</a></li>
									<li><a class="dropdown-item" href="">JavaScript</a></li>
								</ul>
							</li>
							<li><a class="dropdown-item dropdown-toggle" href="#"> Cloud Training Services </a>
								<ul class="submenu dropdown-menu">
									<li><a class="dropdown-item" href="">AWS cerified Solutions Architect - Professional</a></li>
									<li><a class="dropdown-item" href="">AWS cerified Solutions Architect - Associate</a></li>
									<li><a class="dropdown-item" href="">DevOps</a></li>
									<li><a class="dropdown-item" href="">SysOps</a></li>
									<li><a class="dropdown-item" href="">Oracle Cloud</a></li>
								</ul>
							</li>
							<li><a class="dropdown-item dropdown-toggle" href="#"> Data Science</a>
								<ul class="submenu dropdown-menu">
									<li><a class="dropdown-item" href="">Python</a></li>
									<li><a class="dropdown-item" href="">Machine Learning - Data Science</a></li>
									<li><a class="dropdown-item" href="">R Programming </a></li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="nav-item dropdown dmenu">
						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
							Our Service
						</a>
						<div class="dropdown-menu sm-menu">
							<a class="dropdown-item" href="#">service2</a>
							<a class="dropdown-item" href="#">service 2</a>
							<a class="dropdown-item" href="#">service 3</a>
						</div>
					</li>

					<li class="nav-item active"><a class="nav-link" href="#"> Testimonials</a></li>
					<li class="nav-item active"><a class="nav-link" href="#"> Contact Us</a></li>
				</ul>
			</div>

		</nav>


</div>
</body>
</html>
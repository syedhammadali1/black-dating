<!DOCTYPE html>
<html>
<head>
	 <title>Join Now | Black ALT Dating</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="web/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="web/css/home-bg-slide.css">
	<link rel="stylesheet" type="text/css" href="web/css/style.css">
	<link rel="stylesheet" type="text/css" href="web/css/new-style.css">
	<link rel="stylesheet" type="text/css" href="web/css/sweetalert.css">
  <link rel="stylesheet" type="text/css"  href="web/css/swiper-bundle.min.css">
  <link rel="stylesheet" type="text/css"  href="web/css/glightbox.css">

	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair Display:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Font Awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!-- include header -->
@include('includes.header')
<!-- /include header -->
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark header">
		<header class="container">
			<a class="logo" href="{{ route('landing_page') }}">
			   <img width="285"src="uploads/site/04c5f6350c450c41c57d2bf37f4e86d8.png">
			</a>
			<div class="pull-right header-login">
                @if (Auth::check())
                <a class="btn btn-outline-primary"  href="{{ route('user.profile_view',['username'=>'username']) }}">Profile</a>
                @else
                <a class="btn btn-outline-primary"  href="{{ route('landing_page') }}">Login</a>
                @endif
				
			</div>
		</header>
	</nav>

	<section class="container">
        <div class="col-md-12 content-area">
            <h3 class="mb-3">About Us</h3>

            <p>Our mission is to provide a dating platform to meet alternative people of color. Black Alt Dating embrace alternative identities either it be punks, goths,nerds or something else entirely, such self expression have often been made to feel invisible in the black community and society at large, usually perceived as the sole domain of white “ social outcast.”</p>

            <p>Alternative people of color has always existed and too often came with alienation and a diluted sense that one is “ not black enough” or is diametrically opposed to blackness. Black Alt Dating is a platform that embrace people of color that fly it’s so called “ weirdo flag ” proudly. <strong class="text-danger">We welcome you to sign up and join this growing community.</strong></p>
        </div>
	</section>
	


	<footer class="footer_footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6"> 
					<img src="{{asset('uploads/site/04c5f6350c450c41c57d2bf37f4e86d8.png')}}" class="img-fluid footer-logo">
				</div>
	
				<div class="col-md-6">
					<ul class="footer-links">
						<li><a href=""><i class="fab fa-instagram"></i></a></li>
						<li><a href=""><i class="fab fa-facebook"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>
	
				<div class="col-12 text-center">
					<ul class="footerz-link">
						<li><a href="{{route('about-us')}}">About Us</a></li>
						<li><a href="{{route('contact-us')}}">Contact Us</a></li>
						<li><a href="{{route('term-conditions')}}">Term & Conditions</a></li>
					</ul>
					<div class="credit">
						<p>Copyright 2022. All Rights Reserved | Customer Support: info@blackdating.com</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
<script type="text/javascript" src="web/js/jquery-2.0.3.js" ></script>
<script src="web/js/popper.js"></script>
<script type="text/javascript" src="web/js/bootstrap.min.js"></script>
<script type="text/javascript" src="web/js/sweetalert.js"></script>
<script type="text/javascript" src="web/js/select2.min.js"></script>
<script type="text/javascript" src="web/js/jquery.form.js"></script>
<script type="text/javascript" src="web/js/jquery.uploadfile.js"></script>
<script type="text/javascript" src="web/js/jquery.blockUI.js"></script>


<script type="text/javascript" src="web/js/jquery.fancybox.js"></script>
<!-- Dynamic JS Files -->


 <script type="text/javascript" src="web/js/register.js"></script>
 <script type="text/javascript" src="web/js/swiper-bundle.min.js"></script>
 <script type="text/javascript" src="web/js/glightbox.js"></script>
 <script type="text/javascript" src="web/js/all.js"></script>

</body>
<!-- include footer -->
@include('includes.footer')
<!-- /include footer -->

</html> 

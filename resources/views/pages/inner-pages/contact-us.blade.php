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
	<nav class="navbar navbar-expand-lg navbar-dark header" style="margin-bottom: -135px;">
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
<div style="background-image: url({{asset('imgs/contact-background.jpg')}});background-size: cover;background-repeat:no-repeat; ">
	<div class="container mt-5 contact-us-frm">
		<div class="row justify-content-center no-gutters" style="padding: 50px 0;">

			<div class="col-md-3 left-box">
				<div class="pt-5 pl-5 pr-5">
					<h3 class="mb-2 mt-3">Contact Us</h3>
					<p style="color: white">We would love to hear from you !</p>
				</div>
				<img src="{{asset('imgs/leafs.jpg')}}" class="contact-leaf w-100" style="opacity: 35%" alt="background">
			</div>

			<div class="col-md-7 ">
				<form action="#" class="col" style="background: transparent;">

					<div class="form-group">
						<label for="name" class="font-weight-bold">Name</label>
						<input placeholder="Your Name" style="background-color: transparent;color: #000000" id="name" name="name" value="" type="text" class="form-control form-control-lg mail_txt_name" autofocus="" required>
						<p class="name_error"></p>
					</div>

					<div class="form-group">
						<label for="email" class="font-weight-bold">Email</label>
						<input type="email"  placeholder="Your Email" style="background-color: transparent;color: #000000" id="email" name="email"  value="" class="form-control form-control-lg mail_txt_email" required>
						<p class="email_error"></p>
					</div>

					<div class="form-group">
						<label for="message" class="font-weight-bold">Message</label>
						<textarea rows="8" id="message" style="background-color: transparent;color: #000000" name="message" class="form-control form-control-lg mail_textarea_message"></textarea>
						{{--                        <input type="email"  placeholder="Your Message" id="message" name="message"  value="" class="form-control form-control-lg mail_textarea_message" required>--}}
						<p class="email_error"></p>
					</div>

					{{-- <div class="form-group">
                        <label for="email" class=" font-weight-bold">Subject</label>
                        <input  placeholder="Your Subject"  name="subject" type="text" value="" class="form-control form-control-lg mail_txt_subject" >
                        <p class="email_error"></p>
                    </div> --}}


					{{--					<button> class="btn btn-large btn-outline-primary" type="button" onclick="sendEmail()"><span>Send</span> </button>--}}
					<button type="button" class="btn btn-large btn-outline-primary" onclick="sendEmail()"><span>Send</span></button>
				</form>
			</div>

		</div>
	</div>
</div>
	<footer class="footer_footer" style="margin-top: 0">
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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>

    function sendEmail() {

        

        var mail_txt_name = $(".mail_txt_name").val();
     
        var mail_txt_email = $(".mail_txt_email").val();

        var mail_txt_subject = $(".mail_txt_subject").val();
        
        var mail_textarea_message = $(".mail_textarea_message").val();

        Email.send({

        
            Host: "mail.divinatorysolutions.net",
            Username: "test.development@divinatorysolutions.net",
            Password: "BabaBlackSheep!00%",
            To: mail_txt_email,
            From: 'dd@divinatorysolutions.net',
            Subject: mail_txt_subject,
            Body: "From : " + mail_txt_email + " " + mail_textarea_message
          

        }).then(
            message => swal({
            title: "Sent!",
            text: "Your email was sent successfully!",
            icon: "success",
        })
          
        );
     


      
    }



</script>

</html> 

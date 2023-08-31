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
	<style type="text/css">
	.tooltip-inner{ background: #FFF; color: red; max-width: 325px;}
	.bs-tooltip-auto[x-placement^=right] .arrow::before,
	.bs-tooltip-right .arrow::before{border-right-color:#fff ;}
	.bs-tooltip-auto[x-placement^=bottom] .arrow::before, 
	.bs-tooltip-bottom .arrow::before{ border-bottom-color: #FFF;}
	.bg-about{background:url(""); background-size:cover; padding-left:10px !important; padding-right:40px !important;}


	.how-it-works{
	background-image: url("../web/images/how_it_works.jpg"); 
	}

	</style>
	<section class="container-fluid bg-home">
		<div class="row">
			<div class="col-md-12 col-lg-7 col-12">
				<div class="vertical-center">
					<div class="rego">
					    <form class="user lw-ajax-form lw-form" method="post" action="<?= route('user.sign_up.process') ?>" data-show-processing="true" data-secured="true" data-unsecured-fields="first_name,last_name">			
							<div class="bggrey grey-bottom">
								<h4 class="text-uppercase" align="center">Join Now</h4>
								<div class="form-group row">
									<!-- First Name -->
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input type="text" class="form-control form-control-user" name="first_name" placeholder="<?= __tr('First Name') ?>" required minlength="3">
									</div>
									<!-- /First Name -->

									<!-- Last Name -->
									<div class="col-sm-6">
										<input type="text" class="form-control form-control-user" name="last_name" placeholder="<?= __tr('Last Name') ?>" required minlength="3">
									</div>
									<!-- /Last Name -->
								</div>


								<div class="form-group row">
									<!-- Username -->
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input type="text" class="form-control form-control-user" name="username" placeholder="<?= __tr('Username') ?>" required minlength="5">
									</div>
									<!-- /Username -->

									<!-- Mobile Number -->
									<div class="col-sm-6">
										<input type="text" class="form-control form-control-user" name="mobile_number" placeholder="<?= __tr('Mobile No') ?>" required>
									</div>
									<!-- /Mobile Number -->
								</div>

								 <!-- Email Address -->
								 <div class="form-group">
									<input type="email" class="form-control form-control-user" name="email" placeholder="<?= __tr('Email Address') ?>" required>
								</div>
								<!-- /Email Address -->


								<div class="form-group row">
									<!-- Gender -->
									<div class="col-sm-6 mb-3 mb-sm-0">
										<select name="gender" class=" form-control-user lw-user-gender-select-box" id="select_gender" required>
											<option value="" selected disabled><?= __tr('Choose your gender') ?></option>
											@foreach($genders as $genderKey => $gender)
											<option value="<?= $genderKey ?>"><?= $gender ?></option>
											@endforeach
										</select>
									</div>
									<!-- /Gender -->

								      <!-- Date -->
									  <div class="col-sm-6">
										<input type="date" min="{{ \Carbon\Carbon::now()->subYears(configItem('age_restriction.maximum'))->format('Y-m-d') }}" max="{{ \Carbon\Carbon::now()->subYears(configItem('age_restriction.minimum'))->format('Y-m-d') }}" class="form-control-user" name="dob" placeholder="<?= __tr('YYYY-MM-DD') ?>" required="true">
									  </div>
									<!-- Date  -->
								</div>


								
								<div class="form-group row">
									<!-- Password -->
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input type="password" class="form-control form-control-user" name="password" placeholder="<?= __tr('Password') ?>" required minlength="6">
									</div>
									<!-- /Password -->

									<!-- Confirm Password -->
									<div class="col-sm-6">
										<input type="password" class="form-control form-control-user" name="repeat_password" placeholder="<?= __tr('Repeat Password') ?>" required minlength="6">
									</div>
									<!-- /Confirm Password -->
								</div>

								<div class="form-group">
									<div class="form-check">
										<input type="hidden" name="accepted_terms">
										<input type="checkbox" class="form-check-input" id="acceptTerms" name="accepted_terms" value="1" required>
										<label class="form-check-label" for="acceptTerms">
											<?= __tr('I accept all ') ?>
											<a target="_blank" href="<?= getStoreSettings('terms_and_conditions_url') ?>">
												<?= __tr('terms and conditions') ?></a>
										</label>
									</div>
								</div>

								<div>
									<!-- Register Account Button -->
									<a href class="lw-ajax-form-submit-action btn btn-primary btn-user btn-block">
										<?= __tr('Register Account') ?>
									</a>
									<!-- /Register Account Button -->
								</div>

								<hr>
								<!-- Register with Google Button -->
								@if(getStoreSettings('allow_google_login'))
								<a href="<?= route('social.user.login', [getSocialProviderKey('google')]) ?>" class="btn btn-google btn-user btn-block">
									<i class="fab fa-google fa-fw"></i> <?= __tr('Register with Google') ?>
								</a>
								@endif
								<!-- /Register with Google Button -->

								  <!-- Register with Facebook Button -->
								  @if(getStoreSettings('allow_facebook_login'))
								  <a href="<?= route('social.user.login', [getSocialProviderKey('facebook')]) ?>" class="btn btn-facebook btn-user btn-block">
									  <i class="fab fa-facebook-f fa-fw"></i> <?= __tr('Register with Facebook') ?>
								  </a>
								  @endif
								  <!-- /Register with Facebook Button -->
								
							
							</div>
						</form>
						@if(getStoreSettings('allow_google_login') || getStoreSettings('allow_facebook_login'))
						<hr>
						@endif
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-5 col-12">
				<ul class="cb-slideshow">
					<li>
						<span style="background-image: url('web/images/222.jpg');">Image 01</span>
						<div></div>
					</li>
					<li>
						<span>Image 02</span>
						<div></div>
					</li>
					<li>
						<span>Image 03</span>
						<div></div>
					</li>
					<li><span>Image 04</span>
						<div></div>
					</li>
					<li>
						<span>Image 05</span>
						<div></div>
					</li>
				</ul>
			</div>
		</div>
		<div class="fram-section">
			<img src="web/images/frame-1-min.png" class="img-fluid">
		</div>
	</section>
	
	
	<section class="">
		<div class="row bg-pi pb-5  d-flex align-items-center">
			<div class="col-md-7 col-lg-7 col-12">
	
		   <!-- ======= Testimonials Section ======= -->
		<section id="testimonials" class="testimonials">
		  <div class="container" data-aos="zoom-in">
	
			<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
			  <div class="swiper-wrapper">
	
				<div class="swiper-slide">
				  <div class="testimonial-item">
					<img src="uploads/site/person1.png" class="img-fluid" alt="">                              
				  </div>
				</div><!-- End testimonial item -->
	
				<div class="swiper-slide">
				  <div class="testimonial-item">
					<img src="uploads/site/person2.png" class="img-fluid" alt="">
				  </div>
				</div><!-- End testimonial item -->
	
				<div class="swiper-slide">
				  <div class="testimonial-item">
					<img src="uploads/site/person3.png" class="img-fluid" alt="">
				  </div>
				</div><!-- End testimonial item -->
	
				<div class="swiper-slide">
				  <div class="testimonial-item">
					<img src="uploads/site/person4.png" class="img-fluid" alt="">
				  </div>
				</div><!-- End testimonial item -->
			  </div>
			  <div class="swiper-pagination"></div>
			</div>
	
		  </div>
		</section><!-- End Testimonials Section -->
	
				
			</div>
	
		<div class="col-md-5 col-lg-5 col-12 content-section bg-about">           
		<div class="mb-3 p-2" style=" color:#000">
		  <h2>About Us </h2>
		  <p>
		  <span class="">
					Welcome to Black Alt Dating, the premier and only dating site &amp; App for the Black Alternative community,
					if you're a goth, punk, emo, nerd or in between, then this is the dating platform for you to meet other eccentric people of color. 
					</span>
					<br><br>
			Despite the media's narrative, not all POC are into hip-hop, rap, graffiti or "gangster images" an archaic concept mass media has continuously pushed as the black norm.
			Black Alt Dating celebrates the diversity of the African American community, we can be into the arts, classical, metal, bluegrass, folk dancing, comics, anime and futurism.
			Black Alt Dating is community that celebrates and promotes love, acceptance, freedom, individuality, art, expression, and music regardless of your background, all are welcome to join in this colorful tapestry of love.
		  </p>
		</div>            
				<a href="#" class="btn btn-read-more">Read More</a>
			</div>
		</div>
	</section>
	
	<section class="container-fluid">
		<div class="row bg-white d-flex align-items-center">
			<div class="col-md-6 col-lg-7 col-12 content-section">
				<div class="why-chos-title">
				<h2>Why Choose Black ALT?</h2>
				
				<p>
					With over 1.5 million singles available online, you have more chances
					of meeting the Black woman or man of your dreams on Black ALT than
					anywhere else. Whether you are interested in finding someone local or
					overseas, you can easily browse through 1000s of singles to find the
					perfect partner for you. Sign up to Black ALT today, your Black
					romance is just a click away.
				</p>
				</div>
	
			<div class="why-chos-pra">
				<h2>Black ALT Dating - Over 1.5 Million Singles</h2>
				<p>Black ALT is part of the well-established Black dating network that
					operates over 30 reputable niche dating sites. With a commitment to
					connecting singles worldwide, we bring ALT to you.<br><br>
					Not many other sites can offer you the chance to connect with over 1.5
					million singles looking for love. We are committed to helping you find
					the perfect match, no matter where in the world you may be.
				</p>
			</div>
	
	
			<div class="why-chos-pra2">		
				<h2>Start Your Success Story On Black ALT</h2>
				<p>
					As the leading Black dating site, we successfully bring together
					singles from around the world. Thousands of happy men and women have met
					their soul mates on Black ALT and have shared their stories with us.
					Check out the many success stories <a href="#" target="_blank">here</a>. <br><br>
					For a fun, safe and uniquely Black ALT dating experience, <a href="#">join today</a>.
				</p>
			</div>
	
			</div>
			<div class="col-md-6 col-lg-5 col-12 img-left text-center">
				<h2 class="">Watch this video to find out more:</h2>
				<img class="w-100 img-fluid" src="web/images/video.png">
				<a href=""><img class="img-fluid ply" src="web/images/play.png"></a>
				<a href="#" class="btn btn-join-now">Join Now</a>
			</div>
		</div>
	</section>
	
	<section class="container-fixed work-last pb-5 how-it-works">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="title">How It Works</h2>
				<p>Get started on BlackAltdating.com today in 3 simple steps:</p>
			</div>
			<div class="big-icon-outer">
				<div class="big-icon">
					<p align="center"><img src="web/images/profile-icon.png" alt="" width="218" height="218" border="0">
					</p>
					<div class="big-icon-text"><strong>Create A Profile</strong><br>
						Create a personalised profile, add photos and describe your ideal partner
					</div>
					<p></p>
				</div>
	
				<div class="big-icon">
					<p align="center"><img src="web/images/browse-icon.png" alt="" width="218" height="218" border="0">
					</p>
					<div class="big-icon-text"><strong>Browse Photos</strong><br>
						Find members based on location, special interests and lifestyle preferences
					</div>
					<p></p>
				</div>
				<div class="big-icon">
					<p align="center"><img src="web/images/message-icon.png" alt="" width="218" height="218" border="0">
					</p>
					<div class="big-icon-text"><strong>Start Communicating</strong><br>
						Show interest in the members you like and let the journey begin
					</div>
					<p></p>
				</div>
			</div>
	
			<div class="col-12 text-center">
				<a href="#" class="btn find-your-match">Find Your Match</a>
			</div>
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

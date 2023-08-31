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
  <link rel="stylesheet" type="text/css"  href="web/css/swiper-bundle.min.css">
  <link rel="stylesheet" type="text/css"  href="web/css/glightbox.css">

	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair Display:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Font Awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

    {{-- Swiper Slider Css Link --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


	<!-- include header -->
@include('includes.header')
<!-- /include header -->

<style>
.col-md-12.error-payment.form-group {
    margin-top: -123px;
}
</style>

</head>
<body>
    
    
	<nav class="navbar navbar-expand-lg navbar-dark header">
		<header class="container">
			<a class="logo" href="{{route('landing_page')}}">
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

    <div class="pro_main_wrapper">
        <div class="pakeges_wrapper">
            

    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="pkg_bg" style="background-image: url('{{asset('web/images/shawn-fields-zsppCWsxJy0-unsplash.jpg')}}');"></div>
            </div>

            <div class="swiper-slide">
                <div class="pkg_bg" style="background-image: url('{{asset('web/images/julian-myles-QfozoU3hUgw-unsplash.jpg')}}');"></div>
            </div>

            <div class="swiper-slide">
                <div class="pkg_bg" style="background-image: url('{{asset('web/images/ricardo-esquivel-O8i3pW1leYs-unsplash.jpg')}}');"></div>
            </div>
            

        </div>
    </div>


            <div class="pkg_content_wrapper">
                <div class="pkg_content_header">
                    <h3 class="membership-title pkg_main_tile m-0 text_white">Why Choose Premium Membership</h3>
                    <p class="pkg_main_desc m-0 text_white">We are dedicated to helping you find that special individual</p>
                    <p class="pkg_main_desc m-0 text_white">Unlimited messages</p>
                    <p class="pkg_main_desc m-0 text_white">Full access to other members</p>
                    <p class="pkg_main_desc m-0 text_white">See the full profiles of who's viewed you</p>
                    <p class="pkg_main_desc m-0 text_white">Chat with your connections</p>
                </div>
            </div>
        </div>
        <section class="bs-pricing-five">
            <h3 class="text-center membership-title pkg_main_tile m-0 text_white">Choose a Plan</h3>
            <div class="container">
                <div class="row bs-five-area bs-radius">
                    @forelse ($package as $item)

                    <div class="col-3 price_card">
                        <div class="bs-five">
                            <input class="hidden" name="pro_plan" type="radio" value="{{$item->price}}" data-price="{{$item->price}}" checked="">
                            <input class="hidden" name="package_name" type="radio" value="{{$item->id}}" data-package-id="{{$item->id}}" checked="">
                            <h6 class="text-uppercase">{{$item->title}}</h6>
                            <h1 class="bs-caption"><sup>$</sup>{{$item->price}}</h1>
                            <p>{{$item->description}}</p>
                            @if($item->title == "Free")
                        
                            @else
                            
                               {{-- <a href="javascript:;"  class="btn btn-success btn-round m-top-40 b-now" >{{$check_user_subscription_exists->package_id == $item->id ? 'Current' : 'Buy Now'}}</a> --}}

                               <a href="javascript:;"  class="btn btn-success btn-round m-top-40 b-now @if(isset($check_user_subscription_exists->package_id)) {{$check_user_subscription_exists->package_id == $item->id ? '' : 'disabled'}} @endif " >@if(isset($check_user_subscription_exists->package_id)) {{$check_user_subscription_exists->package_id == $item->id ? 'Current' : 'Buy Now'}}  @else Buy Now @endif </a>
                  
                            @endif
                           
                        </div>
                    </div>
                        
                    @empty
                        
                  
                

                    @endforelse

                    {{-- <div class="col-3">
                        <div class="bs-five ">
                            <input class="hidden" name="pro_plan" type="radio" value="Monthly" data-price="47.99">
                            <h6 class="text-uppercase">Gold Plan</h6>
                            <h1 class="bs-caption"><sup>$</sup>47.99</h1>
                            <p>$2.00/week for 6months</p>
                            <ul>
                                <li><b>billed in one payment of $47.99</b></li>
                            </ul>
                            <a href="javascript:;" class="btn btn-success btn-round m-top-40 b-now">Buy Now</a>

                        </div>
                    </div>
                    <div class="col-3">
                        <div class="bs-five ">
                            <input class="hidden" name="pro_plan" type="radio" value="Yearly" data-price="83.99">
                            <h6 class="text-uppercase">Platinum Plan</h6>
                            <h1 class="bs-caption"><sup>$</sup>83.99</h1>
                            <p>$1.75/week for 1yr</p>

                            <ul>
                                <li><b>billed in one payment of 83.99</b></li>
                            </ul>
                            <a href="javascript:;" class="btn btn-success btn-round m-top-40 b-now">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="bs-five">
                            <input class="hidden" name="pro_plan" type="radio" value="Lifetime" data-price="500">
                            <h6 class="text-uppercase">Lifetime Plan</h6>
                            <h1 class="bs-caption"><sup>$</sup>500</h1>
                            <ul>
                            </ul>
                            <a href="javascript:;" class="btn btn-success btn-round m-top-40 b-now">Buy Now</a>
                        </div>
                    </div> --}}

                </div>
            </div>
        </section>

        <section class="container" style="padding:150px 0px 150px 0px;" id="payment-area">
            <div class="row" id="example-3">
                @if (Session::has('success'))
                <div class="alert alert-success text-center">
                   <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                   <p>{{ Session::get('success') }}</p>
                </div>
                @endif

                {{-- @if(getStoreSettings('enable_stripe'))
          
                @endif --}}
               <form
                role="form"
                action="{{ route('stripe.post') }}"
                method="post"
                class="require-validation mx-auto"
                data-cc-on-file="false"
                data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                id="payment-form">
                @csrf
                @if(getStoreSettings('enable_stripe'))
                    <div id="form-container">
                        <div id="card-front">
                            <div id="shadow"></div>
                            {{-- <div id="image-container">
                                <!-- <span id="amount">paying: <strong>$99</strong></span> -->
                                <span id="card-image"></span>
                            </div> --}}
                            <!--- end card image container --->

                       <input type="hidden" name="amount" id="amount" value="">
                       <input type="hidden" name="package_id" id="package_id" value="">
                       <input type="hidden" name="expiry_date" id="todayDate"/>
                      <div class='form-row row'>

                        <div class='payment_main_wrapper'>
                            <p>Pay With</p>
                            <div class="payment_wrapper">
                                <button  type="button" class="card_icon paypall"><img src="{{asset('web/images/paypal.png')}}"/></button>
                                <button  type="button" class="card_icon togglee"><img src="{{asset('web/images/mastercard.png')}}"/></button>
                                <button  type="button" class="card_icon togglee"><img src="{{asset('web/images/visa.png')}}"/></button>
                                <button  type="button" class="card_icon togglee"><img src="{{asset('web/images/mastero.png')}}"/></button>
                                <button  type="button" class="card_icon togglee"><img src="{{asset('web/images/amex.jpg')}}"/></button>
                                <button  type="button" class="card_icon togglee"><img src="{{asset('web/images/gpay.jpg')}}"/></button>
                                <button  type="button" class="card_icon togglee"><img src="{{asset('web/images/applepay.png')}}"/></button>
                            </div>
                        </div>
                        
                        <div class='col-xs-12 form-group card required card_number_wrapper'>
                           <label class='control-label'>Card Number</label> <input
                              autocomplete='off' class='form-control card-number' size='20'
                              type='text'>
                        </div>
                 
                    
                        <div class='col-xs-12 form-group required'>
                           <label class='control-label'>Name on Card</label> <input
                              class='form-control' size='4' type='text'>
                        </div>
                   
                            
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Month</label> <input
                                       class='form-control card-expiry-month' placeholder='MM' size='2'
                                       type='text'>
                                 </div>
                                 <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Year</label> <input
                                       class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                       type='text'>
                                 </div>
                                </div>
                            <div id="cvc-container">
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                class='form-control card-cvc' placeholder='ex. 311' size='4'
                                type='text'>
                                <p style="color:#444;">Last 3 or 4 digits</p>
                            </div>
                            <!--- end CVC container --->
                        </div>
                        <!--- end card front --->
                        <div id="card-back" style="background:#e6e6e6;">
                            <div id="card-stripe"> </div>
                        </div>

                        <input type="text" id="card-token">
                     
                        <!-- <button type="button" id="card-btn">Pay Now $0.00  </button> -->
                      
                        <button type="submit" class="card-btn disabled" data-tid="elements_examples.form.pay_button" id="payment-btn" disabled=""><i class="fa fa-lock" aria-hidden="true"></i> Pay $0</button>
                        @endif
    
                        <div class='col-md-12 error-payment form-group hide'>
                            <div class='alert-danger alert'>Please correct the errors and try
                               again.
                            </div>
                         </div>
                    </div>
                    @if(getStoreSettings('enable_paypal'))
                    <div id="paypal-button-container" style="width:286px"></div>
                    @endif

        
                </form>


         

            </div>
        </section>
    </div>
	


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
<script type="text/javascript" src="web/js/select2.min.js"></script>
<script type="text/javascript" src="web/js/jquery.form.js"></script>
<script type="text/javascript" src="web/js/jquery.uploadfile.js"></script>
<script type="text/javascript" src="web/js/jquery.blockUI.js"></script>


<script type="text/javascript" src="web/js/jquery.fancybox.js"></script>
<!-- Dynamic JS Files -->


 <script type="text/javascript" src="web/js/register.js"></script>
 <script type="text/javascript" src="web/js/swiper-bundle.min.js"></script>
 <script type="text/javascript" src="web/js/glightbox.js"></script>
 {{-- <script type="text/javascript" src="web/js/all.js"></script> --}}



 {{-- <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
 <script type="text/javascript" src="{{asset('/web/js/stripv2.js')}}"></script> --}}
 {{-- <script type="text/javascript" src="{{asset('/web/js/pro.js')}}"></script> --}}

 <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

 {{-- Swiper Script Link --}}
 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


 <script type="text/javascript">
 
    $(function() {
  var $form = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
      var $form = $(".require-validation"),
          inputSelector = ['input[type=email]', 'input[type=password]',
              'input[type=text]', 'input[type=file]',
              'textarea'
          ].join(', '),
          $inputs = $form.find('.required').find(inputSelector),
          $errorMessage = $form.find('div.error'),
          valid = true;
      $errorMessage.addClass('hide');

      $('.has-error').removeClass('has-error');
      $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
              $input.parent().addClass('has-error');
              $errorMessage.removeClass('hide');
              e.preventDefault();
          }
      });
      if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
              number: $('.card-number').val(),
              cvc: $('.card-cvc').val(),
              exp_month: $('.card-expiry-month').val(),
              exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
      }
   
  });
  function stripeResponseHandler(status, response) {
      if (response.error) {
        console.log(status);
        console.log(response.error);
          $('.error-payment')
              .removeClass('hide')
              .find('.alert')
              .text(response.error.message);
      } else {
          /* token contains id, last4, and card type */
          var token = response['id'];
          $form.find('input[type=text]').empty();
          $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
          $form.get(0).submit();
          Swal.fire(
            'Payment Done!',
            'Congrats your are pro now!',
            'success'
            )
      }
  }
});
 </script>
@if(getStoreSettings('enable_paypal'))
<?php $appDebug =  config('app.debug'); ?>
@if(getStoreSettings('use_test_paypal_checkout'))
<script src="https://www.paypal.com/sdk/js?client-id=<?= getStoreSettings('paypal_checkout_testing_client_id') ?>&currency=<?= getStoreSettings('currency') ?>&disable-funding=credit,card&debug=<?= (isset($appDebug) and $appDebug == 1) ? 'true' : 'false' ?>"></script>
@else
<script src="https://www.paypal.com/sdk/js?client-id=<?= getStoreSettings('paypal_checkout_live_client_id') ?>&currency=<?= getStoreSettings('currency') ?>&disable-funding=credit,card&debug=<?= (isset($appDebug) and $appDebug == 1) ? 'true' : 'false' ?>"></script>
@endif
@endif

@if(getStoreSettings('enable_stripe'))
<script src="https://js.stripe.com/v3/"></script>
@endif

@if(getStoreSettings('enable_razorpay'))
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
@endif
 <script>
     $(".bs-five").click(function() {

    //     // var date =  document.getElementById("todayDate").value = today;

     

        
         $('.bs-five').removeClass('active');
         $(this).addClass('active');
         $('.bs-five').find("input[name='pro_plan']").prop('checked', false);
         $(this).find("input[name='pro_plan']").prop('checked', true);
         $('.bs-five').find("input[name='package_name']").prop('checked', false);
         $(this).find("input[name='package_name']").prop('checked', true);

         var price = $('input[name="pro_plan"]:checked').attr('data-price');
         var package_id = $('input[name="package_name"]:checked').attr('data-package-id');

         $("#amount").val(price);
         $("#package_id").val(package_id);
         

         //set duration of plan

         if (package_id == 2) {
            
            var days = 183;

            var t = new Date();
            t.setDate(t.getDate() + days); 
            var month = "0"+(t.getMonth()+1);
            var date = "0"+t.getDate();
            month = month.slice(-2);
            date = date.slice(-2);
            var date = date +"/"+month +"/"+t.getFullYear();
            // alert(date);

         }

         if (package_id == 3) {
            
            var days = 365;

            var t = new Date();
            t.setDate(t.getDate() + days); 
            var month = "0"+(t.getMonth()+1);
            var date = "0"+t.getDate();
            month = month.slice(-2);
            date = date.slice(-2);
            var date = date +"/"+month +"/"+t.getFullYear();
            // alert(date);

         }


         if (package_id == 4) {
            
            var days = 1825;

            var t = new Date();
            t.setDate(t.getDate() + days); 
            var month = "0"+(t.getMonth()+1);
            var date = "0"+t.getDate();
            month = month.slice(-2);
            date = date.slice(-2);
            var date = date +"/"+month +"/"+t.getFullYear();
            // alert(date);

         }


         $("#todayDate").val(date);


         //set duration of plan

         if (price > 0) {
             $("#payment-btn").removeClass('disabled');
             $("#payment-btn").prop('disabled', false);
             $("#payment-btn").html('Pay $' + price);
         } 

        

         else {
             $("#payment-btn").addClass('disabled');
             $("#payment-btn").prop('disabled', true);
             $("#payment-btn").html('Pay $0');
         }

     });

     var lastScrollTop = 0;

     $(".b-now").click(function() {
         $("html, body").animate({
             scrollTop: 700
         }, "slow");

     });



     var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay:true,
        speed:1500,
      });



 </script>
 
<script>
	$(document).ready(function() {
		var enablePaypalCheckout = '<?= getStoreSettings('enable_paypal') ?>',
			enableRazorpayCheckout = '<?= getStoreSettings('enable_razorpay') ?>',
			useTestRazorpayCheckout = '<?= getStoreSettings('use_test_razorpay') ?>';

		//set on click select payment option
		$(".lw-stripe-checkout-btn").on('click', function() {
			$("#lwSelectPaymentMethod").val('stripe');
		});

		//by default hide payment options
		$('.bs-five').on('click', function(event) {
			var $this = $(this),
				packageUid = $('input[name="package_name"]:checked').attr('data-package-id'),
				packageName = 'test',
				packagePrice = $('input[name="pro_plan"]:checked').attr('data-price')
			//on change show payment button options
			$("#lwPaymentOption").show();

			/*************************************************************************************************************
			 RazorPay Payment on Click
			**************************************************************************************************************/
			if (enableRazorpayCheckout) {
				var razorpayKey = null;
				if (useTestRazorpayCheckout) {
					razorpayKey = '<?= getStoreSettings('razorpay_testing_key') ?>';
				} else {
					razorpayKey = '<?= getStoreSettings('razorpay_live_key') ?>';
				}

				$("#lwRazorPayBtn").on('click', function() {
					try {
						var options = {
							"key": razorpayKey,
							"amount": getRazorPayAmount(packagePrice).toFixed(2), // 2000 paisa = INR 20
							"currency": "<?= getStoreSettings('currency'); ?>",
							"name": packageName,
							handler: function(response) {
								if (!_.isEmpty(response.razorpay_payment_id)) {
									//before process on server disabled payment button block
									$("#lwPaymentOption").addClass('lw-disabled-block-content');
									//show loader before ajax request
									$(".lw-show-till-loading").show();
									var razorPayRequestUrl = __Utils.apiURL("<?= route('user.credit_wallet.write.razorpay.checkout') ?>");
									//post ajax request
									__DataRequest.post(razorPayRequestUrl, {
										'packageUid': packageUid,
										'razorpayPaymentId': response.razorpay_payment_id
									}, function(response) {
										//handle callback event data
										handlePaymentCallbackEvent(response);
									});
								} else {
									// Show a cancel page, or return to cart
									//bind error message on div
									$("#lwErrorMessage").text('<?= __tr("Payment Failed") ?>');
									//show hide div
									$("#lwErrorMessage").toggle();
									_.delay(function() {
										//hide div
										$("#lwErrorMessage").toggle();
									}, 10000);
								}
							},
							"prefill": {
								"name": '<?= getUserAuthInfo('profile.full_name') ?>',
								"email": '<?= getUserAuthInfo('profile.email') ?>'
							},
							"theme": {
								"color": "#050505"
							},
							"modal": {
								ondismiss: function(e) {}
							}
						};
						var rzp1 = new Razorpay(options); // will inherit key and image from above.
						rzp1.open();
					} catch (error) {
						//bind error message on div
						alert(error.message);
					}
				});
			}

			//if paypal button instance available then remove from dom else create instance
			if (!_.isEmpty($("#paypal-button-container").html())) {
				$("#paypal-button-container").empty();
			}

			//paypal payment button script js
			/*************************************************************************************************************
			 Paypal Payment on Click
			**************************************************************************************************************/
			
            if (enablePaypalCheckout) {
                
				try {
					paypal.Buttons({
						style: {
							layout: 'horizontal',
							color: 'silver',
							shape: 'rect',
							size: 'responsive',
							// label:   'checkout',
							tagline: false,
							height: 35
						},
						createOrder: function(data, actions) {
							// This function sets up the details of the transaction, including the amount and line item details.
							return actions.order.create({
								purchase_units: [{
									amount: {
										value: packagePrice
									}
								}]
							});
						},
						onApprove: function(data, actions) {
							//before process on server disabled payment button block
							$("#lwPaymentOption").addClass('lw-disabled-block-content');
							//show loader before ajax request
							$(".lw-show-till-loading").show();
							// This function captures the funds from the transaction.
							return actions.order.capture().then(function(details) {
								var requestUrl = __Utils.apiURL("<?= route('user.credit_wallet.write.paypal_transaction_complete', ['packageUid' => 'packageUid']) ?>", {
									'packageUid': packageUid
								});

								//post ajax request
								__DataRequest.post(requestUrl, details, function(response) {
									//handle callback event data
									handlePaymentCallbackEvent(response);
								});
							});
						},
						onError: function(err) {
							// Show an error page here, when an error occurs
							alert(err.message);
						},
						onCancel: function(data) {
							// Show a cancel page, or return to cart
							//bind error message on div
							$("#lwErrorMessage").text('<?= __tr("Payment Canceled by User") ?>');
							//show hide div
							$("#lwErrorMessage").toggle();
							_.delay(function() {
								//hide div
								$("#lwErrorMessage").toggle();
							}, 10000);
						}
					}).render('#paypal-button-container');
				} catch (error) {
					/****Add Stuff error.message ****/
					if ('<?= getStoreSettings('enable_paypal') ?>') {
						__Utils.error('<?= __tr('Something went wrong with paypal checkout, please contact to administrator.') ?>');
					}
				}
			}
		});
	});

	//on success callback
	function onSuccessCallback(responseData) {
		var reactionCode = responseData.reaction,
			selectPaymentMethod = $("#lwSelectPaymentMethod").val(),
			enableStripe = "<?= getStoreSettings('enable_stripe'); ?>";
		//check reaction code
		if (reactionCode == 1 && enableStripe && selectPaymentMethod == 'stripe') {
			var requestData = responseData.data.stripeSessionData,
				useTestStripe = "<?= getStoreSettings('use_test_stripe'); ?>",
				stripePublishKey = '';

			//check is testing or live
			if (useTestStripe) {
				stripePublishKey = "<?= getStoreSettings('stripe_testing_publishable_key'); ?>";
			} else {
				stripePublishKey = "<?= getStoreSettings('stripe_live_publishable_key'); ?>";
			}

			//create stripe instance
			var stripe = Stripe(stripePublishKey);

			//check request id is not undefined
			if (typeof requestData.id !== "undefined") {
				stripe.redirectToCheckout({
					// Make the id field from the Checkout Session creation API response
					// available to this file, so you can provide it as parameter here
					sessionId: requestData.id
				}).then(function(result) {
					// If `redirectToCheckout` fails due to a browser or network
					// error, display the localized error message to your customer
					// using `result.error.message`.
					//bind error message on div
					$("#lwErrorMessage").text(result);
					//show hide div
					$("#lwErrorMessage").toggle();
					_.delay(function() {
						//hide div
						$("#lwErrorMessage").toggle();
					}, 10000);
				});
			}
		} else {
			//bind error message on div
			$("#lwErrorMessage").text(responseData.data.errorMessage);
			//show hide div
			$("#lwErrorMessage").toggle();
			_.delay(function() {
				//hide div
				$("#lwErrorMessage").toggle();
			}, 10000);
		}
	}

	/**
	 * get razor pay amount
	 *
	 *-------------------------------------------------------- */
	function getRazorPayAmount(amount) {
		return amount * 100;
	}

	/**
	 * handle callback event data hide/show data
	 *
	 *-------------------------------------------------------- */
	function handlePaymentCallbackEvent(response) {
		//hide payment options
		$("#lwPaymentOption").hide();
		//hide loader after ajax request complete
		$(".lw-show-till-loading").hide();
		//after process on server enable payment button block
		$("#lwPaymentOption").removeClass('lw-disabled-block-content');
		//check reaction code is 1
		if (response.reaction == 1) {
			//show confirmation
			showConfirmation("<?= __tr('Payment Successful, Credits has been added successfully to your wallet') ?>", function() {
                    __Utils.viewReload();
                    return;
                }, {
                showCancelBtn : false,
                type : 'success',
                confirmButtonText: "<?= __tr('Reload to Update') ?>"
			});
			//load transaction list data function
			_.defer(function() {
				reloadTransactionTable();
			});
			//bind error message on div
			$("#lwSuccessMessage").text(response.data.message);
			//show div
			$("#lwSuccessMessage").toggle();
			_.delay(function() {
				//hide div
				$("#lwSuccessMessage").toggle();
			}, 10000);
		} else {
			//bind error message on div
			$("#lwErrorMessage").text(response.data.errorMessage);
			//show hide div
			$("#lwErrorMessage").toggle();
			_.delay(function() {
				//hide div
				$("#lwErrorMessage").toggle();
			}, 10000);
		}
	}


    $(".togglee").on('click', function() {
        $("#paypal-button-container").hide();

    });

    $(".paypall").on('click', function() {
        $("#paypal-button-container").show();

    });


    
</script>

</body>
<!-- include footer -->
@include('includes.footer')
<!-- /include footer -->

</html> 

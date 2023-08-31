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
    <link rel="stylesheet" type="text/css" href="web/css/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="web/css/glightbox.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair Display:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        	<!-- Custom styles for this template-->
	<?= __yesset([
		'dist/css/public-assets-app*.css',
		'dist/fa/css/all.min.css',
		"dist/css/vendorlibs-datatable.css",
		"dist/css/vendorlibs-photoswipe.css",
		"dist/css/vendorlibs-smartwizard.css",
		'dist/css/custom*.css',
		'dist/css/messenger*.css',
		'dist/css/login-register*.css'
	], true) ?>
        
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark header">
        <header class="container">
            <a class="logo" href="{{ route('landing_page') }}">
                <img width="285" src="uploads/site/04c5f6350c450c41c57d2bf37f4e86d8.png">
            </a>
            <div class="pull-right header-login">
                <a class="btn btn-outline-primary" href="{{ url('/') }}">Register</a>
            </div>
        </header>
    </nav> 
    <style type="text/css">
        .tooltip-inner {
            background: #FFF;
            color: red;
            max-width: 325px;
        }

        .bs-tooltip-auto[x-placement^=right] .arrow::before,
        .bs-tooltip-right .arrow::before {
            border-right-color: #fff;
        }

        .bs-tooltip-auto[x-placement^=bottom] .arrow::before,
        .bs-tooltip-bottom .arrow::before {
            border-bottom-color: #FFF;
        }

        .bg-about {
            background: url("");
            background-size: cover;
            padding-left: 10px !important;
            padding-right: 40px !important;
        }

        .btn-facebook {
        color: #fff;
        background-color: #3b5998;
        border-color: #fff;
        }

        a.btn.btn-facebook.btn-user.btn-block {
          color: white;
        }
    </style>
    <section class="container-fluid bg-home">
        <div class="row">
            <div class="col-md-12 col-lg-7 col-12">
                <div class="vertical-center">
                    <div class="rego" style="margin-top:100px;">
                        
                        <form class="user lw-ajax-form lw-form" data-callback="onLoginCallback" method="post"
                            action="<?= route('user.login.process') ?>" data-show-processing="true" data-secured="true">

                            @if(session('errorStatus'))
                            <!--  success message when email sent  -->
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <?= session('message') ?>
                            </div>
                            <!--  /success message when email sent  -->
                            @endif
         
                            <div class="bggrey grey-bottom">
                                <h4 class="text-uppercase" align="center" style="color: #FFF">Member Login Here</h4>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="email_or_username" aria-describedby="emailHelp" placeholder="<?= __tr('Enter Email Address or Username ...') ?>" required>
                                </div>
                               
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="password" placeholder="<?= __tr('Password') ?>" required minlength="6">
                                </div>

                                <div class="forgot-password-link text-right">
                                    <a class="small" href="<?= route('user.forgot_password') ?>"><?= __tr('Forgot Password?')  ?></a>
                                </div>

                                

                                    <button type="submit" value="Login" class="lw-ajax-form-submit-action btn btn-primary btn-user btn-block"><?= __tr('Login')  ?></button>

                                <div class="horizontalLineL">
                                    &nbsp;
                                </div>
                                <!-- Display login status -->
                                <div id="status"></div>

                               
                                <!-- social login links -->
                                @if(getStoreSettings('allow_google_login'))
                                <a href="<?= route('social.user.login', [getSocialProviderKey('google')]) ?>" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> <?= __tr('Login with Google')  ?>
                                </a>
                                @endif
                                @if(getStoreSettings('allow_facebook_login'))
                                <a href="<?= route('social.user.login', [getSocialProviderKey('facebook')]) ?>" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> <?= __tr('Login with Facebook')  ?>
                                </a>
                                @endif
                                <!-- social login links -->
                                <hr class="mt-4 mb-3">
                                {{-- <!-- Display user profile data -->
                                <div id="userData"></div> --}}

                                <div class="text-center">

                                    <a class="btn btn-success" href="<?= url('/') ?>"><?= __tr('Create an Account!')  ?></a>
                                </div>


                            </div>
                        </form>
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
                            Welcome to Black Alt Dating, the premier and only dating site &amp; App for the Black
                            Alternative community,
                            if you're a goth, punk, emo, nerd or in between, then this is the dating platform for you to
                            meet other eccentric people of color.
                        </span>
                        <br><br>
                        Despite the media's narrative, not all POC are into hip-hop, rap, graffiti or "gangster images"
                        an archaic concept mass media has continuously pushed as the black norm.
                        Black Alt Dating celebrates the diversity of the African American community, we can be into the
                        arts, classical, metal, bluegrass, folk dancing, comics, anime and futurism.
                        Black Alt Dating is community that celebrates and promotes love, acceptance, freedom,
                        individuality, art, expression, and music regardless of your background, all are welcome to join
                        in this colorful tapestry of love.
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

    <section class="container work-last pb-5">
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
                        <li><a href="">About Us</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">Term & Conditions</a></li>
                    </ul>
                    <div class="credit">
                        <p>Copyright 2022. All Rights Reserved | Customer Support: info@blackdating.com</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="web/js/jquery-2.0.3.js"></script>
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

    <!-- Footer -->

    <!-- End of Footer -->

    <!-- Messenger Dialog -->
    <div class="modal fade" id="messengerDialog" tabindex="-1" role="dialog" aria-labelledby="messengerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button id="lwChatSidebarToggle" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <h5 class="modal-title"><?= __tr('Chat') ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="<?= __tr('Close') ?>"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div id="lwChatDialogLoader" style="display: none;">
                        <div class="d-flex justify-content-center m-5">
                            <div class="spinner-border" role="status">
                                <span class="sr-only"><?= __tr('Loading...') ?></span>
                            </div>
                        </div>
                    </div>
                    <div id="lwMessengerContent"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Messenger Dialog -->
    <img src="<?= asset('imgs/ajax-loader.gif') ?>" style="height:1px;width:1px;">
    <script>
        window.appConfig = {
            debug: "<?= config('app.debug') ?>",
            csrf_token: "<?= csrf_token() ?>"
        }
    </script>
    <script>
        //on login success callback
        function onLoginCallback(response) {
            //check reaction code is 1 and intended url is not empty
            if (response.reaction == 1 && !_.isEmpty(response.data.intendedUrl)) {
                //redirect to intendedUrl location
                _.defer(function () {
                    window.location.href = response.data.intendedUrl;
                })
            }
        }
    </script>
    <?= __yesset([
    'dist/pusher-js/pusher.min.js',
    'dist/js/vendorlibs-public.js',
    'dist/js/vendorlibs-datatable.js',
    'dist/js/vendorlibs-photoswipe.js',
    'dist/js/vendorlibs-smartwizard.js'
], true) ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.textcomplete/1.8.5/jquery.textcomplete.min.js"
        integrity="sha512-7DIA0YtDMlg4BW1e0pXjd96R5zJwK8fJullbvGWbuvkCYgEMkME0UFfeZIGfQGYjSwCSeFRG5MIB5lhhEvKheg=="
        crossorigin="anonymous"></script>
    @stack('footer')
    <script>
        (function () {
            $.validator.messages = $.extend({}, $.validator.messages, {
                required: '<?= __tr("This field is required.") ?>',
                remote: '<?= __tr("Please fix this field.") ?>',
                email: '<?= __tr("Please enter a valid email address.") ?>',
                url: '<?= __tr("Please enter a valid URL.") ?>',
                date: '<?= __tr("Please enter a valid date.") ?>',
                dateISO: '<?= __tr("Please enter a valid date (ISO).") ?>',
                number: '<?= __tr("Please enter a valid number.") ?>',
                digits: '<?= __tr("Please enter only digits.") ?>',
                equalTo: '<?= __tr("Please enter the same value again.") ?>',
                maxlength: $.validator.format('<?= __tr("Please enter no more than {0} characters.") ?>'),
                minlength: $.validator.format('<?= __tr("Please enter at least {0} characters.") ?>'),
                rangelength: $.validator.format(
                    '<?= __tr("Please enter a value between {0} and {1} characters long.") ?>'),
                range: $.validator.format('<?= __tr("Please enter a value between {0} and {1}.") ?>'),
                max: $.validator.format('<?= __tr("Please enter a value less than or equal to {0}.") ?>'),
                min: $.validator.format(
                    '<?= __tr("Please enter a value greater than or equal to {0}.") ?>'),
                step: $.validator.format('<?= __tr("Please enter a multiple of {0}.") ?>')
            });
        })();
    </script>
    <?= __yesset([
    'dist/js/common-app.*.js'
], true) ?>
    <script>
        __Utils.setTranslation({
            'processing': "<?= __tr('processing') ?>",
            'uploader_default_text': "<span class='filepond--label-action'><?= __tr('Drag & Drop Files or Browse') ?></span>",
            'gif_no_result': "<?= __tr('Result Not Found') ?>",
            "message_is_required": "<?= __tr('Message is required') ?>",
            "sticker_name_label": "<?= __tr('Stickers') ?>",
            "chat_placeholder": "<?= __tr('type message...') ?>"
        });

        var userLoggedIn = '<?= isLoggedIn() ?>',
            enablePusher = '<?= getStoreSettings('
        allow_pusher ') ?>';

        if (userLoggedIn && enablePusher) {
            var userUid = '<?= getUserUID() ?>',
                pusherAppKey = '<?= getStoreSettings('
            pusher_app_key ') ?>',
                __pusherAppOptions = {
                    cluster: '<?= getStoreSettings('
                    pusher_app_cluster_key ') ?>',
                    forceTLS: true,
                };

        }
    </script>
    <!-- Include Audio Video Call Component -->
    @include('messenger.audio-video')
    <!-- /Include Audio Video Call Component -->
    <script>
        //check user loggedIn or not
        if (userLoggedIn && enablePusher) {
            //if messenger dialog is open then hide new message dot
            $("#messengerDialog").on('click', function () {
                var messengerDialogVisibility = $("#messengerDialog").is(':visible');
                if (messengerDialogVisibility) {
                    $(".lw-new-message-badge").hide();
                }
            });

            //subscribe pusher notification
            subscribeNotification('event.user.notification', pusherAppKey, userUid, function (responseData) {
                //get notification list
                var requestData = responseData.getNotificationList,
                    getNotificationList = requestData.notificationData,
                    getNotificationCount = requestData.notificationCount;
                //update notification count
                __DataRequest.updateModels({
                    'totalNotificationCount': getNotificationCount, //total notification count
                });
                //check is not empty
                if (!_.isEmpty(getNotificationList)) {
                    var template = _.template($("#lwNotificationListTemplate").html());
                    $("#lwNotificationContent").html(template({
                        'notificationList': getNotificationList,
                    }));
                }
                //check is not empty
                if (responseData) {
                    switch (responseData.type) {
                        case 'user-likes':
                            if (responseData.showNotification != 0) {
                                showSuccessMessage(responseData.message);
                            }
                            break;
                        case 'user-gift':
                            if (responseData.showNotification != 0) {
                                showSuccessMessage(responseData.message);
                            }
                            break;
                        case 'profile-visitor':
                            if (responseData.showNotification != 0) {
                                showSuccessMessage(responseData.message);
                            }
                            break;
                        case 'user-login':
                            if (responseData.showNotification != 0) {
                                showSuccessMessage(responseData.message);
                            }
                            break;
                        default:
                            showSuccessMessage(responseData.message);
                            break;
                    }
                }
            });

            subscribeNotification('event.user.chat.messages', pusherAppKey, userUid, function (responseData) {
                var messengerDialogVisibility = $("#messengerDialog").is(':visible');
                //if messenger dialog is not open then show notification dot
                if (!messengerDialogVisibility) {
                    $(".lw-new-message-badge").show();
                }
                // Message chat
                if (responseData.requestFor == 'MESSAGE_CHAT') {
                    if (currentSelectedUserUid == responseData.toUserUid) {
                        __Messenger.appendReceivedMessage(responseData.type, responseData.message, responseData
                            .createdOn);
                    }
                    // Set user message count
                    if (responseData.userId != currentSelectedUserId) {
                        var incomingMsgEl = $('.lw-incoming-message-count-' + responseData.userId),
                            messageCount = 1;
                        if (!_.isEmpty(incomingMsgEl.text())) {
                            messageCount = parseInt(incomingMsgEl.text()) + 1;
                        }
                        incomingMsgEl.text(messageCount);
                        $('.lw-messenger-contact-list .list-group.list-group-flush').prepend($(
                            'a.lw-user-chat-list#' + responseData.userId));
                        $('a.lw-user-chat-list#' + responseData.userId + ' .lw-contact-status').removeClass(
                            'lw-away lw-offline').addClass('lw-online');
                    }

                    // Show notification of incoming messages
                    if (!messengerDialogVisibility && responseData.showNotification) {
                        showSuccessMessage(responseData.notificationMessage);
                    }
                }

                // Message request
                if (responseData.requestFor == 'MESSAGE_REQUEST') {
                    if (responseData.userId == currentSelectedUserId) {
                        handleMessageActionContainer(responseData.messageRequestStatus, false);
                        if (!_.isEmpty(responseData.message)) {
                            __Messenger.appendReceivedMessage(responseData.type, responseData.message,
                                responseData.createdOn);
                        }
                    } else {
                        // Show notification of incoming messages
                        if (!messengerDialogVisibility && responseData.showNotification) {
                            showSuccessMessage(responseData.notificationMessage);
                        }
                    }
                }

            });
        };

        //for cookie terms 
        function showCookiePolicyDialog() {
            if (__Cookie.get('cookie_policy_terms_accepted') != '1') {
                $('#lwCookiePolicyContainer').show();
            } else {
                $('#lwCookiePolicyContainer').hide();
            }
        };

        showCookiePolicyDialog();

        $("#lwCookiePolicyButton").on('click', function () {
            __Cookie.set('cookie_policy_terms_accepted', '1', 1000);
            showCookiePolicyDialog();
        });

        // Get messenger chat data
        function getChatMessenger(url, isAllChatMessenger) {
            var $allMessageChatButtonEl = $('#lwAllMessageChatButton'),
                $lwMessageChatButtonEl = $('#lwMessageChatButton');
            // check if request for all messenger 
            if (isAllChatMessenger) {
                var isAllMessengerChatLoaded = $allMessageChatButtonEl.data('chat-loaded');
                if (!isAllMessengerChatLoaded) {
                    $allMessageChatButtonEl.attr('data-chat-loaded', true);
                    $lwMessageChatButtonEl.attr('data-chat-loaded', false);
                    fetchChatMessages(url);
                }
            } else {
                var isMessengerLoaded = $lwMessageChatButtonEl.data('chat-loaded');
                if (!isMessengerLoaded) {
                    $lwMessageChatButtonEl.attr('data-chat-loaded', true);
                    $allMessageChatButtonEl.attr('data-chat-loaded', false);
                    fetchChatMessages(url);
                }
            }
        };

        // Fetch messages from server
        function fetchChatMessages(url) {
            $('#lwChatDialogLoader').show();
            $('#lwMessengerContent').hide();
            __DataRequest.get(url, {}, function (responseData) {
                $('#lwChatDialogLoader').hide();
                $('#lwMessengerContent').show();
            });
        };

        $.extend($.fn.dataTable.defaults, {
            "language": {
                "decimal": "",
                "emptyTable": '<?= __tr("No data available in table") ?>',
                "info": '<?= __tr("Showing _START_ to _END_ of _TOTAL_ entries") ?>',
                "infoEmpty": "<?= __tr('Showing 0 to 0 of 0 entries') ?>",
                "infoFiltered": "<?= __tr('(filtered from _MAX_ total entries)') ?>",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "<?= __tr('Show _MENU_ entries') ?>",
                "loadingRecords": "<?= __tr('Loading...') ?>",
                "processing": '<?= __tr("Processing...") ?>',
                "search": "<?= __tr('Search:') ?>",
                "zeroRecords": "<?= __tr('No matching records found') ?>",
                "paginate": {
                    "first": "<?= __tr('First') ?>",
                    "last": "<?= __tr('Last') ?>",
                    "next": "<?= __tr('Next') ?>",
                    "previous": "<?= __tr('Previous') ?>"
                },
                "aria": {
                    "sortAscending": "<?= __tr(': activate to sort column ascending') ?>",
                    "sortDescending": "<?= __tr(': activate to sort column descending') ?>"
                }
            }
        });
    </script>
    @stack('appScripts')

</body>

</html>
</body>
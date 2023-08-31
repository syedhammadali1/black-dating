<!DOCTYPE html>
<html>

<head>
    <title>Join Now | Black ALT Dating</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="{{asset('web/css/new-style.css')}}">


 {{-- Link for modal --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- include header -->

    <!-- /include header -->

    <style>
        .col-md-12.error-payment.form-group {
            margin-top: -123px;
        }

        .fram-section img {
        position: absolute;
        right: 0;
        top: -4px;
        height: 403px !important;
        width: 100%;
        height: 425px !important;
}

.col-11.col-sm-9.col-md-7.col-lg-6.text-center.p-0.mt-3.mb-2 {
    top: 125px;
}
    </style>

</head>

<body>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true" style="display: block;background-image: linear-gradient(120deg, #FF4081, #81D4FA);">
        <!-- MultiStep Form -->
        <div class="container-fluid" id="grad1">
            <div class="row justify-content-center mt-0">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        <div class="fram-section">
                            <img src="{{asset('web/images/frame-1-min.png')}}" class="img-fluid">
                        </div>
                        <h2><strong>Questionary Form</strong></h2>
                        <div class="row">
                            <div class="col-md-12 mx-0">
                                <form id="msform" method="POST" action="{{route('user.form.submit')}}">
                                    @csrf

                           
                                    <fieldset>
                                        <div class="card">
                                            <h2 class="fs-title">Are you in artistic person ?</h2>
                                            <div class="radio-group">
                                                <div class='radio' type="radio" data-value="Yes"><img
                                                        src="https://media.istockphoto.com/photos/stylized-yes-exclamation-underlined-in-green-picture-id146741102?k=20&m=146741102&s=612x612&w=0&h=LhRvbBm42w75UbTrXAekV3tK_FYZznuznrDeWZodJV0="
                                                        width="200px" height="100px"></div>
                                                <div class='radio' data-value="No"><img
                                                        src="https://media.istockphoto.com/photos/red-pencil-underlining-the-word-no-on-paper-picture-id146741103?k=20&m=146741103&s=612x612&w=0&h=qkip8vBAfZxAjJgWJMHY3p8mwMc-r3Z_2bicNvHLA2Q="
                                                        width="200px" height="100px"></div>
                                                <br>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>


                                    <fieldset>
                                        <div class="card">
                                            <h2 class="fs-title">Is it important that your partner is accepted by your family & friends Are you a passionate person ?</h2>
                                            <div class="radio-group">
                                                <div class='radio' type="radio" data-value="Yes"><img
                                                        src="https://media.istockphoto.com/photos/stylized-yes-exclamation-underlined-in-green-picture-id146741102?k=20&m=146741102&s=612x612&w=0&h=LhRvbBm42w75UbTrXAekV3tK_FYZznuznrDeWZodJV0="
                                                        width="200px" height="100px"></div>
                                                <div class='radio' data-value="No"><img
                                                        src="https://media.istockphoto.com/photos/red-pencil-underlining-the-word-no-on-paper-picture-id146741103?k=20&m=146741103&s=612x612&w=0&h=qkip8vBAfZxAjJgWJMHY3p8mwMc-r3Z_2bicNvHLA2Q="
                                                        width="200px" height="100px"></div>
                                                <br>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>



                                    <fieldset>
                                        <div class="card">
                                            <h2 class="fs-title">Is personal space important to you in a relationship ? </h2>
                                            <div class="radio-group">
                                                <div class='radio' type="radio" data-value="Yes"><img
                                                        src="https://media.istockphoto.com/photos/stylized-yes-exclamation-underlined-in-green-picture-id146741102?k=20&m=146741102&s=612x612&w=0&h=LhRvbBm42w75UbTrXAekV3tK_FYZznuznrDeWZodJV0="
                                                        width="200px" height="100px"></div>
                                                <div class='radio' data-value="No"><img
                                                        src="https://media.istockphoto.com/photos/red-pencil-underlining-the-word-no-on-paper-picture-id146741103?k=20&m=146741103&s=612x612&w=0&h=qkip8vBAfZxAjJgWJMHY3p8mwMc-r3Z_2bicNvHLA2Q="
                                                        width="200px" height="100px"></div>
                                                <br>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>



                                    <fieldset>
                                        <div class="card">
                                            <h2 class="fs-title">Do you find it difficult to meet people of color that are alternative ? </h2>
                                            <div class="radio-group">
                                                <div class='radio' type="radio" data-value="Yes"><img
                                                        src="https://media.istockphoto.com/photos/stylized-yes-exclamation-underlined-in-green-picture-id146741102?k=20&m=146741102&s=612x612&w=0&h=LhRvbBm42w75UbTrXAekV3tK_FYZznuznrDeWZodJV0="
                                                        width="200px" height="100px"></div>
                                                <div class='radio' data-value="No"><img
                                                        src="https://media.istockphoto.com/photos/red-pencil-underlining-the-word-no-on-paper-picture-id146741103?k=20&m=146741103&s=612x612&w=0&h=qkip8vBAfZxAjJgWJMHY3p8mwMc-r3Z_2bicNvHLA2Q="
                                                        width="200px" height="100px"></div>
                                                <br>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>



                                    <fieldset>
                                        <div class="card">
                                            <h2 class="fs-title">Are your parents still together ? </h2>
                                            <div class="radio-group">
                                                <div class='radio' type="radio" data-value="Yes"><img
                                                        src="https://media.istockphoto.com/photos/stylized-yes-exclamation-underlined-in-green-picture-id146741102?k=20&m=146741102&s=612x612&w=0&h=LhRvbBm42w75UbTrXAekV3tK_FYZznuznrDeWZodJV0="
                                                        width="200px" height="100px"></div>
                                                <div class='radio' data-value="No"><img
                                                        src="https://media.istockphoto.com/photos/red-pencil-underlining-the-word-no-on-paper-picture-id146741103?k=20&m=146741103&s=612x612&w=0&h=qkip8vBAfZxAjJgWJMHY3p8mwMc-r3Z_2bicNvHLA2Q="
                                                        width="200px" height="100px"></div>
                                                <br>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>



                                    <fieldset>
                                        <div class="card">
                                            <h2 class="fs-title">Do people find you to be quirky ? </h2>
                                            <div class="radio-group">
                                                <div class='radio' type="radio" data-value="Yes"><img
                                                        src="https://media.istockphoto.com/photos/stylized-yes-exclamation-underlined-in-green-picture-id146741102?k=20&m=146741102&s=612x612&w=0&h=LhRvbBm42w75UbTrXAekV3tK_FYZznuznrDeWZodJV0="
                                                        width="200px" height="100px"></div>
                                                <div class='radio' data-value="No"><img
                                                        src="https://media.istockphoto.com/photos/red-pencil-underlining-the-word-no-on-paper-picture-id146741103?k=20&m=146741103&s=612x612&w=0&h=qkip8vBAfZxAjJgWJMHY3p8mwMc-r3Z_2bicNvHLA2Q="
                                                        width="200px" height="100px"></div>
                                                <br>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>


                                    <fieldset>
                                        <div class="card">
                                            <h2 class="fs-title">Do you attend a lot of punk/metal/emo concerts ?</h2>
                                            <div class="radio-group">
                                                <div class='radio' type="radio" data-value="Yes"><img
                                                        src="https://media.istockphoto.com/photos/stylized-yes-exclamation-underlined-in-green-picture-id146741102?k=20&m=146741102&s=612x612&w=0&h=LhRvbBm42w75UbTrXAekV3tK_FYZznuznrDeWZodJV0="
                                                        width="200px" height="100px"></div>
                                                <div class='radio' data-value="No"><img
                                                        src="https://media.istockphoto.com/photos/red-pencil-underlining-the-word-no-on-paper-picture-id146741103?k=20&m=146741103&s=612x612&w=0&h=qkip8vBAfZxAjJgWJMHY3p8mwMc-r3Z_2bicNvHLA2Q="
                                                        width="200px" height="100px"></div>
                                                <br>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>

                                    <fieldset>
                                        <div class="card">
                                            <h2 class="fs-title">Would you consider yourself a homebody ?</h2>
                                            <div class="radio-group">
                                                <div class='radio' type="radio" data-value="Yes"><img
                                                        src="https://media.istockphoto.com/photos/stylized-yes-exclamation-underlined-in-green-picture-id146741102?k=20&m=146741102&s=612x612&w=0&h=LhRvbBm42w75UbTrXAekV3tK_FYZznuznrDeWZodJV0="
                                                        width="200px" height="100px"></div>
                                                <div class='radio' data-value="No"><img
                                                        src="https://media.istockphoto.com/photos/red-pencil-underlining-the-word-no-on-paper-picture-id146741103?k=20&m=146741103&s=612x612&w=0&h=qkip8vBAfZxAjJgWJMHY3p8mwMc-r3Z_2bicNvHLA2Q="
                                                        width="200px" height="100px"></div>
                                                <br>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>



                                    <fieldset>
                                        <div class="card">
                                            <h2 class="fs-title">Are you comfortable with public display of affection ? </h2>
                                            <div class="radio-group">
                                                <div class='radio' type="radio" data-value="Yes"><img
                                                        src="https://media.istockphoto.com/photos/stylized-yes-exclamation-underlined-in-green-picture-id146741102?k=20&m=146741102&s=612x612&w=0&h=LhRvbBm42w75UbTrXAekV3tK_FYZznuznrDeWZodJV0="
                                                        width="200px" height="100px"></div>
                                                <div class='radio' data-value="No"><img
                                                        src="https://media.istockphoto.com/photos/red-pencil-underlining-the-word-no-on-paper-picture-id146741103?k=20&m=146741103&s=612x612&w=0&h=qkip8vBAfZxAjJgWJMHY3p8mwMc-r3Z_2bicNvHLA2Q="
                                                        width="200px" height="100px"></div>
                                                <br>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>


                                    <fieldset>
                                        <div class="card">
                                            <h2 class="fs-title">Do you consider yourself to be an outsider ?</h2>
                                            <div class="radio-group">
                                                <div class='radio' type="radio" data-value="Yes"><img
                                                        src="https://media.istockphoto.com/photos/stylized-yes-exclamation-underlined-in-green-picture-id146741102?k=20&m=146741102&s=612x612&w=0&h=LhRvbBm42w75UbTrXAekV3tK_FYZznuznrDeWZodJV0="
                                                        width="200px" height="100px"></div>
                                                <div class='radio' data-value="No"><img
                                                        src="https://media.istockphoto.com/photos/red-pencil-underlining-the-word-no-on-paper-picture-id146741103?k=20&m=146741103&s=612x612&w=0&h=qkip8vBAfZxAjJgWJMHY3p8mwMc-r3Z_2bicNvHLA2Q="
                                                        width="200px" height="100px"></div>
                                                <br>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>


                                    <fieldset>
                                        <div class="card">
                                            <h2 class="fs-title">Is it important that you get married soon ?</h2>
                                            <div class="radio-group">
                                                <div class='radio' type="radio" data-value="Yes"><img
                                                        src="https://media.istockphoto.com/photos/stylized-yes-exclamation-underlined-in-green-picture-id146741102?k=20&m=146741102&s=612x612&w=0&h=LhRvbBm42w75UbTrXAekV3tK_FYZznuznrDeWZodJV0="
                                                        width="200px" height="100px"></div>
                                                <div class='radio' data-value="No"><img
                                                        src="https://media.istockphoto.com/photos/red-pencil-underlining-the-word-no-on-paper-picture-id146741103?k=20&m=146741103&s=612x612&w=0&h=qkip8vBAfZxAjJgWJMHY3p8mwMc-r3Z_2bicNvHLA2Q="
                                                        width="200px" height="100px"></div>
                                                <br>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>



                                    <fieldset>
                                        <div class="card">
                                            <h2 class="fs-title">Do you find it challenging to find others that are comfortable with themselves ? </h2>
                                            <div class="radio-group">
                                                <div class='radio' type="radio" data-value="Yes"><img
                                                        src="https://media.istockphoto.com/photos/stylized-yes-exclamation-underlined-in-green-picture-id146741102?k=20&m=146741102&s=612x612&w=0&h=LhRvbBm42w75UbTrXAekV3tK_FYZznuznrDeWZodJV0="
                                                        width="200px" height="100px"></div>
                                                <div class='radio' data-value="No"><img
                                                        src="https://media.istockphoto.com/photos/red-pencil-underlining-the-word-no-on-paper-picture-id146741103?k=20&m=146741103&s=612x612&w=0&h=qkip8vBAfZxAjJgWJMHY3p8mwMc-r3Z_2bicNvHLA2Q="
                                                        width="200px" height="100px"></div>
                                                <br>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>


                                    <fieldset>
                                        <div class="card">
                                            <h2 class="fs-title">Do you want to have children in the near future ?</h2>
                                            <div class="radio-group">
                                                <div class='radio' type="radio" data-value="Yes"><img
                                                        src="https://media.istockphoto.com/photos/stylized-yes-exclamation-underlined-in-green-picture-id146741102?k=20&m=146741102&s=612x612&w=0&h=LhRvbBm42w75UbTrXAekV3tK_FYZznuznrDeWZodJV0="
                                                        width="200px" height="100px"></div>
                                                <div class='radio' data-value="No"><img
                                                        src="https://media.istockphoto.com/photos/red-pencil-underlining-the-word-no-on-paper-picture-id146741103?k=20&m=146741103&s=612x612&w=0&h=qkip8vBAfZxAjJgWJMHY3p8mwMc-r3Z_2bicNvHLA2Q="
                                                        width="200px" height="100px"></div>
                                                <br>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>


                                    <fieldset>
                                        <div class="card">
                                            <h2 class="fs-title">You don't want to have children ? </h2>
                                            <div class="radio-group">
                                                <div class='radio' type="radio" data-value="Yes"><img
                                                        src="https://media.istockphoto.com/photos/stylized-yes-exclamation-underlined-in-green-picture-id146741102?k=20&m=146741102&s=612x612&w=0&h=LhRvbBm42w75UbTrXAekV3tK_FYZznuznrDeWZodJV0="
                                                        width="200px" height="100px"></div>
                                                <div class='radio' data-value="No"><img
                                                        src="https://media.istockphoto.com/photos/red-pencil-underlining-the-word-no-on-paper-picture-id146741103?k=20&m=146741103&s=612x612&w=0&h=qkip8vBAfZxAjJgWJMHY3p8mwMc-r3Z_2bicNvHLA2Q="
                                                        width="200px" height="100px"></div>
                                                <br>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>


                                    <fieldset>
                                        <div class="card">
                                            <h2 class="fs-title">Are you looking for love ? </h2>
                                            <div class="radio-group">
                                                <div class='radio' type="radio" data-value="Yes"><img
                                                        src="https://media.istockphoto.com/photos/stylized-yes-exclamation-underlined-in-green-picture-id146741102?k=20&m=146741102&s=612x612&w=0&h=LhRvbBm42w75UbTrXAekV3tK_FYZznuznrDeWZodJV0="
                                                        width="200px" height="100px"></div>
                                                <div class='radio' data-value="No"><img
                                                        src="https://media.istockphoto.com/photos/red-pencil-underlining-the-word-no-on-paper-picture-id146741103?k=20&m=146741103&s=612x612&w=0&h=qkip8vBAfZxAjJgWJMHY3p8mwMc-r3Z_2bicNvHLA2Q="
                                                        width="200px" height="100px"></div>
                                                <br>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>


                                    <fieldset>
                                        <div class="card">
                                            <h2 class="fs-title">Do you mind a long distance relationship ?</h2>
                                            <div class="radio-group">
                                                <div class='radio' type="radio" data-value="Yes"><img
                                                        src="https://media.istockphoto.com/photos/stylized-yes-exclamation-underlined-in-green-picture-id146741102?k=20&m=146741102&s=612x612&w=0&h=LhRvbBm42w75UbTrXAekV3tK_FYZznuznrDeWZodJV0="
                                                        width="200px" height="100px"></div>
                                                <div class='radio' data-value="No"><img
                                                        src="https://media.istockphoto.com/photos/red-pencil-underlining-the-word-no-on-paper-picture-id146741103?k=20&m=146741103&s=612x612&w=0&h=qkip8vBAfZxAjJgWJMHY3p8mwMc-r3Z_2bicNvHLA2Q="
                                                        width="200px" height="100px"></div>
                                                <br>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>


                                    <fieldset>
                                        <div class="card">
                                            <h2 class="fs-title">Do you like to travel ? </h2>
                                            <div class="radio-group">
                                                <div class='radio' type="radio" data-value="Yes"><img
                                                        src="https://media.istockphoto.com/photos/stylized-yes-exclamation-underlined-in-green-picture-id146741102?k=20&m=146741102&s=612x612&w=0&h=LhRvbBm42w75UbTrXAekV3tK_FYZznuznrDeWZodJV0="
                                                        width="200px" height="100px"></div>
                                                <div class='radio' data-value="No"><img
                                                        src="https://media.istockphoto.com/photos/red-pencil-underlining-the-word-no-on-paper-picture-id146741103?k=20&m=146741103&s=612x612&w=0&h=qkip8vBAfZxAjJgWJMHY3p8mwMc-r3Z_2bicNvHLA2Q="
                                                        width="200px" height="100px"></div>
                                                <br>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>


                                    <fieldset>
                                        <div class="card">
                                            <h2 class="fs-title">Do you attend cosplay trade shows or comic con ?</h2>
                                            <div class="radio-group">
                                                <div class='radio' type="radio" data-value="Yes"><img
                                                        src="https://media.istockphoto.com/photos/stylized-yes-exclamation-underlined-in-green-picture-id146741102?k=20&m=146741102&s=612x612&w=0&h=LhRvbBm42w75UbTrXAekV3tK_FYZznuznrDeWZodJV0="
                                                        width="200px" height="100px"></div>
                                                <div class='radio' data-value="No"><img
                                                        src="https://media.istockphoto.com/photos/red-pencil-underlining-the-word-no-on-paper-picture-id146741103?k=20&m=146741103&s=612x612&w=0&h=qkip8vBAfZxAjJgWJMHY3p8mwMc-r3Z_2bicNvHLA2Q="
                                                        width="200px" height="100px"></div>
                                                <br>
                                            </div>
                                        </div>

                                       
                                        <input type="submit" name="next" class="next action-button" value="Submit" />

                                      
                                    </fieldset>


                                    <fieldset>
                                        <div class="form-card">
                                            <h2 class="fs-title text-center">Success !</h2>
                                            <br><br>
                                            <div class="row justify-content-center">
                                                <div class="col-3">
                                                    <img src="https://img.freepik.com/premium-vector/thank-you-hand-lettering-typography-design-inspiration-thank-you-card-beautiful-greeting-card_166005-993.jpg?w=2000" class="fit-image">
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="row justify-content-center">
                                                <div class="col-7 text-center">
                                                    <h5>You Have Successfully Completed</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>


                        
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





    {{--  Script Link for modal --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function () {

            $('#exampleModalScrollable').modal('show');
            // $("#exampleModalScrollable").show();

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $(".next").click(function () {

            
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $(".previous").click(function () {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $('.radio-group .radio').click(function () {
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });

            $(".submit").click(function () {
                return false;
            })

        });
    </script>


</body>
<!-- include footer -->
@include('includes.footer')
<!-- /include footer -->

</html>
@extends("inner-page-master")
@section('page-title', __tr('Safety tips'))
@section('head-title', __tr('Safety tips'))
@section('keywordName', __tr('Safety tips'))
@section('keyword', __tr('Safety tips'))
@section('description', __tr('Safety tips'))
@section('keywordDescription', __tr('Safety tips'))
@section('page-image', getStoreSettings('logo_image_url'))
@section('twitter-card-image', getStoreSettings('logo_image_url'))
@section('page-url', url()->current())

<!-- Page Heading -->
@section('content')

    <div id="content" class="inner-pages-main">

        <div class="public-page help-page" itemscope="" itemtype="https://schema.org/FAQPage">
            <div class="public-title">
                <div class="container">
                    <h1>Legal information</h1>
                </div>
            </div>
            <div class="public-content container pb-sm-5">
                <div class="card">
                    <div class="card-body">


                        <nav class="nav nav-tabs nav-fill mb-4">
                            <a class="nav-item nav-link " href="{{route('page.footerPage','terms')}}">Terms of use</a>
                            <a class="nav-item nav-link " href="{{route('page.footerPage','privacy-policy')}}">Privacy policy</a>
                            <a class="nav-item nav-link " href="{{route('page.footerPage','cookie-policy')}}">Cookie policy</a>
                            <a class="nav-item nav-link " href="{{route('page.footerPage','community-guidelines')}}">Community guidelines</a>
                            <a class="nav-item nav-link active" href="{{route('page.footerPage','safety-tips')}}">Safety tips</a>
                        </nav>

                        <div class="legal-content">

                            <div class="safety-page">

                                <p class="lead">
                                    At <a href="https://mytransgenderdate.com">My Transgender Date</a> we care very much about our community and make your safety a top priority. While we take many steps to protect you, ultimately your online and offline safety remains your responsibility. Use these tips and common sense practices to have a safe and enjoyable dating experience.
                                </p>


                                <section id="creating-profile" class="media my-5">
                                    <img class="safety-image d-block mr-md-3" src="https://d24rnye3pepb27.cloudfront.net/assets/img/safety/profile.png" alt="Creating your profile" width="256" height="256">
                                    <div class="media-body">
                                        <h2>Creating your profile</h2>
                                        <h3>Be anonymous</h3>
                                        <p>Don’t include contact details (email address, phone number, instant messenger details, social media username...) or any other identifiable information (full name, place of work...) in your profile or in your initial communications.</p>
                                        <h3>Protect your password</h3>
                                        <p>Don’t share your password with anyone. Be cautious when accessing your account from a public or shared computer so that others can’t see or record your password or personal information, and make sure to log out after use.</p>
                                    </div>
                                </section>


                                <section id="interacting" class="media my-5">
                                    <img class="safety-image order-md-1 ml-md-3" src="https://d24rnye3pepb27.cloudfront.net/assets/img/safety/chat.png" alt="Interacting with other members" width="256" height="256">
                                    <div class="media-body">
                                        <h2>Interacting with other members</h2>
                                        <h3>Communicate through My Transgender Date</h3>
                                        <p>Get to know someone and evaluate the relationship before contacting him/her outside of My Transgender Date, through email, phone or social media.</p>
                                        <h3>Take your time</h3>
                                        <p>Sometimes you get excited about someone, and your instincts get confused by your emotions. Take your time to know someone before disclosing your full identity or contact details.</p>
                                        <h3>Never send money</h3>
                                        <p>There is no reason for anyone to ask you for money. If someone you meet on My Transgender Date asks you for money, stop all communication and report him/her immediately.</p>
                                    </div>
                                </section>


                                <section id="meeting" class="media my-5">
                                    <img class="safety-image mr-md-3" src="https://d24rnye3pepb27.cloudfront.net/assets/img/safety/coffee.png" alt="Meeting in person" width="256" height="256">
                                    <div class="media-body">
                                        <h2>Meeting in person</h2>
                                        <h3>Meet in a public place</h3>
                                        <p>Make sure to meet in a public place during daylight hours. Don’t agree to meet in an isolated place, at their place or your own home.</p>
                                        <h3>Arrange your own transportation</h3>
                                        <p>Don’t allow your date to pick you up. Use your own transportation to get to and from the meeting place.</p>
                                        <h3>Stay connected</h3>
                                        <p>Tell friends where and when you are going. Make sure that your phone is fully charged and reachable. Let your friends know how the meeting is going and also when you get home safely.</p>
                                        <h3>Watch your drink</h3>
                                        <p>Watch your alcohol intake and don’t leave your drink unattended.</p>
                                    </div>
                                </section>


                                <section id="protecting" class="media mt-5">
                                    <img class="safety-image order-md-1 mr-md-3" src="https://d24rnye3pepb27.cloudfront.net/assets/img/safety/scammers.png" alt="Protecting yourself from scammers" width="256" height="256">
                                    <div class="media-body">
                                        <h2>Protecting yourself from scammers</h2>
                                        <p>Scammers are people who use dating sites disingenuously to trick or scam other members, usually by asking for money. If you suspect that someone you’re talking to may be a scammer, stop all communication and report him/her immediately.</p>
                                        <h3>Watch out for red flags</h3>
                                        <p>There are certain red flags to watch for that may indicate you’re dealing with a scammer. Be aware of anyone who:</p>
                                        <ul>
                                            <li>asks you for money</li>
                                            <li>asks to communicate outside of the site right away (through phone, email, social media)</li>
                                            <li>disappears mysteriously from the site, then reappears under a different profile</li>
                                            <li>claims to love you right away, or quickly pushes for a serious relationship without really knowing you</li>
                                            <li>has a well written description but makes lots of grammar / spelling mistakes via messages</li>
                                            <li>claims to be from your country but currently traveling, living or working abroad</li>
                                            <li>refuses to meet you in person or talk on the phone</li>
                                            <li>avoids answering questions about himself / herself</li>
                                            <li>claims to be recently widowed</li>
                                        </ul>
                                        <p>Common reasons used by scammers to ask for money are:</p>
                                        <ul>
                                            <li>travel costs to come visit you (airfare, visa fee)</li>
                                            <li>internet bill / phone credit to keep communicating with you</li>
                                            <li>an emergency (medical issue, being stuck abroad)</li>
                                            <li>a donation for a charity</li>
                                            <li>a lucrative business idea</li>
                                        </ul>
                                    </div>
                                </section>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


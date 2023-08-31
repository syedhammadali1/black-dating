@extends("inner-page-master")
@section('page-title', __tr('Community guidelines'))
@section('head-title', __tr('Community guidelines'))
@section('keywordName', __tr('Community guidelines'))
@section('keyword', __tr('Community guidelines'))
@section('description', __tr('Community guidelines'))
@section('keywordDescription', __tr('Community guidelines'))
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
                            <a class="nav-item nav-link active" href="{{route('page.footerPage','community-guidelines')}}">Community guidelines</a>
                            <a class="nav-item nav-link " href="{{route('page.footerPage','safety-tips')}}">Safety tips</a>
                        </nav>

                        <div class="legal-content">
                            <div class="guidelines-page">

                                <p class="lead">
                                    We designed <a href="https://mytransgenderdate.com">My Transgender Date</a> to help people find love. Be honest and respectful at all times. Do not send messages that people don’t want to receive. Do not solicit other members for sex. Relax and have fun.
                                </p>

                                <div class="dos">
                                    <ul>
                                        <li>
                                            <h2>Do respect other members</h2>
                                            <p>We’re a very diverse community. This means you should respect other people’s beliefs, interests and decisions.</p>
                                        </li>
                                        <li>
                                            <h2>Do send original messages</h2>
                                            <p>Rather than copying and pasting the same message to everyone you like, read their profile, see what they’re into and send an appropriate message. “Hey, I see you like surfing” is always better than “Hey sexy!”</p>
                                        </li>
                                        <li>
                                            <h2>Do report any concerns to the moderators</h2>
                                            <p>We are always happy to help and make your experience on My Transgender Date awesome. If you encounter someone who violates our community guidelines, do not reply back with insults. Instead, block the person and report him/her.</p>
                                        </li>
                                    </ul>
                                </div>

                                <hr>

                                <div class="donts">
                                    <ul>
                                        <li>
                                            <h2>Don’t verbally abuse other members</h2>
                                            <p>You should behave the same way on My Transgender Date as you would in real life. Be nice to people you meet online, like you would be face to face.</p>
                                        </li>
                                        <li>
                                            <h2>Don’t pretend to be someone else</h2>
                                            <p>We hope you’ll meet your soulmate through My Transgender Date, so it’s in your best interest to show the real you. Don’t post fake photos, don’t lie about your profile info.</p>
                                        </li>
                                        <li>
                                            <h2>Don’t post your contact details in public</h2>
                                            <p>Don’t include contact details (email address, phone number, instant messenger details, social media username...) or any other identifiable information (full name, place of work...) in your profile or in your initial communications.</p>
                                        </li>
                                        <li>
                                            <h2>Don’t be sexually explicit</h2>
                                            <p>Don’t post sexually explicit photos. Photos of genitals will get you banned right away. Photos of nudity will be deleted. Do not start a sexual conversation if it is not consensual.</p>
                                        </li>
                                        <li>
                                            <h2>Don’t solicit other members for sex</h2>
                                            <p>There are places you can go to look for sex, but My Transgender Date isn’t one of them, so please don’t. What happens next when you meet someone from this site is none of our business, but you shouldn’t be here with this primary goal in mind, as there are better places for this.</p>
                                        </li>
                                        <li>
                                            <h2>Don’t spam other members</h2>
                                            <p>Don’t send unwanted or irrelevant messages. Don’t try to sell products, other sites, or yourself on My Transgender Date. You’ll be banned right away.</p>
                                        </li>
                                        <li>
                                            <h2>Don’t ask for money or gifts</h2>
                                            <p>Don’t ever ask other members for money or gifts. You will be automatically banned and blacklisted for life.</p>
                                        </li>
                                        <li>
                                            <h2>Don’t send money to other members</h2>
                                            <p>There is no reason for anyone to ask you for money. If someone you meet on My Transgender Date asks you for money, stop all communication and report him/her immediately.</p>
                                        </li>
                                        <li>
                                            <h2>Don’t respond harshly to rejection</h2>
                                            <p>Nobody likes rejection, but you shouldn’t lose your cool.</p>
                                        </li>
                                    </ul>
                                </div>

                                <div class="alert alert-danger mb-0">
                                    If you don’t follow these guidelines, you’ll receive a warning (unless it’s something we ban people for right away). If you ignore this warning, you risk getting permanently banned. These guidelines are designed to make My Transgender Date a friendly and safe place for all our members, so always conduct yourself civilly and respectfully, and let’s keep this site fun and enjoyable for all!
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


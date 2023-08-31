@extends("inner-page-master")
@section('page-title', __tr('Cookie policy'))
@section('head-title', __tr('Cookie policy'))
@section('keywordName', __tr('Cookie policy'))
@section('keyword', __tr('Cookie policy'))
@section('description', __tr('Cookie policy'))
@section('keywordDescription', __tr('Cookie policy'))
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
                            <a class="nav-item nav-link active" href="{{route('page.footerPage','cookie-policy')}}">Cookie policy</a>
                            <a class="nav-item nav-link " href="{{route('page.footerPage','community-guidelines')}}">Community guidelines</a>
                            <a class="nav-item nav-link " href="{{route('page.footerPage','safety-tips')}}">Safety tips</a>
                        </nav>

                        <div class="legal-content">
                            <p class="text-secondary">
                                Last revised on May 25, 2018
                            </p>



                            <h2>Introduction</h2>

                            <p>
                                MyTransgenderDate.com is committed to protecting your privacy. We aim to provide trustworthy, industry-leading products and services so that you can focus on building meaningful connections. Our approach to privacy is to provide you with clear information about our data practices. That's why we've tried to keep legal and technical jargon to a minimum.
                            </p>

                            <h2>What are cookies?</h2>

                            <p>
                                Cookies are small text files that are sent to or accessed from your web browser or your device's memory. A cookie typically contains the name of the domain (internet location) from which the cookie originated, the "lifetime" of the cookie (i.e., when it expires) and a randomly generated unique number or similar identifier. A cookie also may contain information about your device, such as user settings, browsing history and activities conducted while using our services.
                            </p>

                            <h2>What do we use cookies for?</h2>

                            <p>
                                Like most providers of online services, we use cookies to provide, secure and improve our services; including by remembering your preferences, recognizing you when you visit our website, and personalizing and tailoring ads to your interests. To accomplish these purposes, we also may link information from cookies with other personal information we hold about you.
                            </p>

                            <p>
                                When you visit our website, some or all of the following types of cookies may be set on your device.
                            </p>

                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Type of cookie</th>
                                    <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>
                                        Essential website cookies
                                    </th>
                                    <td>
                                        These cookies are strictly necessary to provide you with services available through our website and to use some of its features, such as:

                                        <ul>
                                            <li>maintain your session open (access to secure area)</li>
                                            <li>automatically log you in after your session has expired ("remember me")</li>
                                            <li>remember your language preference</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Analytics cookies
                                    </th>
                                    <td>
                                        These cookies help us understand how our website is being used, how effective marketing campaigns are, and help us customize and improve our websites for you.
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <h2>How can you control cookies?</h2>

                            <p>
                                There are several cookie management options available to you. Please note that changes you make to your cookie preferences may make browsing our website a less satisfying experience. In some cases, you may even find yourself unable to use all or part of our site.
                            </p>

                            <h3>Browser and devices controls</h3>

                            <p>
                                Some web browsers provide settings that allow you to control or reject cookies or to alert you when a cookie is placed on your computer.  The procedure for managing cookies is slightly different for each internet browser. You can check the specific steps in your particular browser help menu.
                            </p>

                            <p>
                                You also may be able to reset device identifiers by activating the appropriate setting on your mobile device. The procedure for managing device identifiers is slightly different for each device. You can check the specific steps in the help or settings menu of your particular device.
                            </p>

                            <h3>Google Analytics</h3>

                            <p>
                                We use Google Analytics, which is a Google service that uses cookies and other data collection technologies to collect information about your use of the website and services in order to report website trends.
                            </p>

                            <p>
                                You can opt out of Google Analytics by visiting <a href="https://www.google.com/settings/ads" target="_blank">www.google.com/settings/ads</a> or by downloading the Google Analytics opt-out browser add-on at <a href="https://tools.google.com/dlpage/gaoptout" target="_blank">tools.google.com/dlpage/gaoptout</a>.
                            </p>

                            <h2>How to contact us</h2>

                            <p class="mb-0">
                                If you have questions about this Cookie Policy, you can reach us by email via the contact form:
                                <a href="https://mytransgenderdate.com/contact">https://mytransgenderdate.com/contact</a>
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


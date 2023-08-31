@extends("inner-page-master")
@section('page-title', __tr('Support'))
@section('head-title', __tr('Support'))
@section('keywordName', __tr('Support'))
@section('keyword', __tr('Support'))
@section('description', __tr('Support'))
@section('keywordDescription', __tr('Support'))
@section('page-image', getStoreSettings('logo_image_url'))
@section('twitter-card-image', getStoreSettings('logo_image_url'))
@section('page-url', url()->current())

<!-- Page Heading -->
@section('content')

    <div id="content" class="inner-pages-main">

        <div class="public-page help-page" itemscope="" itemtype="https://schema.org/FAQPage">
            <div class="public-title">
                <div class="container">
                    <h1>Support</h1>
                </div>
            </div>
            <div class="public-content container pb-sm-5">
                <div class="card">
                    <div class="card-body">


                        <div class="legal-content">
                            <p class="text-secondary">
                                Last revised on January 15, 2022
                            </p>


                            <p>
                               Some text !!
                            </p>

                            <h2>General Information Heading</h2>

                            <p>
                                Some text !! Some text !!Some text !!Some text !!Some text !!Some text !!Some text !!
                            </p>

                            <ul>
                                <li>
                                   item 1
                                </li>

                                <li>
                                    item 2
                                </li>

                                <li>
                                    item 3
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


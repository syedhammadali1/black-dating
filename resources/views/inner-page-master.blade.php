<!-- include header -->
@include('includes.header')
<!-- /include header -->

<body id="page-top" class="main-body">
    <header>
        <style>
            .public-title {
                background: #26a9e0;
                padding-bottom: 4rem;
            }
            .public-content {
                margin-top: -4rem;
            }
            .public-title h1 {
                color: #fff;
                padding-top: 1.5rem;
            }
            .text-theme {
                color: #523687!important;
            }
            .help-page ul {
                color: #26a9e0;
                list-style: square;
            }
            .inner-pages-main{
                background-color: rgba(0,0,0,.04);
            }
            .inner-pages-main .card-header{
                background-color: rgba(0,0,0,.03) !important;
                border-bottom: 1px solid rgba(0,0,0,.125) !important;
                margin-bottom: 0;
                padding: 0.75rem 1.25rem;
            }
            .help-page h2 {
                color: #26a9e0;
                font-weight: 400;
                margin-top: 40px;
            }
            section.card.my-4{
                border: 1px solid rgba(0,0,0,.125);
            }
        </style>
        <div class="container-fluid plr">
          <div class="container">
            <div class="row">
              <div class="col-md-6 flzx">
                <div class="logo">
                    <a class="" href="<?= url('/home') ?>">
                    <div class="sidebar-brand-icon">
                        <img class="lw-logo-img" src="<?= getStoreSettings('small_logo_image_url') ?>" alt="<?= getStoreSettings('name') ?>">
                    </div>
                    <img class="lw-logo-img d-sm-none d-none d-md-block" src="<?= getStoreSettings('logo_image_url') ?>" alt="<?= getStoreSettings('name') ?>">
                    <img class="lw-logo-img d-sm-block d-md-none" src="<?= getStoreSettings('small_logo_image_url') ?>" alt="<?= getStoreSettings('name') ?>">
                    </a>
                    <ul class="menu">
                        <li class="<?= makeLinkActive('user.profile_view') ?>">
{{--                            <a class="" @if(isset(auth()->user()->username)) href="<?= route('user.photos_setting', ['username' => auth()->user()->username]) ?>" @endif >--}}
                            @if(getUserAuthInfo('authorized'))
                            <a class="" href="<?= route('user.profile_view', ['username' => getUserAuthInfo('profile.username')]) ?>">
                                <span><?= __tr('My Profile') ?></span>
                            </a>
                            @endif
                        </li>
                        <li class="<?= makeLinkActive('user.online') ?>">
                            <a class="" href="<?= route('user.online') ?>">
                                <span><?= __tr('Online') ?></span>
                                @if(getUserAuthInfo('authorized'))
                                <span class="badge badge-pill nav-stat nav-stat-bottom">{{getOnlineUsersCount()['totalCount']}}</span>
                                @endif
                            </a>
                        </li>
                        <li class="<?= makeLinkActive('user.read.find_matches') ?>">
                            <a class="" href="<?= route('user.read.find_matches', ['username' => getUserAuthInfo('profile.username')]) ?>">
                                <span><?= __tr('Search') ?></span>
                            </a>
                        </li>
                    </ul>
                </div>
              </div>
              <div class="col-md-6">
                <ul class="menu-icon">
                    <li class="only-icon d-none d-sm-none d-md-block">
                        <a class="" onclick="getChatMessenger('<?= route('user.read.all_conversation') ?>', true)" style="cursor: pointer" id="lwAllMessageChatButton" data-chat-loaded="false" data-toggle="modal" data-target="#messengerDialog">
                            <span class="badge badge-danger badge-counter lw-new-message-badge"></span>
                            <i class="fas fa-envelope"></i>
                        </a>
                    </li>
                    <li class="only-icon">
                        <a href="<?= route('user.profile_visitors_view') ?>">
                            <i class="fas fa-eye" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="only-icon">
                        <a href="<?= route('user.my_liked_view') ?>">
                            <i class="fas fa-heart"></i>
                        </a>
                    </li>
                    @if(getUserAuthInfo('authorized'))
                        <li class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="img-profile rounded-circle" width="32px" height="32px" src="<?= getUserAuthInfo('profile.profile_picture_url') ?>">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <h6 class="dropdown-header">
                                <?= getUserAuthInfo('profile.full_name') ?>
                            </h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" title="<?= __tr('My Profile') ?>" @if(isset(auth()->user()->username)) href="<?= route('user.photos_setting', ['username' => auth()->user()->username]) ?>" @endif>
{{--                            <a class="dropdown-item" title="<?= __tr('My Profile') ?>" href="<?= route('user.profile_view', ['username' => getUserAuthInfo('profile.username')]) ?>">--}}
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                <?= __tr('My Profile') ?>
                            </a>
                            <a class="dropdown-item" title="<?= __tr('My Settings') ?>" href="<?= route('user.read.setting', ['pageType' => 'notification']) ?>">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                <?= __tr('My Settings') ?>
                            </a>
                            <a class="dropdown-item" title="<?= __tr('Change Password') ?>" href="<?= route('user.change_password') ?>">
                                <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                                <?= __tr('Change Password') ?>
                            </a>
                            <a class="dropdown-item" title="<?= __tr('Change Email') ?>" href="<?= route('user.change_email') ?>">
                                <i class="fas fa-envelope fa-sm fa-fw mr-2 text-gray-400"></i>
                                <?= __tr('Change Email') ?>
                            </a>
                            @if(isAdmin())
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-primary" title="<?= __tr('Admin Panel') ?>" target="_blank" href="<?= route('manage.dashboard') ?>">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                <?= __tr('Admin Panel') ?>
                            </a>
                            @endif
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" title="<?= __tr('Logout') ?>" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                <?= __tr('Logout') ?>
                        </a>
                        </div>
                    </li>
                    @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
    </header>
     <!-- Page Wrapper -->
    <div id="wrapperr">
        <div class="roww" >
        <!-- Content Wrapper -->
        <div id="content-wrapperr" class="col-12 d-flex flex-column lw-page-bg p-0">
            <section class="search-section card search-basic visible-filters-open my-3 my-md-4" style="margin-top: 0px !important;">
            <div id="content">
                <!-- include top bar -->
{{--                @if(isLoggedIn())--}}
{{--                --}}{{-- @include('includes.public-top-bar') --}}
{{--                @endif--}}
                <!-- /include top bar -->

                <!-- Begin Page Content -->
                <div class="" style="padding: 0;">
                    <!-- header advertisement -->
                    @if(!getFeatureSettings('no_adds') and getStoreSettings('header_advertisement')['status'] == 'true')
                    <div class="lw-ad-block-h90">
                        <?= getStoreSettings('header_advertisement')['content'] ?>
                    </div>
                    @endif

                    {{--for content--}}
                    @yield("content")
                    {{--for content--}}

                    <!-- /header advertisement -->
                    @if(isset($pageRequested))
                    <?php echo $pageRequested; ?>
                    @endif
                    <!-- footer advertisement -->
                    @if(!getFeatureSettings('no_adds') and getStoreSettings('footer_advertisement')['status'] == 'true')
                    <div class="lw-ad-block-h90">
                        <?= getStoreSettings('footer_advertisement')['content'] ?>
                    </div>
                    @endif
                    <!-- /footer advertisement -->
                </div>
                <!-- /.container-fluid -->
            </div>
            </section>
        </div>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <div class="lw-cookie-policy-container row p-4" id="lwCookiePolicyContainer">
        <div class="col-sm-11">
            @include('includes.cookie-policy')
        </div>
        <div class="col-sm-1 mt-2"><button id="lwCookiePolicyButton" class="btn btn-primary"><?= __tr('OK') ?></button></div>
    </div>
    <!-- include footer -->
    @include('includes.footer')
    <!-- /include footer -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- /Scroll to Top Button-->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?= __tr('Ready to Leave?') ?></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= __tr('Select "Logout" below if you are ready to end your current session.') ?>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal"><?= __tr('Not now') ?></button>
                    <a class="btn btn-primary" href="<?= route('user.logout') ?>"><?= __tr('Logout') ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Logout Modal-->
</body>

</html>
<!-- Sidebar -->
<style>
    li.nav-item.active span {
        color: #fff;
    }
    li.nav-item.active {
        background-color: #29a9e0;
    }
    html.lw-light-theme .sidebar-dark .nav-item.active .nav-link, html.lw-light-theme .sidebar-dark .nav-item.active .nav-link i {
        color: #fff!important;
    }
    ul#accordionSidebar li {
        border-bottom: 1px solid rgba(0,0,0,.125);
    }
</style>
<div class="col-3">
<ul style="min-height: auto; width: 95% !important; margin-right: 30px; border: 1px solid #d3d3d3;" class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    {{-- <li>
        <a class="sidebar-brand d-flex align-items-center bg-dark" href="<?= url('/home') ?>">
            <div class="sidebar-brand-icon">
                <img class="lw-logo-img" src="<?= getStoreSettings('small_logo_image_url') ?>" alt="<?= getStoreSettings('name') ?>">
            </div>
            <img class="lw-logo-img d-sm-none d-none d-md-block" src="<?= getStoreSettings('logo_image_url') ?>" alt="<?= getStoreSettings('name') ?>">
            <img class="lw-logo-img d-sm-block d-md-none" src="<?= getStoreSettings('small_logo_image_url') ?>" alt="<?= getStoreSettings('name') ?>">
        </a>
    </li> --}}
    <li class="nav-item mt-2 d-sm-block d-md-none">
        <a href class="nav-link" onclick="getChatMessenger('<?= route('user.read.all_conversation') ?>', true)" id="lwAllMessageChatButton" data-chat-loaded="false" data-toggle="modal" data-target="#messengerDialog">
            <i class="far fa-comments"></i>
            <span><?= __tr('Messenger') ?></span>
        </a>
    </li>
    <!-- Notification Link -->
    <li class="nav-item dropdown no-arrow mx-1 d-sm-block d-md-none">
        <a class="nav-link dropdown-toggle lw-ajax-link-action" href="<?= route('user.notification.write.read_all_notification') ?>" data-callback="onReadAllNotificationCallback" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-method="post">
            <i class="fas fa-bell fa-fw"></i>
            <span><?= __tr('Notification') ?></span>
            <span class="badge badge-danger badge-counter" id="lwNotificationCount"><?= getNotificationList()['notificationCount'] ?></span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
                <?= __tr('Notification') ?>
            </h6>
            <!-- Notification block -->
            @if(!__isEmpty(getNotificationList()['notificationData']))
            <span id="lwNotificationList">
                @foreach(getNotificationList()['notificationData'] as $notification)

                <!-- show all notification list -->
                <a class="dropdown-item d-flex align-items-center" href="<?= $notification['actionUrl'] ?>">
                    <div>
                        <div class="small text-gray-500"><?= $notification['created_at'] ?></div>
                        <span class="font-weight-bold"><?= $notification['message'] ?></span>
                    </div>
                </a>
                <!-- show all notification list -->
                @endforeach
            </span>
            <!-- show all notification link -->
            <a class="dropdown-item text-center small text-gray-500" href="<?= route('user.notification.read.view') ?>" id="lwShowAllNotifyLink"><?= __tr('Show All Notifications.') ?></a>
            <!-- /show all notification link -->
            @else
            <!-- info message -->
            <a class="dropdown-item text-center small text-gray-500"><?= __tr('There are no notification.') ?></a>
            <!-- /info message -->
            @endif
            <!-- /Notification block -->
        </div>
    </li>
    <!-- /Notification Link -->

    <!-- Nav Item - Messages -->
    {{-- <li class="nav-item d-sm-block d-md-none">
        <a class="nav-link" href="<?= route('user.credit_wallet.read.view') ?>">
            <i class="fas fa-coins fa-fw mr-2"></i>
            <span><?= __tr('Credit Wallet') ?></span>
            <span class="badge badge-success badge-counter"><?= totalUserCredits() ?></span>
        </a>
    </li> --}}

    <!-- Nav Item - Messages -->
    <li class="nav-item d-sm-block d-md-none">
        <a class="nav-link" href data-toggle="modal" data-target="#boosterModal">
            <i class="fas fa-bolt fa-fw mr-2"></i>
            <span><?= __tr('Profile Booster') ?></span>
            <span id="lwBoosterTimerCountDownOnSB"></span>
        </a>
    </li>
    @if(isset($is_profile_page) and ($is_profile_page === true))
    @if(!$isBlockUser and !$blockByMeUser)
    @stack('sidebarProfilePage')
    @endif
    @endif
    

    <!-- Divider -->
    
    {{-- <li class="nav-item <?= makeLinkActive('user.who_liked_me_view') ?>">
        <a class="nav-link" href="<?= route('user.who_liked_me_view') ?>">
            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
            <span><?= __tr('Who likes me') ?>
                <?php
                $featurePlans = getStoreSettings('feature_plans');
                $showLike = $featurePlans['show_like']['select_user'];
                ?>
                @if($showLike == 2)
                <span class="lw-premium-feature-badge"></span></span>
            @endif
        </a>
    </li> --}}
    <li class=" <?= makeLinkActive('user.mutual_like_view') ?>">
        <p style="
            background-color: rgba(0,0,0,.03);
            padding: 0.75rem 1.25rem;
            text-align: left;
        "
        >Interactions with your profile</p>
    </li>
    <li class="nav-item <?= makeLinkActive('user.mutual_like_view') ?>">
        <a style="color: #29a9e0; padding-right: 0px; display: flex; justify-content: space-between!important;" class="nav-link" href="<?= route('user.mutual_like_view') ?>">
            <span><?= __tr('Mutual Likes') ?></span>
            <i style="color: #29a9e0;" class="fas fa-chevron-right"></i>
        </a>
    </li>
    <li class="nav-item <?= makeLinkActive('user.my_liked_view') ?>">
        <a style="align-items: center; color: #29a9e0; padding-right: 0px; display: flex; justify-content: space-between!important;" class="nav-link" href="<?= route('user.my_liked_view') ?>">
            <span><?= __tr('My Likes') ?></span>
            <i style="color: #29a9e0;" class="fas fa-chevron-right"></i>
        </a>
    </li>
    <li class="nav-item <?= makeLinkActive('user.my_disliked_view') ?>">
        <a style="align-items: center; color: #29a9e0; padding-right: 0px; display: flex; justify-content: space-between!important;" class="nav-link" href="<?= route('user.my_disliked_view') ?>">
            <span><?= __tr('My Dislikes') ?></span>
            <i style="color: #29a9e0;" class="fas fa-chevron-right"></i>
        </a>
    </li>
    <li class="nav-item  <?= makeLinkActive('user.profile_visitors_view') ?>">
        <a style="align-items: center; color: #29a9e0; padding-right: 0px; display: flex; justify-content: space-between!important;" class="nav-link" href="<?= route('user.profile_visitors_view') ?>">
            <span><?= __tr('Visitors') ?></span>
            <i style="color: #29a9e0;" class="fas fa-chevron-right" aria-hidden="true"></i>
        </a>
    </li>
    <li class="nav-item  <?= makeLinkActive('user.notification.read.view') ?>">
        <a style="align-items: center; color: #29a9e0; padding-right: 0px; display: flex; justify-content: space-between!important;" class="nav-link" href="<?= route('user.notification.read.view') ?>">
            <span><?= __tr('Notifications') ?></span>
            <i style="color: #29a9e0;" class="fas fa-chevron-right" aria-hidden="true"></i>
        </a>
    </li>
    <li class="nav-item  <?= makeLinkActive('user.feedback_us') ?>">
        <a style="align-items: center; color: #29a9e0; padding-right: 0px; display: flex; justify-content: space-between!important;" class="nav-link" href="<?= route('user.feedback_us') ?>">
            <span>Feedback Us</span>
            <i style="color: #29a9e0;" class="fas fa-chevron-right" aria-hidden="true"></i>
        </a>
    </li>
    <li class="nav-item <?= makeLinkActive('user.read.block_user_list') ?>">
        <a style="align-items: center; color: #29a9e0; padding-right: 0px; display: flex; justify-content: space-between!important;" class="nav-link" href="<?= route('user.read.block_user_list') ?>">
            <span><?= __tr('Blocked Users') ?></span>
            <i style="color: #29a9e0;" class="fas fa-chevron-right"></i>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Featured Users -->
    @if(!__isEmpty(getFeatureUserList()))
    <div class="card">
        <div class="card-header">
            <?= __tr('Featured Users') ?>
        </div>
        <div class="card-body lw-featured-users">
            @foreach(getFeatureUserList() as $users)
            <a href="<?= route('user.profile_view', ['username' => $users['username']]) ?>">
                <img class="img-fluid img-thumbnail lw-sidebar-thumbnail lw-lazy-img" data-src="<?= $users['userImageUrl'] ?>">
            </a>
            @endforeach
        </div>
    </div>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    @endif
    <!-- /Featured Users -->

    <!-- sidebar advertisement -->
    @if(!getFeatureSettings('no_adds') and getStoreSettings('user_sidebar_advertisement')['status'] == 'true')
    <li class="nav-item lw-sidebar-ads-container d-none d-md-block">
        <!-- sidebar advertisement content -->
        <div>
            <?= getStoreSettings('user_sidebar_advertisement')['content'] ?>
        </div>
        <!-- /sidebar advertisement content -->
    </li>
    <!-- sidebar advertisement -->
    @endif
    <!-- Sidebar Toggler (Sidebar) -->
</ul>
<!-- End of Sidebar -->
</div>
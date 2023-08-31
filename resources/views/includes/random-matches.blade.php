<style>
    .search-page .profiles-list {
    padding: 15px;
}

.search-divider {
    border-bottom: 1px solid rgba(0, 0, 0, .125);
    clear: both;
    margin: 1rem 0;
}

.search-page .profile {
    height: 110px;
    margin-bottom: 15px;
    padding: 5px;
    position: relative;
}

.profile {
    margin-bottom: 15px;
    min-height: 40px;
}

.search-page .profile .unhide {
    display: none;
}

.search-page .profile .avatar {
    border: 5px solid transparent;
    border-radius: 5px;
    float: left;
    margin-left: -10px;
    margin-right: 10px;
    margin-top: -10px;
    overflow: hidden;
    position: relative;
}

.profile .avatar {
    float: left;
    margin-right: 15px;
}

.text-muted {
    color: #6c757d !important;
}

.search-page .profile .actions {
    font-size: 20px;
}

.search-page .profile .avatar img {
    background: #ddd;
    height: 110px;
    width: 110px;
}

.profile .avatar img {
    background: #fff;
    border: 1px solid #eee;
    border-radius: 3px;
    box-shadow: 0 0 4px -1px #444;
}

.profile .username {
    display: flex;
    font-size: 18px;
}

.search-page .profile .last_active_offline {
    background: #ccc;
}

.search-page .profile .last_active {
    background: green;
    border-radius: 50%;
    display: inline-block;
    height: 12px;
    margin-top: -2px;
    vertical-align: middle;
    width: 12px;
}
.search-page .profile .avatar .nb-photos {
background: rgba(0,0,0,.5);
border-radius: 10px;
color: #fff;
font-family: Helvetica,Arial,sans-serif;
font-size: 10px;
line-height: 1em;
padding: 3px 5px;
position: absolute;
right: 5px;
top: 5px;
}
</style>
@if(!__isEmpty($filterData))
@foreach($filterData as $filter)
{{-- @dd($filter) --}}
<div class="col-4 col-sm-3 col-lg-2">
    <a href="<?= route('user.profile_view', ['username' => $filter['username']]) ?>" class="profile-item">
      <img style="height: 105px;" src="<?= imageOrNoImageAvailable($filter['profileImage']) ?>" data-src="<?= imageOrNoImageAvailable($filter['profileImage']) ?>" alt="Yennefer" class="img-fluid" width="180" height="180">
        @if($filter['imageGalleryCount'] > 0)
        <span class="nb-photos">
        <i class="fas fa-camera" aria-hidden="true"></i>{{ $filter['imageGalleryCount'] }}
     </span>
        @endif
    </a>
</div>

{{-- <div class="card text-center lw-user-thumbnail-block <?= (isset($filter['isPremiumUser']) and $filter['isPremiumUser'] == true) ? 'lw-has-premium-badge' : '' ?>">
    <!-- show user online, idle or offline status -->
    @if($filter['userOnlineStatus'])
    <div class="pt-2">
        @if($filter['userOnlineStatus'] == 1)
        <span class="lw-dot lw-dot-success" title="Online"></span>
        @elseif($filter['userOnlineStatus'] == 2)
        <span class="lw-dot lw-dot-warning" title="Idle"></span>
        @elseif($filter['userOnlineStatus'] == 3)
        <span class="lw-dot lw-dot-danger" title="Offline"></span>
        @endif
    </div>
    @endif
    <!-- /show user online, idle or offline status -->
    <a href="<?= route('user.profile_view', ['username' => $filter['username']]) ?>">
        <img data-src="<?= imageOrNoImageAvailable($filter['profileImage']) ?>" class="lw-user-thumbnail lw-lazy-img" />
    </a>
    <div class="card-title">
        <h5>
            <a class="text-secondary" href="<?= route('user.profile_view', ['username' => $filter['username']]) ?>">
                <?= $filter['fullName'] ?>
            </a>
            <?= $filter['detailString'] ?> <br>
            @if($filter['countryName'])
            <?= $filter['countryName'] ?>
            @endif
        </h5>
    </div>
</div> --}}

@endforeach
@else
<!-- info message -->
<div class="col-sm-12 alert alert-info">
<?= __tr('There are no matches found.') ?>
</div>
<!-- / info message -->
@endif
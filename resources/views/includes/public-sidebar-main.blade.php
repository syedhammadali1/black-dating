<div class="col-md-3">
  <div class="row mr-4">
    <div class="col-md-12 proflzy">
      <div class="profile-imgz">
{{--        @dd($userProfileInfo['userData'])--}}
        <a href="<?= route('user.photos_setting', $userProfileInfo['userData']['userName']) ?>">
        <img src="<?= imageOrNoImageAvailable($userProfileInfo['userData']['profilePicture']) ?>" class="img-fluid">
        </a>
      </div> 
      {{-- @dd($userProfileInfo['userData']) --}}
      @if($userProfileInfo['userData']['userOnlineStatus'])
      <div class="pt-2">
        @if($userProfileInfo['userData']['userOnlineStatus'] == 1)
        <span class="text-success" title="Online"> Online</span>
        @elseif($userProfileInfo['userData']['userOnlineStatus'] == 2)
        <span class="text-warning" title="Idle">Idle</span>
        @elseif($userProfileInfo['userData']['userOnlineStatus'] == 3)
        <span class="text-danger" title="Offline">Offline</span>
        @endif
      </div>
      @endif
    </div>
    <div class="profl-item my-4">
      <h2>{{ $userProfileInfo['userData']['fullName'] }}</h2>
      <p><span> {{ $userProfileInfo['userData']['userAge'] }}</span>
{{--        ·  <span>{{ $userProfileData['gender_text'] }}</span>--}}
      </p>
      <p>
      <div class="location text-truncate">
        {{ $userProfileInfo['userData']['countryName'] ?? 'n/a' }}
				<span class="flag-icon flag-icon-{{strtolower($userProfileInfo['userData']['countryCode']) ?? 'n/a'}}">
					<span class="sr-only">({{$userProfileInfo['userData']['countryCode']}} null)</span>
				</span>
      </div>
      </p>
      <h5>ID : {{ $userProfileInfo['userData']['userId'] }}</h5>
{{--      @if(!$isOwnProfile)--}}
{{--      <p class="msgn"><a onclick="getChatMessenger('<?= route('user.read.individual_conversation', ['specificUserId' => $userProfileInfo['userData']['userId']]) ?>')" href id="lwMessageChatButton" data-chat-loaded="false" data-toggle="modal" data-target="#messengerDialog" class="msgz"> <i class="fas fa-envelope"></i> Message</a></p>--}}
{{--      <p class="ad-tofv">--}}
{{--        <a href data-action="<?= route('user.write.like_dislike', ['toUserUid' => $userProfileInfo['userData']['userUId'], 'like' => 1]) ?>" data-method="post" data-callback="onLikeCallback" title="Like" id="lwLikeBtn" class="ad-favv"> Add to favorites <i class="far fa-heart"></i></a>--}}
{{--        <a href="{{route('user.write.like_dislikee', ['toUserUid' => $userProfileInfo['userData']['userUId'], 'like' => 1])}}" title="Like" id="lwLikeBtn" class="ad-favv lw-ajax-link-action">{{ in_array($userProfileInfo['userData']['userId'],$userProfileInfo['userData']['peopleLikeIds']) ? 'In your favorites' : 'Add to favorites' }}  <i class="{{ in_array($userProfileInfo['userData']['userId'],$userProfileInfo['userData']['peopleLikeIds']) ? 'fa' : 'far' }} fa-heart"></i></a>--}}
{{--      </p>--}}
{{--      @endif--}}
    </div>
  </div>
</div>